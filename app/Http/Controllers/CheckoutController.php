<?php

namespace App\Http\Controllers;

use App\Services\StripeService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Redirect to Stripe Checkout
     */
    public function redirect(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return redirect()->route('domains.search')
                ->with('error', 'Your cart is empty.');
        }

        $stripe = new StripeService();

        try {
            $session = $stripe->createCheckoutSession(
                items: $cart,
                successUrl: route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
                cancelUrl: route('checkout')
            );

            // Store session ID in session for later retrieval
            session(['stripe_session_id' => $session->id]);

            return redirect($session->url);

        } catch (\Exception $e) {
            logger()->error('Stripe checkout error', [
                'error' => $e->getMessage(),
                'cart' => $cart,
            ]);

            return redirect()->route('checkout')
                ->with('error', 'Unable to process checkout. Please try again.');
        }
    }

    /**
     * Handle successful payment
     */
    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');

        if (!$sessionId) {
            return redirect()->route('domains.search');
        }

        $stripe = new StripeService();

        try {
            $session = $stripe->retrieveSession($sessionId);

            // TODO: Process the successful payment
            // - Create user account
            // - Create customer record
            // - Register domains
            // - Provision hosting
            // - Send welcome email

            // Clear cart
            session()->forget('cart');
            session()->forget('stripe_session_id');

            return view('checkout.success', [
                'session' => $session,
            ]);

        } catch (\Exception $e) {
            logger()->error('Stripe session retrieval error', [
                'error' => $e->getMessage(),
                'session_id' => $sessionId,
            ]);

            return redirect()->route('domains.search')
                ->with('error', 'Unable to verify payment. Please contact support.');
        }
    }
}
