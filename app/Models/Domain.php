<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'customer_id',
        'domain_name',
        'tld',
        'status',
        'namecom_domain_id',
        'purchase_price',
        'renewal_price',
        'registered_at',
        'expires_at',
        'auto_renew',
        'privacy_enabled',
        'locked',
        'nameservers',
        'notes',
    ];

    protected $casts = [
        'purchase_price' => 'decimal:2',
        'renewal_price' => 'decimal:2',
        'registered_at' => 'date',
        'expires_at' => 'date',
        'auto_renew' => 'boolean',
        'privacy_enabled' => 'boolean',
        'locked' => 'boolean',
        'nameservers' => 'array',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function dnsRecords(): HasMany
    {
        return $this->hasMany(DnsRecord::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function namecomTransactions(): HasMany
    {
        return $this->hasMany(NamecomTransaction::class);
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
