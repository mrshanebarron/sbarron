<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\NamecomTransaction;

class NamecomService
{
    private string $baseUrl = 'https://api.name.com/v4';
    private string $username;
    private string $token;
    private bool $mockMode;

    public function __construct()
    {
        $this->username = config('services.namecom.username');
        $this->token = config('services.namecom.token');
        $this->mockMode = config('services.namecom.mock_mode', false);
    }

    /**
     * Search for available domains
     */
    public function searchDomains(string $keyword, array $tlds = ['com', 'net', 'org', 'io']): array
    {
        $endpoint = '/domains:search';
        $payload = [
            'keyword' => $keyword,
            'tlds' => $tlds,
        ];

        return $this->makeRequest('POST', $endpoint, $payload, 'search') ?? [];
    }

    /**
     * Get domain pricing
     */
    public function getDomainPricing(string $domain): ?array
    {
        $endpoint = "/domains/{$domain}:check";

        return $this->makeRequest('GET', $endpoint, null, 'pricing');
    }

    /**
     * Register a new domain
     */
    public function registerDomain(array $domainData): ?array
    {
        $endpoint = '/domains';

        return $this->makeRequest('POST', $endpoint, $domainData, 'registration', $domainData['domain_id'] ?? null);
    }

    /**
     * Renew a domain
     */
    public function renewDomain(string $domainName, int $years = 1): ?array
    {
        $endpoint = "/domains/{$domainName}:renew";
        $payload = ['years' => $years];

        return $this->makeRequest('POST', $endpoint, $payload, 'renewal');
    }

    /**
     * Get domain details
     */
    public function getDomain(string $domainName): ?array
    {
        $endpoint = "/domains/{$domainName}";

        return $this->makeRequest('GET', $endpoint, null, 'get_domain');
    }

    /**
     * Enable/disable auto-renewal
     */
    public function setAutoRenew(string $domainName, bool $enabled): ?array
    {
        $endpoint = "/domains/{$domainName}:setRenewalMode";
        $payload = ['mode' => $enabled ? 'auto' : 'manual'];

        return $this->makeRequest('POST', $endpoint, $payload, 'set_auto_renew');
    }

    /**
     * Enable/disable privacy protection
     */
    public function setPrivacy(string $domainName, bool $enabled): ?array
    {
        $endpoint = "/domains/{$domainName}";
        $payload = ['privacyEnabled' => $enabled];

        return $this->makeRequest('PATCH', $endpoint, $payload, 'set_privacy');
    }

    /**
     * List DNS records for a domain
     */
    public function listDnsRecords(string $domainName): array
    {
        $endpoint = "/domains/{$domainName}/records";

        return $this->makeRequest('GET', $endpoint, null, 'list_dns_records') ?? [];
    }

    /**
     * Create a DNS record
     */
    public function createDnsRecord(string $domainName, array $record): ?array
    {
        $endpoint = "/domains/{$domainName}/records";

        return $this->makeRequest('POST', $endpoint, $record, 'create_dns_record');
    }

    /**
     * Update a DNS record
     */
    public function updateDnsRecord(string $domainName, int $recordId, array $record): ?array
    {
        $endpoint = "/domains/{$domainName}/records/{$recordId}";

        return $this->makeRequest('PUT', $endpoint, $record, 'update_dns_record');
    }

    /**
     * Delete a DNS record
     */
    public function deleteDnsRecord(string $domainName, int $recordId): bool
    {
        $endpoint = "/domains/{$domainName}/records/{$recordId}";
        $response = $this->makeRequest('DELETE', $endpoint, null, 'delete_dns_record');

        return $response !== null;
    }

    /**
     * Point domain to DigitalOcean server
     */
    public function pointToDigitalOcean(string $domainName, string $ipAddress = '157.245.211.127'): bool
    {
        // Get existing records
        $records = $this->listDnsRecords($domainName);

        // Find and update A records for @ and www
        $updated = 0;
        foreach ($records as $record) {
            if ($record['type'] === 'A' && in_array($record['host'], ['@', 'www'])) {
                $this->updateDnsRecord($domainName, $record['id'], [
                    'host' => $record['host'],
                    'type' => 'A',
                    'answer' => $ipAddress,
                    'ttl' => 300,
                ]);
                $updated++;
            }
        }

        // If no A records exist, create them
        if ($updated === 0) {
            $this->createDnsRecord($domainName, [
                'host' => '@',
                'type' => 'A',
                'answer' => $ipAddress,
                'ttl' => 300,
            ]);

            $this->createDnsRecord($domainName, [
                'host' => 'www',
                'type' => 'A',
                'answer' => $ipAddress,
                'ttl' => 300,
            ]);
        }

        return true;
    }

    /**
     * Get nameservers for a domain
     */
    public function getNameservers(string $domainName): array
    {
        $endpoint = "/domains/{$domainName}";
        $response = $this->makeRequest('GET', $endpoint, null, 'get_nameservers');

        return $response['nameservers'] ?? [];
    }

    /**
     * Set nameservers for a domain
     */
    public function setNameservers(string $domainName, array $nameservers): ?array
    {
        $endpoint = "/domains/{$domainName}";
        $payload = ['nameservers' => $nameservers];

        return $this->makeRequest('PATCH', $endpoint, $payload, 'set_nameservers');
    }

    /**
     * Lock/unlock domain
     */
    public function setLock(string $domainName, bool $locked): ?array
    {
        $endpoint = "/domains/{$domainName}";
        $payload = ['locked' => $locked];

        return $this->makeRequest('PATCH', $endpoint, $payload, 'set_lock');
    }

    /**
     * Make HTTP request to Name.com API
     */
    private function makeRequest(
        string $method,
        string $endpoint,
        ?array $payload = null,
        string $transactionType = 'unknown',
        ?int $domainId = null,
        ?int $orderId = null
    ): ?array {
        // Return mock data if in mock mode
        if ($this->mockMode) {
            return $this->getMockResponse($transactionType, $endpoint, $payload);
        }

        $url = $this->baseUrl . $endpoint;

        try {
            $request = Http::withBasicAuth($this->username, $this->token)
                ->withHeaders(['Content-Type' => 'application/json']);

            $response = match($method) {
                'GET' => $request->get($url, $payload ?? []),
                'POST' => $request->post($url, $payload ?? []),
                'PUT' => $request->put($url, $payload ?? []),
                'PATCH' => $request->patch($url, $payload ?? []),
                'DELETE' => $request->delete($url, $payload ?? []),
                default => throw new \InvalidArgumentException("Unsupported HTTP method: {$method}")
            };

            $success = $response->successful();
            $responseData = $response->json();

            // Log transaction
            $this->logTransaction(
                domainId: $domainId,
                orderId: $orderId,
                transactionType: $transactionType,
                endpoint: $endpoint,
                method: $method,
                requestPayload: $payload,
                responsePayload: $responseData,
                httpStatus: $response->status(),
                success: $success,
                errorMessage: $success ? null : ($responseData['message'] ?? 'Unknown error')
            );

            if (!$success) {
                Log::error('Name.com API Error', [
                    'endpoint' => $endpoint,
                    'status' => $response->status(),
                    'response' => $responseData,
                ]);

                return null;
            }

            return $responseData;

        } catch (\Exception $e) {
            Log::error('Name.com API Exception', [
                'endpoint' => $endpoint,
                'message' => $e->getMessage(),
            ]);

            // Log failed transaction
            $this->logTransaction(
                domainId: $domainId,
                orderId: $orderId,
                transactionType: $transactionType,
                endpoint: $endpoint,
                method: $method,
                requestPayload: $payload,
                responsePayload: null,
                httpStatus: 0,
                success: false,
                errorMessage: $e->getMessage()
            );

            return null;
        }
    }

    /**
     * Log API transaction to database
     */
    private function logTransaction(
        ?int $domainId,
        ?int $orderId,
        string $transactionType,
        string $endpoint,
        string $method,
        ?array $requestPayload,
        ?array $responsePayload,
        int $httpStatus,
        bool $success,
        ?string $errorMessage
    ): void {
        try {
            NamecomTransaction::create([
                'domain_id' => $domainId,
                'order_id' => $orderId,
                'transaction_type' => $transactionType,
                'endpoint' => $endpoint,
                'method' => $method,
                'request_payload' => $requestPayload,
                'response_payload' => $responsePayload,
                'http_status' => $httpStatus,
                'success' => $success,
                'error_message' => $errorMessage,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to log Name.com transaction', [
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Get mock response for testing
     */
    private function getMockResponse(string $transactionType, string $endpoint, ?array $payload): ?array
    {
        Log::info('Name.com API Mock Mode', [
            'type' => $transactionType,
            'endpoint' => $endpoint,
            'payload' => $payload,
        ]);

        return match($transactionType) {
            'search' => [
                'results' => [
                    [
                        'domainName' => 'example.com',
                        'purchasable' => true,
                        'premium' => false,
                        'purchasePrice' => 1200,
                        'purchaseType' => 'registration',
                        'renewalPrice' => 1200,
                    ],
                    [
                        'domainName' => 'example.net',
                        'purchasable' => true,
                        'premium' => false,
                        'purchasePrice' => 1400,
                        'purchaseType' => 'registration',
                        'renewalPrice' => 1400,
                    ],
                ],
            ],
            'pricing' => [
                'domainName' => $payload['domain'] ?? 'test.com',
                'purchasable' => true,
                'premium' => false,
                'purchasePrice' => 1200,
                'renewalPrice' => 1200,
            ],
            'get_domain' => [
                'domainName' => 'test.com',
                'nameservers' => ['ns1.name.com', 'ns2.name.com'],
                'locked' => false,
                'autoRenew' => true,
            ],
            'create_dns_record', 'update_dns_record' => [
                'id' => rand(1000, 9999),
                'domainName' => 'test.com',
                'host' => $payload['host'] ?? '@',
                'type' => $payload['type'] ?? 'A',
                'answer' => $payload['answer'] ?? '157.245.211.127',
                'ttl' => $payload['ttl'] ?? 300,
            ],
            'list_dns_records' => [
                'records' => [
                    [
                        'id' => 1001,
                        'domainName' => 'test.com',
                        'host' => '@',
                        'type' => 'A',
                        'answer' => '157.245.211.127',
                        'ttl' => 300,
                    ],
                ],
            ],
            default => ['success' => true, 'message' => 'Mock response'],
        };
    }
}
