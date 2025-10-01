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
})->name('checkout');

Route::get('/checkout/success', function () {
    return view('checkout.success');
})->name('checkout.success')->middleware('auth');
