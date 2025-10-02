@extends('layouts.app')

@section('title', 'Laravel Hosting Plans - sbarron.com')

@section('content')
<div style="max-width: 1400px; margin: 0 auto; padding: 60px 20px;">
    <!-- Header -->
    <div style="text-align: center; margin-bottom: 60px;">
        <h1 style="font-family: var(--font-technical); font-size: 48px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px; letter-spacing: -1px;">
            Laravel Hosting & Deployment
        </h1>
        <p style="font-size: 20px; color: var(--text-secondary); max-width: 700px; margin: 0 auto; line-height: 1.6;">
            Production-ready Laravel hosting with automated deployment. Built by a Laravel expert, not a hosting company.
        </p>
    </div>

    <!-- Pricing Plans -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 80px;">
        @foreach($plans as $plan)
            <div style="background: {{ $plan->is_featured ? 'linear-gradient(135deg, rgba(126, 179, 211, 0.08) 0%, var(--blueprint-paper) 100%)' : 'var(--blueprint-paper)' }}; border: {{ $plan->is_featured ? 'var(--line-weight-bold)' : 'var(--line-weight)' }} solid {{ $plan->is_featured ? 'var(--line-primary)' : 'var(--line-secondary)' }}; border-radius: 16px; padding: 32px; transition: var(--transition); position: relative;"
                 onmouseover="this.style.borderColor='var(--line-primary)'; this.style.boxShadow='0 8px 24px rgba(107, 91, 115, 0.15)'; this.style.transform='translateY(-4px)';"
                 onmouseout="this.style.borderColor='{{ $plan->is_featured ? 'var(--line-primary)' : 'var(--line-secondary)' }}'; this.style.boxShadow='none'; this.style.transform='translateY(0)';">

                @if($plan->is_featured)
                    <div style="position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: var(--line-secondary); color: white; padding: 6px 20px; border-radius: 20px; font-family: var(--font-technical); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                        Most Popular
                    </div>
                @endif

                <!-- Plan Header -->
                <div style="text-align: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: var(--line-weight) solid var(--line-secondary);">
                    <h3 style="font-family: var(--font-technical); font-size: 24px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">
                        {{ $plan->name }}
                    </h3>
                    <p style="color: var(--text-secondary); font-size: 15px; margin-bottom: 20px;">
                        {{ $plan->description }}
                    </p>

                    <div style="margin-bottom: 12px;">
                        @if($plan->monthly_price > 0)
                            <div style="font-family: var(--font-technical); font-size: 48px; font-weight: 700; color: var(--text-primary); line-height: 1;">
                                ${{ number_format($plan->monthly_price, 0) }}
                            </div>
                            <div style="color: var(--text-secondary); font-size: 14px; font-family: var(--font-technical);">
                                per month
                            </div>
                        @else
                            <div style="font-family: var(--font-technical); font-size: 48px; font-weight: 700; color: var(--text-primary); line-height: 1;">
                                ${{ number_format($plan->yearly_price, 0) }}
                            </div>
                            <div style="color: var(--text-secondary); font-size: 14px; font-family: var(--font-technical);">
                                per year
                            </div>
                        @endif
                    </div>

                    @if($plan->monthly_price > 0 && $plan->yearly_savings_percent > 0)
                        <div style="background: #c6f6d5; color: #22543d; padding: 6px 12px; border-radius: 6px; font-size: 13px; font-weight: 600; font-family: var(--font-technical); display: inline-block;">
                            Save {{ number_format($plan->yearly_savings_percent, 0) }}% with yearly billing
                        </div>
                    @endif
                </div>

                <!-- Features -->
                <ul style="list-style: none; padding: 0; margin: 0 0 32px 0;">
                    @foreach($plan->features as $feature)
                        <li style="display: flex; align-items: start; gap: 12px; padding: 12px 0; border-bottom: 1px solid rgba(107, 91, 115, 0.1);">
                            <i class="fa-duotone fa-thin fa-circle-check" style="color: var(--line-success); font-size: 20px; margin-top: 2px;"></i>
                            <span style="flex: 1; color: var(--text-primary); font-family: var(--font-blueprint); line-height: 1.5;">{{ $feature }}</span>
                        </li>
                    @endforeach
                </ul>

                <!-- CTA Button -->
                <a href="/hosting/{{ $plan->slug }}"
                   style="display: block; text-align: center; padding: 16px 32px; background: {{ $plan->is_featured ? 'linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%)' : 'var(--blueprint-paper)' }}; color: {{ $plan->is_featured ? 'white' : 'var(--text-primary)' }}; border: {{ $plan->is_featured ? 'none' : 'var(--line-weight-bold) solid var(--line-secondary)' }}; border-radius: 10px; font-family: var(--font-technical); font-size: 16px; font-weight: 600; text-decoration: none; transition: var(--transition);"
                   onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 12px rgba(126, 179, 211, 0.3)'"
                   onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    Get Started
                </a>
            </div>
        @endforeach
    </div>

    <!-- Why Choose Us -->
    <div style="background: linear-gradient(135deg, rgba(126, 179, 211, 0.05) 0%, var(--blueprint-paper) 100%); border: var(--line-weight-bold) solid var(--line-secondary); border-radius: 16px; padding: 60px 40px; text-align: center;">
        <h2 style="font-family: var(--font-technical); font-size: 36px; font-weight: 700; color: var(--text-primary); margin-bottom: 16px;">
            Why sbarron.com?
        </h2>
        <p style="font-size: 18px; color: var(--text-secondary); max-width: 600px; margin: 0 auto 40px;">
            Built and maintained by Shane Barron—a Laravel expert, not a generic hosting company.
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 32px; text-align: left;">
            <div>
                <i class="fa-duotone fa-thin fa-code" style="font-size: 32px; color: var(--line-secondary); margin-bottom: 12px;"></i>
                <h3 style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                    Laravel Expertise
                </h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Not a generic shared host. Every server is optimized specifically for Laravel applications.
                </p>
            </div>

            <div>
                <i class="fa-duotone fa-thin fa-rocket-launch" style="font-size: 32px; color: var(--line-secondary); margin-bottom: 12px;"></i>
                <h3 style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                    Automated Deployment
                </h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Push to Git, we deploy automatically. No manual FTP uploads or complex server configuration.
                </p>
            </div>

            <div>
                <i class="fa-duotone fa-thin fa-headset" style="font-size: 32px; color: var(--line-secondary); margin-bottom: 12px;"></i>
                <h3 style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                    Personal Support
                </h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Talk directly to Shane—the person who built your infrastructure—not a support ticket system.
                </p>
            </div>

            <div>
                <i class="fa-duotone fa-thin fa-shield-check" style="font-size: 32px; color: var(--line-secondary); margin-bottom: 12px;"></i>
                <h3 style="font-family: var(--font-technical); font-size: 20px; font-weight: 600; color: var(--text-primary); margin-bottom: 8px;">
                    Security First
                </h3>
                <p style="color: var(--text-secondary); line-height: 1.6;">
                    Automatic security updates, SSL certificates, and daily backups. Sleep easy knowing your app is protected.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
