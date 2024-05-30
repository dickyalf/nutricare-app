<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampanye;
use App\Models\Transaksi;

class KontrollerKampanye extends Controller
{
    public function mintaSemuaKampanye()
    {
        $semuaKampanye = Kampanye::all();
        return view("donation", [
            "semuaKampanye" => $semuaKampanye,
        ]);
    }

    public function cariKampanye(Request $request)
    {
        // $keyword = $request->search;

        $results = Kampanye::where("name", "like", "%")->get();

        return view("donation", [
            "semuaKampanye" => $results,
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
