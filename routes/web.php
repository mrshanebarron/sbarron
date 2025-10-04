<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/domains/search', function () {
    return view('domains.search');
})->name('domains.search');

Route::get('/checkout', function () {
    return view('checkout.index');
})->name('checkout')->middleware('auth');

Route::get('/checkout/redirect', [App\Http\Controllers\CheckoutController::class, 'redirect'])->name('checkout.redirect')->middleware('auth');

Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success')->middleware('auth');

// Logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Customer Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::get('/dashboard/orders', App\Livewire\Dashboard\Orders::class)->name('dashboard.orders');
    Route::get('/dashboard/domains', App\Livewire\Dashboard\Domains::class)->name('dashboard.domains');
    Route::get('/dashboard/hosting', App\Livewire\Dashboard\Hosting::class)->name('dashboard.hosting');
    Route::get('/dashboard/billing', App\Livewire\Dashboard\Billing::class)->name('dashboard.billing');
    Route::get('/dashboard/settings', App\Livewire\Dashboard\Settings::class)->name('dashboard.settings');
});

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/components', function () {
    return view('components');
})->name('components');

Route::get('/components/showcase', function () {
    return view('components-showcase');
})->name('components.showcase');

Route::get('/vision', function () {
    return view('vision');
})->name('vision');

Route::get('/hosting', [App\Http\Controllers\HostingController::class, 'index'])->name('hosting.index');
Route::get('/hosting/{slug}', [App\Http\Controllers\HostingController::class, 'show'])->name('hosting.show');
Route::post('/hosting/{slug}/order', [App\Http\Controllers\HostingController::class, 'order'])->name('hosting.order');

// Contact Form
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Stripe Webhooks
Route::post('/stripe/webhook', [App\Http\Controllers\StripeWebhookController::class, 'handle']);
