<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DnsRecord extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'domain_id',
        'namecom_record_id',
        'type',
        'host',
        'answer',
        'ttl',
        'priority',
        'is_active',
    ];

    protected $casts = [
        'ttl' => 'integer',
        'priority' => 'integer',
        'is_active' => 'boolean',
    ];

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
