<?php

namespace App\Filament\Resources\DnsRecordResource\Pages;

use App\Filament\Resources\DnsRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDnsRecords extends ListRecords
{
    protected static string $resource = DnsRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
