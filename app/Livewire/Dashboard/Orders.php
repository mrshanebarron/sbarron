<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public $customer;
    public $selectedOrder = null;

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

    public function viewOrder($orderId)
    {
        $this->selectedOrder = $this->customer->orders()->with(['domain'])->findOrFail($orderId);
    }

    public function closeModal()
    {
        $this->selectedOrder = null;
    }

    public function render()
    {
        $orders = $this->customer->orders()
            ->with(['domain'])
            ->latest()
            ->paginate(10);

        return view('livewire.dashboard.orders', [
            'orders' => $orders,
        ])->layout('layouts.dashboard');
    }
}
