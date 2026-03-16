<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');