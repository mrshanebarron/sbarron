<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Product;
use Stripe\Price;

class StripeService
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    /**
     * Create a Stripe Checkout Session for cart items
     */
    public function createCheckoutSession(array $items, string $successUrl, string $cancelUrl): Session
    {
        $lineItems = [];

        foreach ($items as $item) {
            if ($item['type'] === 'hosting') {
                // Create subscription line items for hosting
                $lineItems[] = $this->createHostingLineItem($item);
            } else {
                // Create one-time payment line items for domains
                $lineItems[] = $this->createDomainLineItem($item);
            }
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => $this->determineMode($items),
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'allow_promotion_codes' => true,
            'billing_address_collection' => 'required',
            'customer_creation' => 'always',
            'subscription_data' => $this->getSubscriptionData($items),
            'metadata' => [
                'source' => 'newsbarron_hosting',
            ],
        ]);

        return $session;
    }

    /**
     * Create line item for hosting plan (subscription)
     */
    private function createHostingLineItem(array $item): array
    {
        $interval = $item['billing_cycle'] === 'yearly' ? 'year' : 'month';

        // Create or get existing price
        $priceId = $this->getOrCreatePrice(
            name: $item['name'],
            amount: (int)($item['price'] * 100), // Convert to cents
            interval: $interval,
            productMetadata: [
                'type' => 'hosting',
                'plan_id' => $item['plan_id'],
                'slug' => $item['slug'],
            ]
        );

        return [
            'price' => $priceId,
            'quantity' => 1,
        ];
    }

    /**
     * Create line item for domain (one-time payment)
     */
    private function createDomainLineItem(array $item): array
    {
        return [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $item['domain'],
                    'description' => 'Domain Registration',
                    'metadata' => [
                        'type' => 'domain',
                        'domain' => $item['domain'],
                    ],
                ],
                'unit_amount' => (int)($item['price'] * 100), // Convert to cents
            ],
            'quantity' => 1,
        ];
    }

    /**
     * Determine checkout mode based on cart items
     */
    private function determineMode(array $items): string
    {
        $hasSubscription = collect($items)->contains('type', 'hosting');
        $hasOneTime = collect($items)->contains('type', 'registration');

        if ($hasSubscription && $hasOneTime) {
            return 'subscription'; // Stripe allows one-time + subscription
        } elseif ($hasSubscription) {
            return 'subscription';
        } else {
            return 'payment';
        }
    }

    /**
     * Get existing or create new price for product
     */
    private function getOrCreatePrice(string $name, int $amount, string $interval, array $productMetadata = []): string
    {
        // In production, you'd cache these or lookup from database
        // For now, create new price each time (Stripe allows this)

        $product = Product::create([
            'name' => $name,
            'metadata' => $productMetadata,
        ]);

        $price = Price::create([
            'product' => $product->id,
            'unit_amount' => $amount,
            'currency' => 'usd',
            'recurring' => [
                'interval' => $interval,
            ],
        ]);

        return $price->id;
    }

    /**
     * Get subscription metadata for hosting plans
     */
    private function getSubscriptionData(array $items): ?array
    {
        $hostingItems = collect($items)->where('type', 'hosting')->first();

        if (!$hostingItems) {
            return null;
        }

        return [
            'metadata' => [
                'plan_id' => $hostingItems['plan_id'],
                'slug' => $hostingItems['slug'],
                'billing_cycle' => $hostingItems['billing_cycle'],
            ],
        ];
    }

    /**
     * Retrieve a checkout session
     */
    public function retrieveSession(string $sessionId): Session
    {
        return Session::retrieve($sessionId);
    }
}
