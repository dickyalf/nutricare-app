<?php

use App\Http\Controllers\KontrollerKampanye;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("index");
});

Route::get('/donation', [KontrollerKampanye::class, 'mintaSemuaKampanye'])->name('donation');
// Route::get('/search', [KontrollerKampanye::class, 'cariKampanye'])->name('search');
Route::post('/konfirmasi-donasi', [KontrollerKampanye::class, 'konfirmasiDonasi']);
Route::post('/buat-transaksi', [KontrollerKampanye::class, 'buatTransaksi']);
Route::get('/cariKampanye', [KontrollerKampanye::class, 'cariKampanye'])->name('cariKampanye');


Route::get("/donation-detail/{kampanye:slug}", [
    KontrollerKampanye::class,
    "pilihKampanye",
])->name("donation-detail");
