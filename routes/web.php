<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/domains/search', function () {
    return view('domains.search');
})->name('domains.search');
