<div>
    <!-- Cart Button (Fixed Position) -->
    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
        <button
            wire:click="toggleCart"
            style="position: relative; padding: 14px 20px; background: linear-gradient(135deg, #7eb3d3 0%, #6b95b3 100%); color: white; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; box-shadow: 0 4px 12px rgba(126, 179, 211, 0.3); transition: all 0.2s;"
            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 16px rgba(126, 179, 211, 0.4)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(126, 179, 211, 0.3)'"
        >
            <i class="fa-duotone fa-thin fa-cart-shopping" style="font-size: 20px;"></i>
            @if(count($items) > 0)
                <span style="position: absolute; top: -8px; right: -8px; background: #e53e3e; color: white; border-radius: 50%; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 700;">
                    {{ count($items) }}
                </span>
            @endif
        </button>
    </div>

    <!-- Cart Sidebar -->
    @if($isOpen)
        <div
            style="position: fixed; top: 0; right: 0; bottom: 0; width: 100%; max-width: 450px; background: white; box-shadow: -4px 0 20px rgba(0,0,0,0.1); z-index: 1001; display: flex; flex-direction: column;"
            x-data
            x-init="$el.style.transform = 'translateX(0)'"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform translate-x-full"
            x-transition:enter-end="transform translate-x-0"
        >
            <!-- Cart Header -->
            <div style="padding: 24px; border-bottom: 2px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                <h2 style="font-size: 24px; font-weight: 700; color: #1a202c; margin: 0;">
                    <i class="fa-duotone fa-thin fa-cart-shopping" style="margin-right: 8px;"></i>
                    Your Cart
                </h2>
                <button
                    wire:click="toggleCart"
                    style="background: none; border: none; color: #718096; font-size: 24px; cursor: pointer; padding: 4px; transition: color 0.2s;"
                    onmouseover="this.style.color='#1a202c'"
                    onmouseout="this.style.color='#718096'"
                >
                    <i class="fa-duotone fa-thin fa-xmark"></i>
                </button>
            </div>

            <!-- Cart Items -->
            <div style="flex: 1; overflow-y: auto; padding: 24px;">
                @if(count($items) === 0)
                    <div style="text-align: center; padding: 60px 20px;">
                        <i class="fa-duotone fa-thin fa-cart-shopping" style="font-size: 64px; color: #cbd5e0; margin-bottom: 16px;"></i>
                        <p style="color: #718096; font-size: 18px; margin: 0;">Your cart is empty</p>
                    </div>
                @else
                    <div style="display: flex; flex-direction: column; gap: 16px;">
                        @foreach($items as $item)
                            <div style="background: #f7fafc; border: 2px solid #e2e8f0; border-radius: 12px; padding: 20px;">
                                <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                                    <div style="flex: 1;">
                                        <h3 style="font-size: 18px; font-weight: 600; color: #1a202c; margin: 0 0 4px 0;">
                                            {{ $item['domain'] }}
                                        </h3>
                                        <p style="color: #718096; font-size: 14px; margin: 0;">
                                            Domain Registration
                                        </p>
                                    </div>
                                    <button
                                        wire:click="removeItem('{{ $item['domain'] }}')"
                                        style="background: none; border: none; color: #e53e3e; cursor: pointer; padding: 4px; font-size: 18px; transition: all 0.2s;"
                                        onmouseover="this.style.transform='scale(1.1)'"
                                        onmouseout="this.style.transform='scale(1)'"
                                        title="Remove from cart"
                                    >
                                        <i class="fa-duotone fa-thin fa-trash-can"></i>
                                    </button>
                                </div>
                                <div style="font-size: 24px; font-weight: 700; color: #1a202c;">
                                    ${{ number_format($item['price'], 2) }}
                                    <span style="font-size: 14px; font-weight: 400; color: #718096;">/ year</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if(count($items) > 1)
                        <button
                            wire:click="clearCart"
                            style="margin-top: 16px; width: 100%; padding: 12px; background: #fed7d7; color: #742a2a; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; transition: all 0.2s;"
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
                <div style="padding: 24px; border-top: 2px solid #e2e8f0; background: #f7fafc;">
                    <div style="margin-bottom: 20px;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <span style="color: #718096;">Subtotal</span>
                            <span style="font-weight: 600; color: #1a202c;">${{ number_format($this->subtotal, 2) }}</span>
                        </div>
                        @if($this->tax > 0)
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #718096;">Tax</span>
                                <span style="font-weight: 600; color: #1a202c;">${{ number_format($this->tax, 2) }}</span>
                            </div>
                        @endif
                        <div style="display: flex; justify-content: space-between; padding-top: 16px; border-top: 2px solid #e2e8f0; margin-top: 16px;">
                            <span style="font-size: 20px; font-weight: 700; color: #1a202c;">Total</span>
                            <span style="font-size: 24px; font-weight: 700; color: #1a202c;">${{ number_format($this->total, 2) }}</span>
                        </div>
                    </div>

                    <button
                        wire:click="checkout"
                        style="width: 100%; padding: 16px; background: linear-gradient(135deg, #7eb3d3 0%, #6b95b3 100%); color: white; border: none; border-radius: 12px; font-size: 18px; font-weight: 700; cursor: pointer; transition: all 0.2s;"
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
