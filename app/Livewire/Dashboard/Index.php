<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;

class Index extends Component
{
    public $customer;
    public $stats = [];

    public function mount()
    {
        $user = auth()->user();
        $this->customer = Customer::firstOrCreate(
            ['user_id' => $user->id],
            [
                'company_name' => null,
                'phone' => null,
                'country' => 'US',
                'auto_renew' => true,
            ]
        );

        $this->loadStats();
    }

    public function loadStats()
    {
        $this->stats = [
            'total_orders' => $this->customer->orders()->count(),
            'active_domains' => $this->customer->domains()->where('status', 'active')->count(),
            'expiring_domains' => $this->customer->domains()
                ->where('status', 'active')
                ->where('expires_at', '<=', now()->addDays(30))
                ->count(),
            'active_hosting' => $this->customer->hostingServices()->where('status', 'active')->count(),
            'recent_orders' => $this->customer->orders()
                ->with(['domain'])
                ->latest()
                ->take(5)
                ->get(),
            'expiring_soon' => $this->customer->domains()
                ->where('status', 'active')
                ->where('expires_at', '<=', now()->addDays(30))
                ->orderBy('expires_at')
                ->get(),
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.index')
            ->layout('layouts.dashboard');
    }
}
