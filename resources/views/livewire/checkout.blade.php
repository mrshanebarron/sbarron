<div style="min-height: 100vh; background: var(--blueprint-bg); padding: 60px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 60px;">
            <h1 style="font-family: var(--font-technical); font-size: 42px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -1px;">
                Complete Your Order
            </h1>
            <p style="font-family: var(--font-blueprint); font-size: 18px; color: var(--text-secondary);">
                Just a few more details and your domains will be registered.
            </p>
        </div>

        @if($error)
            <div style="max-width: 800px; margin: 0 auto 30px; padding: 16px 20px; background: #fed7d7; border-left: 4px solid #e53e3e; border-radius: 8px; font-family: var(--font-technical);">
                <i class="fa-duotone fa-thin fa-circle-exclamation" style="color: #e53e3e; margin-right: 8px;"></i>
                <span style="color: #742a2a;">{{ $error }}</span>
            </div>
        @endif

        <div style="display: grid; grid-template-columns: 1fr 400px; gap: 40px; align-items: start;">
            <!-- Checkout Form -->
            <div style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 16px; padding: 40px;">
                <form wire:submit="placeOrder">
                    <!-- Account Information -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px; padding-bottom: 16px; border-bottom: var(--line-weight-bold) solid var(--line-secondary);">
                            <i class="fa-duotone fa-thin fa-user" style="margin-right: 8px;"></i>
                            Account Information
                        </h2>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Full Name <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="text"
                                    wire:model="name"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('name') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Company Name
                                </label>
                                <input
                                    type="text"
                                    wire:model="company_name"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Email Address <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="email"
                                    wire:model="email"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('email') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Phone Number
                                </label>
                                <input
                                    type="tel"
                                    wire:model="phone"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Password <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="password"
                                    wire:model="password"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('password') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Confirm Password <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="password"
                                    wire:model="password_confirmation"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px; padding-bottom: 16px; border-bottom: var(--line-weight-bold) solid var(--line-secondary);">
                            <i class="fa-duotone fa-thin fa-location-dot" style="margin-right: 8px;"></i>
                            Billing Address
                        </h2>

                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                Address Line 1 <span style="color: #e53e3e;">*</span>
                            </label>
                            <input
                                type="text"
                                wire:model="address_line_1"
                                style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                onfocus="this.style.borderColor='var(--line-primary)'"
                                onblur="this.style.borderColor='var(--line-secondary)'"
                            >
                            @error('address_line_1') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                Address Line 2
                            </label>
                            <input
                                type="text"
                                wire:model="address_line_2"
                                style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                onfocus="this.style.borderColor='var(--line-primary)'"
                                onblur="this.style.borderColor='var(--line-secondary)'"
                            >
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    City <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="text"
                                    wire:model="city"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('city') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    State <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="text"
                                    wire:model="state"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('state') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label style="display: block; font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                                    Postal Code <span style="color: #e53e3e;">*</span>
                                </label>
                                <input
                                    type="text"
                                    wire:model="postal_code"
                                    style="width: 100%; padding: 12px 16px; font-family: var(--font-technical); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-size: 16px; background: white; transition: var(--transition);"
                                    onfocus="this.style.borderColor='var(--line-primary)'"
                                    onblur="this.style.borderColor='var(--line-secondary)'"
                                >
                                @error('postal_code') <span style="color: #e53e3e; font-size: 14px; font-family: var(--font-technical);">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px; padding-bottom: 16px; border-bottom: var(--line-weight-bold) solid var(--line-secondary);">
                            <i class="fa-duotone fa-thin fa-credit-card" style="margin-right: 8px;"></i>
                            Payment Method
                        </h2>

                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                            <label style="display: flex; align-items: center; padding: 20px; border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; cursor: pointer; transition: var(--transition); background: white;"
                                   onmouseover="this.style.borderColor='var(--line-primary)'; this.style.boxShadow='0 2px 8px rgba(107, 91, 115, 0.1)'"
                                   onmouseout="this.style.borderColor='var(--line-secondary)'; this.style.boxShadow='none'">
                                <input type="radio" wire:model="payment_method" value="credit_card" style="margin-right: 12px;">
                                <i class="fa-duotone fa-thin fa-credit-card" style="font-size: 24px; margin-right: 12px; color: var(--line-secondary);"></i>
                                <span style="font-family: var(--font-technical); font-weight: 600;">Credit Card</span>
                            </label>

                            <label style="display: flex; align-items: center; padding: 20px; border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; cursor: pointer; transition: var(--transition); background: white;"
                                   onmouseover="this.style.borderColor='var(--line-primary)'; this.style.boxShadow='0 2px 8px rgba(107, 91, 115, 0.1)'"
                                   onmouseout="this.style.borderColor='var(--line-secondary)'; this.style.boxShadow='none'">
                                <input type="radio" wire:model="payment_method" value="stripe" style="margin-right: 12px;">
                                <i class="fa-brands fa-stripe" style="font-size: 24px; margin-right: 12px; color: var(--line-secondary);"></i>
                                <span style="font-family: var(--font-technical); font-weight: 600;">Stripe</span>
                            </label>
                        </div>

                        <p style="margin-top: 16px; color: var(--text-muted); font-size: 14px; font-family: var(--font-technical);">
                            <i class="fa-duotone fa-thin fa-circle-info" style="margin-right: 4px;"></i>
                            This is a demo. No actual payment will be processed.
                        </p>
                    </div>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        style="width: 100%; padding: 18px; background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%); color: white; border: none; border-radius: 12px; font-family: var(--font-technical); font-size: 18px; font-weight: 700; cursor: pointer; transition: var(--transition);"
                        onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(126, 179, 211, 0.4)'"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                        {{ $processing ? 'disabled' : '' }}
                    >
                        @if($processing)
                            <i class="fa-duotone fa-thin fa-spinner-third fa-spin" style="margin-right: 8px;"></i>
                            Processing Order...
                        @else
                            <i class="fa-duotone fa-thin fa-lock" style="margin-right: 8px;"></i>
                            Complete Order - ${{ number_format($this->total, 2) }}
                        @endif
                    </button>
                </form>
            </div>

            <!-- Order Summary -->
            <div style="position: sticky; top: 20px;">
                <div style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 16px; padding: 30px;">
                    <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px; padding-bottom: 16px; border-bottom: var(--line-weight-bold) solid var(--line-secondary);">
                        Order Summary
                    </h2>

                    <div style="margin-bottom: 24px;">
                        @foreach($items as $item)
                            <div style="padding: 16px 0; border-bottom: var(--line-weight) solid var(--line-secondary);">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                                    <h3 style="font-family: var(--font-technical); font-size: 16px; font-weight: 600; color: var(--text-primary); margin: 0;">
                                        @if($item['type'] === 'hosting')
                                            {{ $item['name'] }}
                                        @else
                                            {{ $item['domain'] }}
                                        @endif
                                    </h3>
                                    <span style="font-family: var(--font-technical); font-size: 18px; font-weight: 700; color: var(--text-primary);">
                                        ${{ number_format($item['price'], 2) }}
                                    </span>
                                </div>
                                <p style="font-family: var(--font-blueprint); color: var(--text-secondary); font-size: 14px; margin: 0;">
                                    @if($item['type'] === 'hosting')
                                        {{ ucfirst($item['billing_cycle']) }} billing
                                    @else
                                        1 year registration
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                            <span style="font-family: var(--font-technical); color: var(--text-secondary);">Subtotal</span>
                            <span style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary);">${{ number_format($this->subtotal, 2) }}</span>
                        </div>
                        @if($this->tax > 0)
                            <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
                                <span style="font-family: var(--font-technical); color: var(--text-secondary);">Tax</span>
                                <span style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary);">${{ number_format($this->tax, 2) }}</span>
                            </div>
                        @endif
                        <div style="display: flex; justify-content: space-between; padding-top: 16px; border-top: var(--line-weight-bold) solid var(--line-secondary);">
                            <span style="font-family: var(--font-technical); font-size: 20px; font-weight: 700; color: var(--text-primary);">Total</span>
                            <span style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary);">${{ number_format($this->total, 2) }}</span>
                        </div>
                    </div>

                    <div style="background: white; border-left: 4px solid var(--line-secondary); padding: 16px; border-radius: 8px;">
                        <p style="font-family: var(--font-technical); color: var(--text-primary); font-size: 14px; margin: 0; line-height: 1.6;">
                            <i class="fa-duotone fa-thin fa-shield-check" style="color: var(--line-secondary); margin-right: 8px;"></i>
                            Your payment is secured with 256-bit SSL encryption. Privacy protection included with all domains.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
