<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HostingPlan;

class AffordableHostingPlanSeeder extends Seeder
{
    public function run(): void
    {
        // Delete old plans
        HostingPlan::truncate();

        $plans = [
            [
                'name' => 'Starter',
                'slug' => 'starter',
                'description' => 'Perfect for personal projects, portfolios, and small blogs',
                'monthly_price' => 12.00,
                'yearly_price' => 129.60, // Save 10%
                'features' => [
                    '1 vCPU Core',
                    '1GB RAM',
                    '25GB SSD Storage',
                    '1TB Bandwidth',
                    '1 Laravel Application',
                    'Free SSL Certificate',
                    'Daily Automated Backups',
                    'MySQL 8 Database',
                    'Redis Caching',
                    'Git Auto-Deploy',
                    'Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 1,
                'storage_limit' => '25GB',
                'bandwidth_limit' => '1TB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => false,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 1,
                'metadata' => [
                    'vcpu' => 1,
                    'ram_gb' => 1,
                    'storage_gb' => 25,
                    'bandwidth_tb' => 1,
                    'digitalocean_size' => 's-1vcpu-1gb', // DO droplet slug
                    'max_apps' => 1,
                    'queue_workers' => false,
                    'cron_jobs' => true,
                ],
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Ideal for small businesses, SaaS startups, and freelance client sites',
                'monthly_price' => 25.00,
                'yearly_price' => 270.00, // Save 10%
                'features' => [
                    '1 vCPU Core (Premium)',
                    '2GB RAM',
                    '50GB SSD Storage',
                    '2TB Bandwidth',
                    '1 Laravel Application',
                    'Free SSL Certificate',
                    'Daily Automated Backups',
                    'MySQL 8 Database',
                    'Redis Caching',
                    'Staging Environment',
                    'Git Auto-Deploy',
                    'Queue Workers',
                    'Priority Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 1,
                'storage_limit' => '50GB',
                'bandwidth_limit' => '2TB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
                'metadata' => [
                    'vcpu' => 1,
                    'ram_gb' => 2,
                    'storage_gb' => 50,
                    'bandwidth_tb' => 2,
                    'digitalocean_size' => 's-1vcpu-2gb',
                    'max_apps' => 1,
                    'queue_workers' => true,
                    'cron_jobs' => true,
                ],
            ],
            [
                'name' => 'Professional',
                'slug' => 'professional',
                'description' => 'Built for growing businesses and revenue-generating applications',
                'monthly_price' => 60.00,
                'yearly_price' => 648.00, // Save 10%
                'features' => [
                    '4 vCPU Cores',
                    '8GB RAM',
                    '160GB SSD Storage',
                    '5TB Bandwidth',
                    'Up to 3 Laravel Applications',
                    'Free SSL Certificates',
                    'Daily Automated Backups',
                    'MySQL 8 Databases (up to 3)',
                    'Redis Caching',
                    'Staging + Production Environments',
                    'Git Auto-Deploy',
                    'Queue Workers (Multiple)',
                    'Scheduled Tasks (Cron)',
                    'Server Monitoring',
                    'Priority Support (Same-day response)',
                ],
                'max_domains' => 3,
                'max_databases' => 3,
                'storage_limit' => '160GB',
                'bandwidth_limit' => '5TB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => true,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 3,
                'metadata' => [
                    'vcpu' => 4,
                    'ram_gb' => 8,
                    'storage_gb' => 160,
                    'bandwidth_tb' => 5,
                    'digitalocean_size' => 's-4vcpu-8gb',
                    'max_apps' => 3,
                    'queue_workers' => true,
                    'cron_jobs' => true,
                ],
            ],
            [
                'name' => 'Enterprise',
                'slug' => 'enterprise',
                'description' => 'High-performance hosting for agencies and high-traffic applications',
                'monthly_price' => 120.00,
                'yearly_price' => 1296.00, // Save 10%
                'features' => [
                    '8 vCPU Cores',
                    '16GB RAM',
                    '300GB SSD Storage',
                    '10TB Bandwidth',
                    'Unlimited Laravel Applications',
                    'Free SSL Certificates',
                    'Hourly Automated Backups',
                    'MySQL 8 Databases (Unlimited)',
                    'Redis + Memcached',
                    'Multiple Environments per App',
                    'Git Auto-Deploy',
                    'Queue Workers (Unlimited)',
                    'Scheduled Tasks (Cron)',
                    '24/7 Server Monitoring',
                    'Load Balancing Ready',
                    'Dedicated Support',
                    '2-hour Response Time',
                ],
                'max_domains' => 999,
                'max_databases' => 999,
                'storage_limit' => '300GB',
                'bandwidth_limit' => '10TB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => true,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 4,
                'metadata' => [
                    'vcpu' => 8,
                    'ram_gb' => 16,
                    'storage_gb' => 300,
                    'bandwidth_tb' => 10,
                    'digitalocean_size' => 's-8vcpu-16gb',
                    'max_apps' => 999,
                    'queue_workers' => true,
                    'cron_jobs' => true,
                ],
            ],
        ];

        foreach ($plans as $plan) {
            HostingPlan::create($plan);
        }

        $this->command->info('Affordable hosting plans seeded successfully!');
    }
}
