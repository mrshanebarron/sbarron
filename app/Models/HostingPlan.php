<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class HostingPlan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'monthly_price',
        'yearly_price',
        'features',
        'max_domains',
        'max_databases',
        'storage_limit',
        'bandwidth_limit',
        'ssl_included',
        'daily_backups',
        'staging_environment',
        'priority_support',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'monthly_price' => 'decimal:2',
        'yearly_price' => 'decimal:2',
        'ssl_included' => 'boolean',
        'daily_backups' => 'boolean',
        'staging_environment' => 'boolean',
        'priority_support' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function hostingServices(): HasMany
    {
        return $this->hasMany(HostingService::class);
    }

    public function getMonthlySavingsAttribute(): float
    {
        $monthlyTotal = $this->monthly_price * 12;
        return $monthlyTotal - $this->yearly_price;
    }

    public function getYearlySavingsPercentAttribute(): float
    {
        if ($this->monthly_price == 0) {
            return 0;
        }

        $monthlyTotal = $this->monthly_price * 12;
        return (($monthlyTotal - $this->yearly_price) / $monthlyTotal) * 100;
    }
}
