<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;

class Billing extends Component
{
    public $customer;

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

    public function render()
    {
        $invoices = $this->customer->orders()
            ->where('payment_status', 'paid')
            ->latest()
            ->take(20)
            ->get();

        return view('livewire.dashboard.billing', [
            'invoices' => $invoices,
        ])->layout('layouts.dashboard');
    }
}
