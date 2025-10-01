<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ShoppingCart extends Component
{
    public array $items = [];
    public bool $isOpen = false;

    public function mount()
    {
        $this->items = session()->get('cart', []);
    }

    #[On('domain-added-to-cart')]
    public function addItem($data)
    {
        $domain = $data['domain'];
        $price = $data['price'];

        // Check if already in cart
        if (isset($this->items[$domain])) {
            return;
        }

        $this->items[$domain] = [
            'domain' => $domain,
            'price' => $price,
            'type' => 'registration',
        ];

        session()->put('cart', $this->items);
        $this->isOpen = true;
    }

    public function removeItem(string $domain)
    {
        unset($this->items[$domain]);
        session()->put('cart', $this->items);
    }

    public function clearCart()
    {
        $this->items = [];
        session()->forget('cart');
    }

    public function toggleCart()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function getSubtotalProperty()
    {
        return collect($this->items)->sum('price');
    }

    public function getTaxProperty()
    {
        return $this->subtotal * 0.0; // No tax for now
    }

    public function getTotalProperty()
    {
        return $this->subtotal + $this->tax;
    }

    public function checkout()
    {
        if (count($this->items) === 0) {
            session()->flash('error', 'Your cart is empty.');
            return;
        }

        return redirect()->route('checkout');
    }

    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
