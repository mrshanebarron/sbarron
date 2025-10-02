<?php

namespace App\Services;

use phpseclib3\Net\SSH2;
use phpseclib3\Crypt\PublicKeyLoader;
use Illuminate\Support\Facades\Log;
use App\Services\NamecomService;

class ProvisioningService
{
    private SSH2 $ssh;
    private string $serverIp = '157.245.211.127';
    private string $sshKeyPath;

    public function __construct()
    {
        $this->sshKeyPath = $_SERVER['HOME'] . '/.ssh/digitalocean_server';
    }

    /**
     * Connect to the server via SSH
     */
    private function connect(): bool
    {
        try {
            $this->ssh = new SSH2($this->serverIp);

            $key = PublicKeyLoader::load(file_get_contents($this->sshKeyPath));

            if (!$this->ssh->login('root', $key)) {
                Log::error('SSH authentication failed');
                return false;
            }

            Log::info('SSH connection established');
            return true;

        } catch (\Exception $e) {
            Log::error('SSH connection error', ['error' => $e->getMessage()]);
            return false;
        }
    }

    /**
     * Execute command on remote server
     */
    private function execute(string $command): array
    {
        if (!isset($this->ssh) || !$this->ssh->isConnected()) {
            if (!$this->connect()) {
                return ['success' => false, 'output' => 'SSH connection failed'];
            }
        }

        $output = $this->ssh->exec($command);
        $exitCode = $this->ssh->getExitStatus();

        Log::info('SSH command executed', [
            'command' => $command,
            'exit_code' => $exitCode,
            'output' => substr($output, 0, 500), // Log first 500 chars
        ]);

        return [
            'success' => $exitCode === 0,
            'output' => $output,
            'exit_code' => $exitCode,
        ];
    }

    /**
     * Deploy Laravel application
     */
    public function deployLaravel(string $domain, string $gitRepo, string $branch = 'master'): array
    {
        Log::info('Starting Laravel deployment', [
            'domain' => $domain,
            'repo' => $gitRepo,
            'branch' => $branch,
        ]);

        $result = $this->execute("deploy-laravel {$domain} {$gitRepo} {$branch}");

        if ($result['success']) {
            Log::info('Laravel deployment successful', ['domain' => $domain]);
        } else {
            Log::error('Laravel deployment failed', [
                'domain' => $domain,
                'error' => $result['output'],
            ]);
        }

        return $result;
    }

    /**
     * Create MySQL database and user
     */
    public function createDatabase(string $dbName, string $dbUser, string $dbPassword): array
    {
        $escapedPassword = escapeshellarg($dbPassword);

        $commands = [
            "mysql -e \"CREATE DATABASE IF NOT EXISTS {$dbName};\"",
            "mysql -e \"CREATE USER IF NOT EXISTS '{$dbUser}'@'localhost' IDENTIFIED BY {$escapedPassword};\"",
            "mysql -e \"GRANT ALL PRIVILEGES ON {$dbName}.* TO '{$dbUser}'@'localhost';\"",
            "mysql -e \"FLUSH PRIVILEGES;\"",
        ];

        foreach ($commands as $command) {
            $result = $this->execute($command);
            if (!$result['success']) {
                return $result;
            }
        }

        Log::info('Database created successfully', [
            'database' => $dbName,
            'user' => $dbUser,
        ]);

        return ['success' => true, 'output' => 'Database created successfully'];
    }

    /**
     * Update .env file on server
     */
    public function updateEnv(string $domain, array $env): array
    {
        $projectPath = "/var/www/{$domain}";
        $envFile = "{$projectPath}/.env";

        // Build env file content
        $envContent = '';
        foreach ($env as $key => $value) {
            $envContent .= "{$key}={$value}\n";
        }

        // Escape for shell
        $escapedContent = escapeshellarg($envContent);

        // Write env file
        $result = $this->execute("echo {$escapedContent} > {$envFile}");

        if ($result['success']) {
            // Set proper permissions
            $this->execute("chmod 644 {$envFile}");
            $this->execute("chown deploy:www-data {$envFile}");

            Log::info('Environment file updated', ['domain' => $domain]);
        }

        return $result;
    }

    /**
     * Install SSL certificate via Certbot
     */
    public function installSSL(string $domain): array
    {
        Log::info('Installing SSL certificate', ['domain' => $domain]);

        $result = $this->execute("certbot --nginx -d {$domain} --non-interactive --agree-tos --email mrshanebarron@gmail.com");

        if ($result['success']) {
            Log::info('SSL certificate installed', ['domain' => $domain]);
        } else {
            Log::error('SSL installation failed', [
                'domain' => $domain,
                'error' => $result['output'],
            ]);
        }

        return $result;
    }

    /**
     * Configure DNS records for domain
     */
    public function configureDNS(string $domain): array
    {
        Log::info('Configuring DNS records', ['domain' => $domain]);

        $namecom = new NamecomService();

        try {
            // Check if we manage this domain via Name.com
            $domainInfo = $namecom->getDomain($domain);

            if (!$domainInfo) {
                Log::warning('Domain not found in Name.com account', ['domain' => $domain]);
                return [
                    'success' => false,
                    'message' => 'Domain not managed by Name.com or not accessible',
                ];
            }

            // Use the built-in pointToDigitalOcean method which handles both A and www records
            $result = $namecom->pointToDigitalOcean($domain, $this->serverIp);

            Log::info('DNS records configured successfully', [
                'domain' => $domain,
                'server_ip' => $this->serverIp,
            ]);

            return [
                'success' => $result,
                'message' => 'DNS records pointed to ' . $this->serverIp,
            ];

        } catch (\Exception $e) {
            Log::error('DNS configuration failed', [
                'domain' => $domain,
                'error' => $e->getMessage(),
            ]);

            return [
                'success' => false,
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Full hosting setup workflow
     */
    public function provisionHosting(array $config): array
    {
        $domain = $config['domain'];
        $gitRepo = $config['git_repo'] ?? null;
        $branch = $config['git_branch'] ?? 'master';
        $configureDNS = $config['configure_dns'] ?? false;

        $dbName = $config['db_name'] ?? str_replace(['.', '-'], '_', $domain);
        $dbUser = $config['db_user'] ?? $dbName;
        $dbPassword = $config['db_password'] ?? bin2hex(random_bytes(16));

        Log::info('Starting full hosting provisioning', ['domain' => $domain]);

        $steps = [];

        // Step 1: Configure DNS (if requested)
        if ($configureDNS) {
            $steps['dns'] = $this->configureDNS($domain);
            // Continue even if DNS fails (might be manually configured)
        }

        // Step 2: Create database
        $steps['database'] = $this->createDatabase($dbName, $dbUser, $dbPassword);
        if (!$steps['database']['success']) {
            return ['success' => false, 'error' => 'Database creation failed', 'steps' => $steps];
        }

        // Step 3: Deploy Laravel (if repo provided)
        if ($gitRepo) {
            $steps['deployment'] = $this->deployLaravel($domain, $gitRepo, $branch);
            if (!$steps['deployment']['success']) {
                return ['success' => false, 'error' => 'Deployment failed', 'steps' => $steps];
            }

            // Step 4: Update .env file
            $env = [
                'APP_NAME' => escapeshellarg($domain),
                'APP_ENV' => 'production',
                'APP_DEBUG' => 'false',
                'APP_URL' => "https://{$domain}",
                'DB_CONNECTION' => 'mysql',
                'DB_HOST' => '127.0.0.1',
                'DB_PORT' => '3306',
                'DB_DATABASE' => $dbName,
                'DB_USERNAME' => $dbUser,
                'DB_PASSWORD' => $dbPassword,
            ];

            $steps['env'] = $this->updateEnv($domain, $env);
        }

        // Step 5: Install SSL (requires DNS to be pointed)
        // Note: This will fail if DNS not configured yet
        $steps['ssl'] = $this->installSSL($domain);
        // Don't fail provisioning if SSL fails (DNS might not be ready)

        Log::info('Hosting provisioning completed', [
            'domain' => $domain,
            'steps' => array_keys($steps),
        ]);

        return [
            'success' => true,
            'domain' => $domain,
            'database' => [
                'name' => $dbName,
                'user' => $dbUser,
                'password' => $dbPassword,
            ],
            'steps' => $steps,
        ];
    }

    /**
     * Disconnect SSH
     */
    public function disconnect(): void
    {
        if (isset($this->ssh) && $this->ssh->isConnected()) {
            $this->ssh->disconnect();
            Log::info('SSH connection closed');
        }
    }
}
