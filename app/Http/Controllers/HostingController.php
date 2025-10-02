<?php

namespace App\Http\Controllers;

use App\Models\HostingPlan;

class HostingController extends Controller
{
    public function index()
    {
        $plans = HostingPlan::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('hosting.index', compact('plans'));
    }

    public function show(string $slug)
    {
        $plan = HostingPlan::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('hosting.show', compact('plan'));
    }

    public function order(string $slug)
    {
        $plan = HostingPlan::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $billingCycle = request('billing_cycle', 'monthly');

        // Calculate price based on billing cycle
        $price = $billingCycle === 'yearly' ? $plan->yearly_price : $plan->monthly_price;

        // Get current cart
        $cart = session()->get('cart', []);

        // Create unique cart key for this hosting plan
        $cartKey = 'hosting_' . $plan->id . '_' . $billingCycle;

        // Add to cart
        $cart[$cartKey] = [
            'name' => $plan->name,
            'price' => $price,
            'type' => 'hosting',
            'billing_cycle' => $billingCycle,
            'plan_id' => $plan->id,
            'slug' => $plan->slug,
        ];

        session()->put('cart', $cart);
        session()->flash('success', $plan->name . ' has been added to your cart!');

        return redirect()->route('checkout');
    }
}
