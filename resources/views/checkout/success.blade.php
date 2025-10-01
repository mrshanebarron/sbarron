<x-layouts.app title="Order Complete - sbarron.com" :hideNav="true" :hideFooter="true">
    <x-slot:styles>
        <style>
            .success-container {
                max-width: 600px;
                margin: 100px auto;
                background: white;
                border: 2px solid #e2e8f0;
                border-radius: 20px;
                padding: 60px 40px;
                text-align: center;
            }

            .success-icon {
                width: 100px;
                height: 100px;
                margin: 0 auto 30px;
                background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 8px 24px rgba(72, 187, 120, 0.3);
            }

            h1 {
                font-size: 36px;
                font-weight: 700;
                color: #1a202c;
                margin-bottom: 16px;
            }

            p {
                font-size: 18px;
                color: #4a5568;
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
                padding: 14px 28px;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.2s;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                border: none;
                cursor: pointer;
            }

            .button-primary {
                background: linear-gradient(135deg, #7eb3d3 0%, #6b95b3 100%);
                color: white;
            }

            .button-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(126, 179, 211, 0.4);
            }

            .button-secondary {
                background: #f7fafc;
                color: #1a202c;
                border: 2px solid #e2e8f0;
            }

            .button-secondary:hover {
                background: #edf2f7;
            }

            .order-details {
                background: #f7fafc;
                border-left: 4px solid #7eb3d3;
                padding: 20px;
                border-radius: 8px;
                margin: 40px 0;
                text-align: left;
            }

            .order-details h3 {
                font-size: 18px;
                font-weight: 700;
                color: #1a202c;
                margin-bottom: 12px;
            }

            .order-details p {
                font-size: 14px;
                color: #4a5568;
                margin: 0;
                line-height: 1.8;
            }
        </style>
    </x-slot:styles>

    <div class="success-container">
        <div class="success-icon">
            <i class="fa-duotone fa-thin fa-circle-check" style="font-size: 60px; color: white;"></i>
        </div>

        <h1>Order Complete!</h1>

        <p>
            Thank you for your purchase! Your domains have been registered and are now active.
            We've sent a confirmation email to <strong>{{ auth()->user()->email }}</strong>.
        </p>

        <div class="order-details">
            <h3>
                <i class="fa-duotone fa-thin fa-circle-info" style="color: #7eb3d3; margin-right: 8px;"></i>
                What's Next?
            </h3>
            <p>
                • Your domains are now registered and active<br>
                • DNS records can be managed from your dashboard<br>
                • Privacy protection is enabled by default<br>
                • You'll receive renewal reminders before expiration
            </p>
        </div>

        <div class="button-group">
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
</x-layouts.app>
