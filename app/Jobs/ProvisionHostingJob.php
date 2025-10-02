<?php

namespace App\Jobs;

use App\Models\HostingService;
use App\Services\ProvisioningService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Notifications\HostingProvisionedNotification;

class ProvisionHostingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;
    public int $timeout = 300; // 5 minutes

    /**
     * Create a new job instance.
     */
    public function __construct(
        public HostingService $hostingService,
        public string $domain,
        public ?string $gitRepo = null,
        public ?string $gitBranch = 'master'
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(ProvisioningService $provisioning): void
    {
        Log::info('Starting hosting provisioning job', [
            'hosting_service_id' => $this->hostingService->id,
            'domain' => $this->domain,
            'plan' => $this->hostingService->hostingPlan->name ?? 'Unknown',
            'droplet_size' => $this->hostingService->hostingPlan->digitalocean_size ?? 'Unknown',
        ]);

        try {
            // Update status to provisioning
            $this->hostingService->update(['status' => 'provisioning']);

            $config = [
                'domain' => $this->domain,
                'git_repo' => $this->gitRepo,
                'git_branch' => $this->gitBranch,
                'droplet_size' => $this->hostingService->hostingPlan->digitalocean_size ?? 's-1vcpu-1gb',
                'plan_specs' => $this->hostingService->hostingPlan->server_specs ?? [],
            ];

            $result = $provisioning->provisionHosting($config);

            if ($result['success']) {
                // Update hosting service with credentials
                $this->hostingService->update([
                    'domain' => $this->domain,
                    'status' => 'active',
                    'server_ip' => '157.245.211.127',
                    'database_name' => $result['database']['name'],
                    'database_user' => $result['database']['user'],
                    'database_password' => $result['database']['password'],
                    'provisioned_at' => now(),
                ]);

                Log::info('Hosting provisioning completed successfully', [
                    'hosting_service_id' => $this->hostingService->id,
                    'domain' => $this->domain,
                ]);

                // Send provisioning complete email
                $user = $this->hostingService->customer->user;
                if ($user) {
                    $user->notify(new HostingProvisionedNotification($this->hostingService));
                }

            } else {
                throw new \Exception('Provisioning failed: ' . ($result['error'] ?? 'Unknown error'));
            }

        } catch (\Exception $e) {
            Log::error('Hosting provisioning failed', [
                'hosting_service_id' => $this->hostingService->id,
                'domain' => $this->domain,
                'error' => $e->getMessage(),
            ]);

            $this->hostingService->update([
                'status' => 'failed',
                'notes' => 'Provisioning failed: ' . $e->getMessage(),
            ]);

            // Re-throw to trigger job retry
            throw $e;
        } finally {
            $provisioning->disconnect();
        }
    }

    /**
     * Handle a job failure.
     */
    public function failed(\Throwable $exception): void
    {
        Log::error('Hosting provisioning job failed permanently', [
            'hosting_service_id' => $this->hostingService->id,
            'domain' => $this->domain,
            'error' => $exception->getMessage(),
        ]);

        $this->hostingService->update([
            'status' => 'failed',
            'notes' => 'Provisioning failed after ' . $this->tries . ' attempts: ' . $exception->getMessage(),
        ]);

        // TODO: Send failure notification to admin
    }
}
