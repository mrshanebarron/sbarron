@extends('layouts.app')

@section('title', 'Order Complete - sbarron.com')

@php
    $hideNav = true;
    $hideFooter = true;
@endphp

@section('styles')
        <style>
            .success-container {
                max-width: 600px;
                margin: 100px auto;
                background: var(--blueprint-paper);
                border: var(--line-weight-bold) solid var(--line-secondary);
                border-radius: 20px;
                padding: 60px 40px;
                text-align: center;
            }

            .success-icon {
                width: 100px;
                height: 100px;
                margin: 0 auto 30px;
                background: linear-gradient(135deg, var(--line-success) 0%, #38a169 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 8px 24px rgba(34, 197, 94, 0.3);
            }

            h1 {
                font-family: var(--font-technical);
                font-size: 36px;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 16px;
                letter-spacing: -1px;
            }

            p {
                font-family: var(--font-blueprint);
                font-size: 18px;
                color: var(--text-secondary);
                line-height: 1.6;
                margin-bottom: 40px;
            }

            .button-group {
                display: flex;
                gap: 16px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .button {
                font-family: var(--font-technical);
                padding: 14px 28px;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 600;
                text-decoration: none;
                transition: var(--transition);
                display: inline-flex;
                align-items: center;
                gap: 8px;
                border: none;
                cursor: pointer;
            }

            .button-primary {
                background: linear-gradient(135deg, var(--line-secondary) 0%, #6b95b3 100%);
                color: white;
            }

            .button-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(126, 179, 211, 0.4);
            }

            .button-secondary {
                background: white;
                color: var(--text-primary);
                border: var(--line-weight) solid var(--line-secondary);
            }

            .button-secondary:hover {
                background: var(--blueprint-bg);
                border-color: var(--line-primary);
            }

            .order-details {
                background: white;
                border-left: 4px solid var(--line-secondary);
                padding: 20px;
                border-radius: 8px;
                margin: 40px 0;
                text-align: left;
            }

            .order-details h3 {
                font-family: var(--font-technical);
                font-size: 18px;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 12px;
            }

            .order-details p {
                font-family: var(--font-blueprint);
                font-size: 14px;
                color: var(--text-secondary);
                margin: 0;
                line-height: 1.8;
            }
        </style>
@endsection

@section('content')
    <div class="success-container" data-aos="fade-up">
        <div class="success-icon" data-aos="zoom-in" data-aos-delay="100">
            <i class="fa-duotone fa-thin fa-circle-check" style="font-size: 60px; color: white;"></i>
        </div>

        <h1 data-aos="fade-up" data-aos-delay="200">Order Complete!</h1>

        <p data-aos="fade-up" data-aos-delay="300">
            Thank you for your purchase! Your domains have been registered and are now active.
            We've sent a confirmation email to <strong style="color: var(--text-primary);">{{ auth()->user()->email }}</strong>.
        </p>

        <div class="order-details" data-aos="fade-up" data-aos-delay="400">
            <h3>
                <i class="fa-duotone fa-thin fa-circle-info" style="color: var(--line-secondary); margin-right: 8px;"></i>
                What's Next?
            </h3>
            <p>
                • Your domains are now registered and active<br>
                • DNS records can be managed from your dashboard<br>
                • Privacy protection is enabled by default<br>
                • You'll receive renewal reminders before expiration
            </p>
        </div>

        <div class="button-group" data-aos="fade-up" data-aos-delay="500">
            <a href="/admin" class="button button-primary">
                <i class="fa-duotone fa-thin fa-gauge"></i>
                Go to Dashboard
            </a>
            <a href="/domains/search" class="button button-secondary">
                <i class="fa-duotone fa-thin fa-magnifying-glass"></i>
                Search More Domains
            </a>
        </div>
    </div>
@endsection
