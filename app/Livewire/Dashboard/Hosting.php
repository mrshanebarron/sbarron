<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;

class Hosting extends Component
{
    public $customer;
    public $showCredentials = [];

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
    }

    public function toggleCredentials($serviceId)
    {
        $this->showCredentials[$serviceId] = !($this->showCredentials[$serviceId] ?? false);
    }

    public function render()
    {
        $services = $this->customer->hostingServices()
            ->with(['hostingPlan'])
            ->latest()
            ->get();

        return view('livewire.dashboard.hosting', [
            'services' => $services,
        ])->layout('layouts.dashboard');
    }
}
