<?php

use App\Http\Controllers\KontrollerKampanye;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("index");
});


Route::get('/donation', [KontrollerKampanye::class, 'mintaSemuaKampanye'])->name('donation');
Route::get('/cariKampanye', [KontrollerKampanye::class, 'cariKampanye'])->name('cariKampanye');

Route::get("/donation-detail/{slug}", [
    KontrollerKampanye::class,
    "pilihKampanye",
])->name("donation-detail");
