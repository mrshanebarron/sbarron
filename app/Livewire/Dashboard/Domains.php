<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Domains extends Component
{
    use WithPagination;

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
        $domains = $this->customer->domains()
            ->latest()
            ->paginate(10);

        return view('livewire.dashboard.domains', [
            'domains' => $domains,
        ])->layout('layouts.dashboard');
    }
}
