<?php

namespace App\Filament\Widgets;

use App\Models\HostingService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HostingServicesOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $customer = auth()->user()->customer;

        if (!$customer) {
            return [];
        }

        $total = HostingService::where('customer_id', $customer->id)->count();
        $active = HostingService::where('customer_id', $customer->id)
            ->where('status', 'active')
            ->count();
        $provisioning = HostingService::where('customer_id', $customer->id)
            ->where('status', 'provisioning')
            ->count();

        return [
            Stat::make('Total Services', $total)
                ->description('Your hosting services')
                ->descriptionIcon('heroicon-o-server')
                ->color('primary'),
            Stat::make('Active', $active)
                ->description('Live and running')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('Provisioning', $provisioning)
                ->description('Being set up')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}
