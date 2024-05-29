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
        return view("donation-detail", [
            "dataDetilKampanye" => $kampanye,
        ]); // kembalikan tampilan donation-detail kepada user dengan properti "dataDetailKampanye"
    }
}
