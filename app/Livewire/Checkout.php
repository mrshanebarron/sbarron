<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Customer;
use App\Models\Domain;
use App\Models\Order;
use App\Services\NamecomService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Checkout extends Component
{
    public array $items = [];

    // Customer Information
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $company_name = '';
    public string $phone = '';

    // Address
    public string $address_line_1 = '';
    public string $address_line_2 = '';
    public string $city = '';
    public string $state = '';
    public string $postal_code = '';
    public string $country = 'US';

    // Payment
    public string $payment_method = 'credit_card';

    public bool $processing = false;
    public string $error = '';

    protected $rules = [
        'name' => 'required|string|min:2|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'company_name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'address_line_1' => 'required|string|max:255',
        'address_line_2' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'postal_code' => 'required|string|max:255',
        'country' => 'required|string|max:2',
        'payment_method' => 'required|in:credit_card,paypal,stripe,account_balance',
    ];

    public function mount()
    {
        $this->items = session()->get('cart', []);

        if (empty($this->items)) {
            return redirect()->route('domains.search');
        }
    }

    public function placeOrder()
    {
        $this->validate();

        $this->processing = true;
        $this->error = '';

        DB::beginTransaction();

        try {
            // Create user account
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            // Create customer profile
            $customer = Customer::create([
                'user_id' => $user->id,
                'company_name' => $this->company_name ?: null,
                'phone' => $this->phone ?: null,
                'address_line_1' => $this->address_line_1,
                'address_line_2' => $this->address_line_2 ?: null,
                'city' => $this->city,
                'state' => $this->state,
                'postal_code' => $this->postal_code,
                'country' => $this->country,
                'auto_renew' => true,
            ]);

            $namecom = new NamecomService();
            $subtotal = collect($this->items)->sum('price');
            $tax = 0; // Calculate tax based on location if needed
            $total = $subtotal + $tax;

            // Process each domain
            foreach ($this->items as $item) {
                // Create domain record (pending registration)
                $domain = Domain::create([
                    'customer_id' => $customer->id,
                    'domain_name' => $item['domain'],
                    'tld' => explode('.', $item['domain'])[1] ?? 'com',
                    'status' => 'pending',
                    'purchase_price' => $item['price'],
                    'renewal_price' => $item['price'],
                    'auto_renew' => true,
                    'privacy_enabled' => true,
                    'locked' => false,
                ]);

                // Create order
                $order = Order::create([
                    'customer_id' => $customer->id,
                    'domain_id' => $domain->id,
                    'type' => 'registration',
                    'status' => 'pending',
                    'subtotal' => $item['price'],
                    'tax' => 0,
                    'total' => $item['price'],
                    'payment_method' => $this->payment_method,
                    'payment_status' => 'pending',
                ]);

                // NOTE: In production, you would:
                // 1. Process payment via Stripe/PayPal
                // 2. Only register domain after successful payment
                // 3. Handle async registration with queues

                // For now, we'll simulate successful registration
                // Uncomment when Name.com credentials are configured:
                /*
                $registrationData = [
                    'domainName' => $item['domain'],
                    'purchasePrice' => $item['price'] * 100, // Convert to cents
                    'years' => 1,
                    'tldRequirements' => [],
                    'purchaseType' => 'registration',
                ];

                $response = $namecom->registerDomain($registrationData);

                if ($response) {
                    $domain->update([
                        'status' => 'active',
                        'namecom_domain_id' => $response['domainName'] ?? null,
                        'registered_at' => now(),
                        'expires_at' => now()->addYear(),
                    ]);

                    $order->update([
                        'status' => 'completed',
                        'payment_status' => 'paid',
                        'paid_at' => now(),
                    ]);
                }
                */

                // Simulate success for demo
                $domain->update([
                    'status' => 'active',
                    'registered_at' => now(),
                    'expires_at' => now()->addYear(),
                ]);

                $order->update([
                    'status' => 'completed',
                    'payment_status' => 'paid',
                    'paid_at' => now(),
                ]);
            }

            DB::commit();

            // Clear cart
            session()->forget('cart');

            // Log the user in
            auth()->login($user);

            // Redirect to success page
            return redirect()->route('checkout.success');

        } catch (\Exception $e) {
            DB::rollBack();

            $this->error = 'An error occurred while processing your order. Please try again.';
            logger()->error('Checkout error', [
                'email' => $this->email,
                'error' => $e->getMessage(),
            ]);
        }

        $this->processing = false;
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

    public function render()
    {
        return view('livewire.checkout');
    }
}
