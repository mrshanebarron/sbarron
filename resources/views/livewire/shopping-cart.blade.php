<div>
    <!-- Cart Button (Fixed Position) -->
    <div style="position: fixed; top: 12px; right: 20px; z-index: 1000;">
        <button
            wire:click="toggleCart"
            style="position: relative; padding: 10px 16px; background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%); color: white; border: none; border-radius: 8px; font-family: var(--font-technical); font-size: 14px; font-weight: 600; cursor: pointer; box-shadow: 0 2px 8px rgba(126, 179, 211, 0.3); transition: var(--transition);"
            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(126, 179, 211, 0.4)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(126, 179, 211, 0.3)'"
        >
            <i class="fa-duotone fa-thin fa-cart-shopping" style="font-size: 16px;"></i>
            @if(count($items) > 0)
                <span style="position: absolute; top: -6px; right: -6px; background: #e53e3e; color: white; border-radius: 50%; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; font-family: var(--font-technical); font-size: 11px; font-weight: 700;">
                    {{ count($items) }}
                </span>
            @endif
        </button>
    </div>

    <!-- Cart Sidebar -->
    @if($isOpen)
        <div
            style="position: fixed; top: 0; right: 0; bottom: 0; width: 100%; max-width: 450px; background: var(--blueprint-paper); box-shadow: -4px 0 20px rgba(0,0,0,0.1); z-index: 1001; display: flex; flex-direction: column; border-left: var(--line-weight-bold) solid var(--line-primary);"
            x-data
            x-init="$el.style.transform = 'translateX(0)'"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform translate-x-full"
            x-transition:enter-end="transform translate-x-0"
        >
            <!-- Cart Header -->
            <div style="padding: 24px; border-bottom: var(--line-weight-bold) solid var(--line-secondary); display: flex; justify-content: space-between; align-items: center; background: white;">
                <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin: 0;">
                    <i class="fa-duotone fa-thin fa-cart-shopping" style="margin-right: 8px;"></i>
                    Your Cart
                </h2>
                <button
                    wire:click="toggleCart"
                    style="background: none; border: none; color: var(--text-secondary); font-size: 24px; cursor: pointer; padding: 4px; transition: var(--transition);"
                    onmouseover="this.style.color='var(--text-primary)'"
                    onmouseout="this.style.color='var(--text-secondary)'"
                >
                    <i class="fa-duotone fa-thin fa-xmark"></i>
                </button>
            </div>

            <!-- Cart Items -->
            <div style="flex: 1; overflow-y: auto; padding: 24px;">
                @if(count($items) === 0)
                    <div style="text-align: center; padding: 60px 20px;">
                        <i class="fa-duotone fa-thin fa-cart-shopping" style="font-size: 64px; color: var(--line-secondary); opacity: 0.3; margin-bottom: 16px;"></i>
                        <p style="font-family: var(--font-technical); color: var(--text-secondary); font-size: 18px; margin: 0;">Your cart is empty</p>
                    </div>
                @else
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        @foreach($items as $key => $item)
                            <div style="background: white; border: var(--line-weight) solid var(--line-secondary); border-radius: 12px; padding: 20px; transition: var(--transition);"
                                 onmouseover="this.style.borderColor='var(--line-primary)'; this.style.boxShadow='0 2px 8px rgba(107, 91, 115, 0.1)'"
                                 onmouseout="this.style.borderColor='var(--line-secondary)'; this.style.boxShadow='none'">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-family: var(--font-technical); font-size: 18px; font-weight: 600; color: var(--text-primary); margin: 0 0 4px 0;">
                                            @if($item['type'] === 'hosting')
                                                {{ $item['name'] }}
                                            @else
                                                {{ $item['domain'] }}
                                            @endif
                                        </h3>
                                        <p style="font-family: var(--font-blueprint); color: var(--text-secondary); font-size: 14px; margin: 0;">
                                            @if($item['type'] === 'hosting')
                                                Laravel Hosting
                                                @if($item['billing_cycle'] === 'yearly')
                                                    <span style="background: #c6f6d5; color: #22543d; padding: 2px 8px; border-radius: 4px; font-size: 11px; font-weight: 600; margin-left: 4px;">YEARLY</span>
                                                @endif
                                            @else
                                                Domain Registration
                                            @endif
                                        </p>
                                    </div>
                                    <button
                                        wire:click="removeItem('{{ $key }}')"
                                        style="background: none; border: none; color: #e53e3e; cursor: pointer; padding: 4px; font-size: 18px; transition: var(--transition);"
                                        onmouseover="this.style.transform='scale(1.1)'"
                                        onmouseout="this.style.transform='scale(1)'"
                                        title="Remove from cart"
                                    >
                                        <i class="fa-duotone fa-thin fa-trash-can"></i>
                                    </button>
                                </div>
                                <div style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary);">
                                    ${{ number_format($item['price'], 2) }}
                                    <span style="font-size: 14px; font-weight: 400; color: var(--text-secondary);">
                                        @if($item['type'] === 'hosting')
                                            / {{ $item['billing_cycle'] === 'yearly' ? 'year' : 'month' }}
                                        @else
                                            / year
                                        @endif
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count($items) > 1)
                        <button
                            wire:click="clearCart"
                            style="margin-top: 16px; width: 100%; padding: 12px; background: #fed7d7; color: #742a2a; border: none; border-radius: 8px; font-family: var(--font-technical); font-weight: 600; cursor: pointer; transition: var(--transition);"
                            onmouseover="this.style.background='#fc8181'"
                            onmouseout="this.style.background='#fed7d7'"
                        >
                            <i class="fa-duotone fa-thin fa-trash-can" style="margin-right: 8px;"></i>
                            Clear Cart
                        </button>
                    @endif
                @endif
            </div>

            <!-- Cart Footer -->
            @if(count($items) > 0)
                <div style="padding: 24px; border-top: var(--line-weight-bold) solid var(--line-secondary); background: white;">
                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <span style="font-family: var(--font-technical); color: var(--text-secondary);">Subtotal</span>
                            <span style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary);">${{ number_format($this->subtotal, 2) }}</span>
                        </div>
                        @if($this->tax > 0)
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="font-family: var(--font-technical); color: var(--text-secondary);">Tax</span>
                                <span style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary);">${{ number_format($this->tax, 2) }}</span>
                            </div>
                        @endif
                        <div style="display: flex; justify-content: space-between; padding-top: 16px; border-top: var(--line-weight-bold) solid var(--line-secondary); margin-top: 16px;">
                            <span style="font-family: var(--font-technical); font-size: 20px; font-weight: 700; color: var(--text-primary);">Total</span>
                            <span style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary);">${{ number_format($this->total, 2) }}</span>
                        </div>
                    </div>

                    <button
                        wire:click="checkout"
                        style="width: 100%; padding: 16px; background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%); color: white; border: none; border-radius: 12px; font-family: var(--font-technical); font-size: 18px; font-weight: 700; cursor: pointer; transition: var(--transition);"
                        onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(126, 179, 211, 0.4)'"
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                    >
                        <i class="fa-duotone fa-thin fa-lock" style="margin-right: 8px;"></i>
                        Proceed to Checkout
                    </button>
                </div>
            @endif
        </div>

        <!-- Overlay -->
        <div
            wire:click="toggleCart"
            style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.5); z-index: 1000;"
        ></div>
    @endif
</div>
