<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/donation', function () {
    return view('donation-listing');
})->name("donation");
