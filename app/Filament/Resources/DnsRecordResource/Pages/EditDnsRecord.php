<?php

namespace App\Filament\Resources\DnsRecordResource\Pages;

use App\Filament\Resources\DnsRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDnsRecord extends EditRecord
{
    protected static string $resource = DnsRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
