<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HostingPlan;

class HostingPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Domain + DNS',
                'slug' => 'domain-dns',
                'description' => 'Domain registration with professional DNS management',
                'monthly_price' => 0,
                'yearly_price' => 20.00,
                'features' => [
                    'Domain Registration',
                    'Professional DNS Management',
                    'Email Forwarding',
                    'WHOIS Privacy Protection',
                    'DNS Records Management',
                    'Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 0,
                'storage_limit' => '0GB',
                'bandwidth_limit' => 'N/A',
                'ssl_included' => false,
                'daily_backups' => false,
                'staging_environment' => false,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 1,
            ],
            [
                'name' => 'Laravel Hosting',
                'slug' => 'laravel-hosting',
                'description' => 'Production-ready Laravel hosting with automated deployment',
                'monthly_price' => 50.00,
                'yearly_price' => 540.00, // Save 10%
                'features' => [
                    'Domain + SSL Certificate',
                    '20GB SSD Storage',
                    'MySQL Database',
                    'Redis Caching',
                    'Automated Git Deployment',
                    'Daily Backups',
                    'Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 1,
                'storage_limit' => '20GB',
                'bandwidth_limit' => 'Unlimited',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => false,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 2,
            ],
            [
                'name' => 'Full-Service Laravel',
                'slug' => 'full-service-laravel',
                'description' => 'White-glove Laravel deployment with personal setup',
                'monthly_price' => 150.00,
                'yearly_price' => 1620.00, // Save 10%
                'features' => [
                    'Everything in Laravel Hosting',
                    'Personal Setup by Shane ($500 value)',
                    'Git Repository Configuration',
                    'Environment Variables Setup',
                    'Database Migration & Seeding',
                    'Custom Domain Configuration',
                    'Staging Environment',
                    'Priority Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 2,
                'storage_limit' => '50GB',
                'bandwidth_limit' => 'Unlimited',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Managed Laravel Pro',
                'slug' => 'managed-laravel-pro',
                'description' => 'Fully managed Laravel with ongoing support & updates',
                'monthly_price' => 300.00,
                'yearly_price' => 3240.00, // Save 10%
                'features' => [
                    'Everything in Full-Service',
                    'Monthly Laravel & Package Updates',
                    'Security Patch Management',
                    'Performance Optimization',
                    'Database Query Optimization',
                    'Weekly Backups (Offsite)',
                    'Staging + Production Environments',
                    'Priority Support (4hr Response)',
                    'Monthly Performance Reports',
                ],
                'max_domains' => 3,
                'max_databases' => 5,
                'storage_limit' => '100GB',
                'bandwidth_limit' => 'Unlimited',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => true,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 4,
            ],
        ];

        foreach ($plans as $plan) {
            HostingPlan::create($plan);
        }
    }
}
