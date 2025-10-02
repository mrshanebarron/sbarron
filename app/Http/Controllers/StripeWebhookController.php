<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;
use App\Services\ProvisioningService;
use App\Models\User;
use App\Models\Customer;
use App\Models\HostingService;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeNotification;

class StripeWebhookController extends Controller
{
    /**
     * Handle Stripe webhook events
     */
    public function handle(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $webhookSecret = config('services.stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $webhookSecret);
        } catch (SignatureVerificationException $e) {
            logger()->error('Stripe webhook signature verification failed', [
                'error' => $e->getMessage(),
            ]);
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'checkout.session.completed':
                $this->handleCheckoutCompleted($event->data->object);
                break;

            case 'customer.subscription.created':
                $this->handleSubscriptionCreated($event->data->object);
                break;

            case 'customer.subscription.updated':
                $this->handleSubscriptionUpdated($event->data->object);
                break;

            case 'customer.subscription.deleted':
                $this->handleSubscriptionDeleted($event->data->object);
                break;

            case 'invoice.payment_succeeded':
                $this->handleInvoicePaymentSucceeded($event->data->object);
                break;

            case 'invoice.payment_failed':
                $this->handleInvoicePaymentFailed($event->data->object);
                break;

            default:
                logger()->info('Unhandled Stripe webhook event', [
                    'type' => $event->type,
                ]);
        }

        return response()->json(['status' => 'success']);
    }

    /**
     * Handle checkout session completed
     */
    private function handleCheckoutCompleted($session)
    {
        logger()->info('Checkout session completed', [
            'session_id' => $session->id,
            'customer_id' => $session->customer,
            'payment_status' => $session->payment_status,
        ]);

        // Get customer email from Stripe session
        $customerEmail = $session->customer_details->email ?? $session->customer_email;

        if (!$customerEmail) {
            logger()->error('No customer email in Stripe session', ['session_id' => $session->id]);
            return;
        }

        // Generate temporary password
        $temporaryPassword = bin2hex(random_bytes(8)); // 16 character password

        // Create or get user
        $user = User::firstOrCreate(
            ['email' => $customerEmail],
            [
                'name' => $session->customer_details->name ?? 'Customer',
                'password' => Hash::make($temporaryPassword),
            ]
        );

        // Send welcome email if user was just created
        $isNewUser = $user->wasRecentlyCreated;
        if ($isNewUser) {
            $user->notify(new WelcomeNotification($temporaryPassword));
        }

        // Create customer record if doesn't exist
        $customer = Customer::firstOrCreate(
            ['user_id' => $user->id],
            [
                'stripe_customer_id' => $session->customer,
                'phone' => $session->customer_details->phone ?? null,
                'address_line_1' => $session->customer_details->address->line1 ?? '',
                'city' => $session->customer_details->address->city ?? '',
                'state' => $session->customer_details->address->state ?? '',
                'postal_code' => $session->customer_details->address->postal_code ?? '',
                'country' => $session->customer_details->address->country ?? 'US',
            ]
        );

        logger()->info('User and customer created/updated', [
            'user_id' => $user->id,
            'customer_id' => $customer->id,
            'welcome_email_sent' => $isNewUser,
        ]);
    }

    /**
     * Handle subscription created
     */
    private function handleSubscriptionCreated($subscription)
    {
        logger()->info('Subscription created', [
            'subscription_id' => $subscription->id,
            'customer_id' => $subscription->customer,
            'status' => $subscription->status,
        ]);

        // Find customer by Stripe ID
        $customer = Customer::where('stripe_customer_id', $subscription->customer)->first();

        if (!$customer) {
            logger()->error('Customer not found for subscription', [
                'stripe_customer_id' => $subscription->customer,
            ]);
            return;
        }

        // Get subscription metadata (plan info from StripeService)
        $metadata = $subscription->metadata->toArray();
        $planId = $metadata['plan_id'] ?? null;

        if (!$planId) {
            logger()->error('No plan_id in subscription metadata', ['subscription_id' => $subscription->id]);
            return;
        }

        // Create hosting service record
        $hostingService = HostingService::create([
            'customer_id' => $customer->id,
            'hosting_plan_id' => $planId,
            'stripe_subscription_id' => $subscription->id,
            'status' => 'provisioning',
            'domain' => null, // Customer will set this later
        ]);

        logger()->info('Hosting service created', [
            'hosting_service_id' => $hostingService->id,
            'status' => 'provisioning',
        ]);

        // TODO: Trigger provisioning job when customer provides domain
        // For now, they'll configure via dashboard
    }

    /**
     * Handle subscription updated
     */
    private function handleSubscriptionUpdated($subscription)
    {
        logger()->info('Subscription updated', [
            'subscription_id' => $subscription->id,
            'status' => $subscription->status,
        ]);

        // TODO: Update hosting plan if changed
    }

    /**
     * Handle subscription deleted/cancelled
     */
    private function handleSubscriptionDeleted($subscription)
    {
        logger()->info('Subscription deleted', [
            'subscription_id' => $subscription->id,
            'status' => $subscription->status,
        ]);

        // TODO: Suspend hosting services
    }

    /**
     * Handle successful invoice payment
     */
    private function handleInvoicePaymentSucceeded($invoice)
    {
        logger()->info('Invoice payment succeeded', [
            'invoice_id' => $invoice->id,
            'customer_id' => $invoice->customer,
            'amount_paid' => $invoice->amount_paid,
        ]);

        // TODO: Ensure services remain active
    }

    /**
     * Handle failed invoice payment
     */
    private function handleInvoicePaymentFailed($invoice)
    {
        logger()->error('Invoice payment failed', [
            'invoice_id' => $invoice->id,
            'customer_id' => $invoice->customer,
            'amount_due' => $invoice->amount_due,
        ]);

        // TODO: Send payment failure notification
        // TODO: Suspend services after grace period
    }
}
