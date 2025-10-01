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
                'name' => 'Starter',
                'slug' => 'starter',
                'description' => 'Perfect for personal projects and small websites',
                'monthly_price' => 9.99,
                'yearly_price' => 99.00, // Save ~17%
                'features' => [
                    '1 Website',
                    '10GB SSD Storage',
                    '100GB Bandwidth',
                    'Free SSL Certificate',
                    'Daily Backups',
                    'Email Support',
                ],
                'max_domains' => 1,
                'max_databases' => 1,
                'storage_limit' => '10GB',
                'bandwidth_limit' => '100GB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => false,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 1,
            ],
            [
                'name' => 'Professional',
                'slug' => 'professional',
                'description' => 'Ideal for growing businesses and multiple projects',
                'monthly_price' => 19.99,
                'yearly_price' => 199.00, // Save ~17%
                'features' => [
                    '5 Websites',
                    '50GB SSD Storage',
                    '500GB Bandwidth',
                    'Free SSL Certificates',
                    'Daily Backups',
                    'Staging Environment',
                    '24/7 Email Support',
                ],
                'max_domains' => 5,
                'max_databases' => 5,
                'storage_limit' => '50GB',
                'bandwidth_limit' => '500GB',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => false,
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'For established businesses with high traffic websites',
                'monthly_price' => 49.99,
                'yearly_price' => 499.00, // Save ~17%
                'features' => [
                    'Unlimited Websites',
                    '200GB SSD Storage',
                    'Unlimited Bandwidth',
                    'Free SSL Certificates',
                    'Hourly Backups',
                    'Staging Environment',
                    'Priority Support 24/7',
                    'Performance Monitoring',
                ],
                'max_domains' => 999,
                'max_databases' => 20,
                'storage_limit' => '200GB',
                'bandwidth_limit' => 'Unlimited',
                'ssl_included' => true,
                'daily_backups' => true,
                'staging_environment' => true,
                'priority_support' => true,
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 3,
            ],
            [
                'name' => 'Enterprise',
                'slug' => 'enterprise',
                'description' => 'Custom solution for large-scale applications',
                'monthly_price' => 199.99,
                'yearly_price' => 1999.00, // Save ~17%
                'features' => [
                    'Unlimited Everything',
                    '1TB SSD Storage',
                    'Unlimited Bandwidth',
                    'Free SSL Certificates',
                    'Hourly Backups',
                    'Multiple Staging Environments',
                    'Dedicated Account Manager',
                    '24/7 Phone & Priority Support',
                    'Performance Monitoring',
                    'Custom Server Configuration',
                ],
                'max_domains' => 999,
                'max_databases' => 999,
                'storage_limit' => '1TB',
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
