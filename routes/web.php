<?php

use App\Http\Controllers\KontrollerKampanye;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("index");
});

Route::get("/donation", function () {
    return view("donation-listing");
})->name("donation");

Route::get("/donation-detail/{kampanye}", [
    KontrollerKampanye::class,
    "pilihKampanye",
])->name("donation-detail");

// Route::get('/donation', [DonationController::class, 'index'])->name('donation');
// Route::get('/search', [DonationController::class, 'search'])->name('search');

// Route::get('/donation', [KontrollerKampanye::class, 'index'])->name('donation');
Route::get("/search", [KontrollerKampanye::class, "cariKampanye"])->name(
    "search"
);
