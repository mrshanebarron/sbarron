<?php

namespace App\Livewire\Dashboard;

use App\Models\Customer;
use Livewire\Component;

class Settings extends Component
{
    public $customer;
    public $name;
    public $email;
    public $company_name;
    public $phone;

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

        $this->name = $user->name;
        $this->email = $user->email;
        $this->company_name = $this->customer->company_name;
        $this->phone = $this->customer->phone;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->customer->update([
            'company_name' => $this->company_name,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Settings updated successfully.');
    }

    public function render()
    {
        return view('livewire.dashboard.settings')
            ->layout('layouts.dashboard');
    }
}
