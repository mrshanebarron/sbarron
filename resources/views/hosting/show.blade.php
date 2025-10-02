@extends('layouts.app')

@section('title', $plan->name . ' - Laravel Hosting - sbarron.com')

@section('content')
<div style="max-width: 1200px; margin: 0 auto; padding: 60px 20px;">
    <!-- Back Link -->
    <a href="/hosting" style="display: inline-flex; align-items: center; gap: 8px; color: var(--text-secondary); text-decoration: none; font-family: var(--font-technical); font-weight: 600; font-size: 14px; margin-bottom: 40px; transition: var(--transition);"
       onmouseover="this.style.color='var(--line-primary)'"
       onmouseout="this.style.color='var(--text-secondary)'">
        <i class="fa-duotone fa-thin fa-arrow-left"></i>
        Back to All Plans
    </a>

    <div style="display: grid; grid-template-columns: 1fr 400px; gap: 48px; align-items: start;">
        <!-- Plan Details -->
        <div>
            <!-- Header -->
            <div style="margin-bottom: 40px;">
                @if($plan->is_featured)
                    <div style="display: inline-block; background: var(--line-secondary); color: white; padding: 6px 16px; border-radius: 20px; font-family: var(--font-technical); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px;">
                        Most Popular
                    </div>
                @endif
                <h1 style="font-family: var(--font-technical); font-size: 48px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -1px;">
                    {{ $plan->name }}
                </h1>
                <p style="font-size: 20px; color: var(--text-secondary); line-height: 1.6;">
                    {{ $plan->description }}
                </p>
            </div>

            <!-- Features -->
            <div style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 16px; padding: 40px; margin-bottom: 40px;">
                <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px;">
                    What's Included
                </h2>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($plan->features as $feature)
                        <li style="display: flex; align-items: start; gap: 16px; padding: 16px 0; border-bottom: 1px solid rgba(107, 91, 115, 0.1);">
                            <i class="fa-duotone fa-thin fa-circle-check" style="color: var(--line-success); font-size: 24px; margin-top: 2px; flex-shrink: 0;"></i>
                            <span style="flex: 1; color: var(--text-primary); font-family: var(--font-blueprint); font-size: 18px; line-height: 1.6;">{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Technical Specs -->
            <div style="background: var(--blueprint-paper); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 16px; padding: 40px;">
                <h2 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 24px;">
                    Technical Specifications
                </h2>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
                    <div>
                        <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Storage</div>
                        <div style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary);">{{ $plan->storage_limit }}</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Bandwidth</div>
                        <div style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary);">{{ $plan->bandwidth_limit }}</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Databases</div>
                        <div style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary);">{{ $plan->max_databases == 999 ? 'Unlimited' : $plan->max_databases }}</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Domains</div>
                        <div style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary);">{{ $plan->max_domains == 999 ? 'Unlimited' : $plan->max_domains }}</div>
                    </div>
                </div>

                <div style="margin-top: 32px; padding-top: 32px; border-top: var(--line-weight) solid var(--line-secondary);">
                    <div style="display: flex; gap: 32px; flex-wrap: wrap;">
                        @if($plan->ssl_included)
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <i class="fa-duotone fa-thin fa-shield-check" style="color: var(--line-success); font-size: 20px;"></i>
                                <span style="font-family: var(--font-technical); color: var(--text-primary); font-weight: 600;">Free SSL</span>
                            </div>
                        @endif
                        @if($plan->daily_backups)
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <i class="fa-duotone fa-thin fa-cloud-arrow-up" style="color: var(--line-success); font-size: 20px;"></i>
                                <span style="font-family: var(--font-technical); color: var(--text-primary); font-weight: 600;">Daily Backups</span>
                            </div>
                        @endif
                        @if($plan->staging_environment)
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <i class="fa-duotone fa-thin fa-flask" style="color: var(--line-success); font-size: 20px;"></i>
                                <span style="font-family: var(--font-technical); color: var(--text-primary); font-weight: 600;">Staging Environment</span>
                            </div>
                        @endif
                        @if($plan->priority_support)
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <i class="fa-duotone fa-thin fa-headset" style="color: var(--line-success); font-size: 20px;"></i>
                                <span style="font-family: var(--font-technical); color: var(--text-primary); font-weight: 600;">Priority Support</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Card (Sticky) -->
        <div style="position: sticky; top: 80px;">
            <div style="background: linear-gradient(135deg, rgba(126, 179, 211, 0.08) 0%, var(--blueprint-paper) 100%); border: var(--line-weight-bold) solid var(--line-primary); border-radius: 16px; padding: 32px;">
                <!-- Price -->
                <div style="text-align: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: var(--line-weight) solid var(--line-secondary);">
                    @if($plan->monthly_price > 0)
                        <div style="font-family: var(--font-technical); font-size: 56px; font-weight: 700; color: var(--text-primary); line-height: 1;">
                            ${{ number_format($plan->monthly_price, 0) }}
                        </div>
                        <div style="color: var(--text-secondary); font-size: 16px; font-family: var(--font-technical); margin-bottom: 16px;">
                            per month
                        </div>
                        @if($plan->yearly_savings_percent > 0)
                            <div style="background: #c6f6d5; color: #22543d; padding: 8px 16px; border-radius: 8px; font-size: 14px; font-weight: 600; font-family: var(--font-technical);">
                                Save {{ number_format($plan->yearly_savings_percent, 0) }}% with annual billing
                            </div>
                        @endif
                    @else
                        <div style="font-family: var(--font-technical); font-size: 56px; font-weight: 700; color: var(--text-primary); line-height: 1;">
                            ${{ number_format($plan->yearly_price, 0) }}
                        </div>
                        <div style="color: var(--text-secondary); font-size: 16px; font-family: var(--font-technical);">
                            per year
                        </div>
                    @endif
                </div>

                <!-- Billing Toggle (if monthly plan) -->
                @if($plan->monthly_price > 0)
                    <div style="background: white; border-radius: 12px; padding: 16px; margin-bottom: 24px;">
                        <div style="display: flex; gap: 12px; align-items: center; justify-content: center;">
                            <button id="monthlyBtn" onclick="selectBilling('monthly')" style="flex: 1; padding: 12px; background: var(--line-primary); color: white; border: none; border-radius: 8px; font-family: var(--font-technical); font-weight: 600; cursor: pointer; transition: var(--transition);">
                                Monthly
                            </button>
                            <button id="yearlyBtn" onclick="selectBilling('yearly')" style="flex: 1; padding: 12px; background: transparent; color: var(--text-secondary); border: var(--line-weight) solid var(--line-secondary); border-radius: 8px; font-family: var(--font-technical); font-weight: 600; cursor: pointer; transition: var(--transition);">
                                Yearly
                            </button>
                        </div>
                        <div id="yearlyPrice" style="display: none; text-align: center; margin-top: 12px; font-family: var(--font-technical); font-size: 14px; color: var(--text-secondary);">
                            ${{ number_format($plan->yearly_price, 0) }}/year (save ${{ number_format($plan->monthly_savings, 0) }})
                        </div>
                    </div>
                @endif

                <!-- Buy Now Button -->
                <form action="{{ route('hosting.order', $plan->slug) }}" method="POST">
                    @csrf
                    <input type="hidden" name="billing_cycle" id="billingCycle" value="monthly">
                    <button type="submit" style="width: 100%; padding: 18px 32px; background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%); color: white; border: none; border-radius: 12px; font-family: var(--font-technical); font-size: 18px; font-weight: 700; cursor: pointer; transition: var(--transition); margin-bottom: 16px;"
                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 16px rgba(126, 179, 211, 0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                        <i class="fa-duotone fa-thin fa-rocket-launch" style="margin-right: 8px;"></i>
                        Get Started Now
                    </button>
                </form>

                <div style="text-align: center; color: var(--text-secondary); font-size: 13px; font-family: var(--font-technical);">
                    <i class="fa-duotone fa-thin fa-lock" style="margin-right: 4px;"></i>
                    Secure payment via Stripe
                </div>
            </div>

            <!-- Guarantee -->
            <div style="margin-top: 24px; text-align: center; padding: 20px; background: var(--blueprint-paper); border: var(--line-weight) solid var(--line-secondary); border-radius: 12px;">
                <i class="fa-duotone fa-thin fa-shield-check" style="font-size: 32px; color: var(--line-success); margin-bottom: 12px;"></i>
                <div style="font-family: var(--font-technical); font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                    30-Day Money Back Guarantee
                </div>
                <div style="font-size: 14px; color: var(--text-secondary); line-height: 1.5;">
                    Not satisfied? Get a full refund within 30 days. No questions asked.
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function selectBilling(type) {
    const monthlyBtn = document.getElementById('monthlyBtn');
    const yearlyBtn = document.getElementById('yearlyBtn');
    const yearlyPrice = document.getElementById('yearlyPrice');
    const billingCycle = document.getElementById('billingCycle');

    if (type === 'monthly') {
        monthlyBtn.style.background = 'var(--line-primary)';
        monthlyBtn.style.color = 'white';
        yearlyBtn.style.background = 'transparent';
        yearlyBtn.style.color = 'var(--text-secondary)';
        yearlyPrice.style.display = 'none';
        billingCycle.value = 'monthly';
    } else {
        yearlyBtn.style.background = 'var(--line-primary)';
        yearlyBtn.style.color = 'white';
        monthlyBtn.style.background = 'transparent';
        monthlyBtn.style.color = 'var(--text-secondary)';
        yearlyPrice.style.display = 'block';
        billingCycle.value = 'yearly';
    }
}
</script>
@endsection
