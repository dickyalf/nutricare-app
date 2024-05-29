<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrollerKampanye extends Controller
{
    public function mintaSemuaKampanye() {
        $semuaKampanye = Kampanye::all();
        return view('donation', [
            'semuaKampanye' => $semuaKampanye
        ]);
    }

    public function cariKampanye(Request $request) {
        // $keyword = $request->search;

        $results = Kampanye::where('name', 'like', '%')->get();

        return view('donation', [
            'semuaKampanye' => $results
        ]);
    }
}
