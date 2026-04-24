<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.hero');
})->name('home');

Route::get('/products', function () {
    return view('partials.product');
})->name('products');

// Add About Route
Route::get('/about', function () {
    return view('partials.about');
})->name('about');

Route::get('/contact', function () {
    return view('partials.contact');
})->name('contact');