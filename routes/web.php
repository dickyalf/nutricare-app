<?php

use App\Http\Controllers\KontrollerKampanye;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/donation', [KontrollerKampanye::class, 'index'])->name('donation');
Route::get('/search', [KontrollerKampanye::class, 'cariKampanye'])->name('search');

