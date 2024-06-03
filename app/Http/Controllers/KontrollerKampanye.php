<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampanye;
use App\Models\Transaksi;
use Illuminate\View\View;

class KontrollerKampanye extends Controller
{

    /**
     * mintaSemuaKampanye
     *
     * @return void
     * @return view donation-listing
     */
    public function mintaSemuaKampanye()
    {
        /** 
         * mintaSemuaKampanye
         *
         * Fungsi ini mengambil semua kampanye yang ada dalam database
         * dan mengembalikan hasilnya dalam bentuk paginasi.
         */
        $semuaKampanye = Kampanye::paginate(9);
        return view('donation-listing', [
            'semuaKampanye' => $semuaKampanye
        ]);
    }


    /**
     * cariKampanye
     *
     * @param  mixed $request
     * @return view donation-listing
     */
    public function cariKampanye(Request $request)
    {
        /** 
         * cariKampanye
         *
         * Fungsi ini menangani fitur pencarian untuk kampanye.
         * Fungsi ini menerima sebuah request yang berisi istilah pencarian,
         * melakukan query pada model 'Kampanye' untuk menemukan kampanye
         * dengan nama yang sesuai dengan istilah pencarian, dan mengembalikan
         * hasil pencarian dalam bentuk paginasi.
         */
        $cari = $request->input('cari');

        $semuaKampanye = Kampanye::where('nama', 'like', '%' . $cari . '%')->paginate(9);

        return view('donation-listing', [
            'semuaKampanye' => $semuaKampanye,
            'cari' => $cari
        ]);
    }

    /**
     * pilihKampaye
     *
     * @param Kampanye $kampanye
     * @return view donation-detail
     */
    // gunakan route model binding untuk mendapatkan data detil kampanye dari database.
    public function pilihKampanye(Kampanye $kampanye)
    {
        $transaksiList = [];
        $uangTerkumpul = 0;
        $uangKurang = 0;
        $persentaseProgress = 0;
        $transaksiList = $kampanye->transaksi;

        // menjumlahkan semua total donasi dari tiap transaksi kedalam satu variabel untuk di display
        foreach ($transaksiList as $transaksi) {
            $uangTerkumpul += $transaksi->totalDonasi;
        }

        // menentukan uang yang kurang dari target donasi
        $uangKurang = $kampanye->targetDonasi - $uangTerkumpul;

        if ($uangKurang < 0) {
            $uangKurang = 0;
        }

        $persentaseProgress = $uangTerkumpul / (int) $kampanye->targetDonasi;
        $persentaseProgress = number_format($persentaseProgress * 100);
        return view("donation-detail", [
            "dataDetilKampanye" => $kampanye,
            "uangTerkumpul" => $uangTerkumpul,
            "uangKurang" => $uangKurang,
            "persentaseProgress" => $persentaseProgress,
        ]); // kembalikan tampilan donation-detail kepada user dengan properti `dataDetailKampanye`
    }
}
