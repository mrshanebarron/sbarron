<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class HostingService extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'customer_id',
        'hosting_plan_id',
        'domain_id',
        'service_name',
        'status',
        'server_ip',
        'server_username',
        'database_name',
        'database_username',
        'ftp_username',
        'billing_cycle',
        'price',
        'next_billing_date',
        'activated_at',
        'expires_at',
        'auto_renew',
        'metadata',
        'notes',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'next_billing_date' => 'date',
        'activated_at' => 'date',
        'expires_at' => 'date',
        'auto_renew' => 'boolean',
        'metadata' => 'array',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function hostingPlan(): BelongsTo
    {
        return $this->belongsTo(HostingPlan::class);
    }

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }

    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    public function isExpiringSoon(int $days = 30): bool
    {
        return $this->expires_at && $this->expires_at->diffInDays(now()) <= $days;
    }

    public function isExpired(): bool
    {
        return $this->expires_at && $this->expires_at->isPast();
    }
}
