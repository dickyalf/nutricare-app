<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrollerKampanye extends Controller
{
    public function mintaSemuaKampanye()
    {
        $semuaKampanye = Kampanye::paginate(9);
        return view('donation-listing', [
            'semuaKampanye' => $semuaKampanye
        ]);
    }

    public function cariKampanye(Request $request)
    {
        $search = $request->input("search"); // Retrieve the search input

        // Query to search in 'nama' and 'deskripsi' columns
        $results = Kampanye::where('nama', 'like', '%' . $search . '%')->paginate(9);

        return view('donation-listing', [
            'semuaKampanye' => $results,
            'search' => $search
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
