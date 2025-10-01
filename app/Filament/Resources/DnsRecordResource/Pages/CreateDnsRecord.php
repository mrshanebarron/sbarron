<?php

namespace App\Filament\Resources\DnsRecordResource\Pages;

use App\Filament\Resources\DnsRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDnsRecord extends CreateRecord
{
    protected static string $resource = DnsRecordResource::class;
}
