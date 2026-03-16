<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    $paragraph = "al momento, l'unica cosa che trovi è la tua solitudine";

    return view('products', ["paragraph" => $paragraph]);
})->name('products');

Route::get('/contacts', function () {
    $paragraph = "vorresti contattarci? Inizia a sperare, perché non è possibile";

    return view('contacts', ["paragraph" => $paragraph]);
})->name('contacts');

Route::get('/about-us', function () {
    $paragraph = "In realtà nemmeno noi sappiamo chi siamo";

    return view('about-us', ["paragraph" => $paragraph]);
})->name('about-us');