<?php

namespace App\Http\Controllers;

use App\Models\Kampanye;
use Illuminate\Http\Request;

class KontrollerKampanye extends Controller
{

    public function index() {
        $semuaKampanye = Kampanye::paginate(9);
        return view('donation-listing', [
            'semuaKampanye' => $semuaKampanye
        ]);
    }

    // public function mintaSemuaKampanye() {
    //     $semuaKampanye = Kampanye::paginate(9);
    //     return view('donation-listing', [
    //         'semuaKampanye' => $semuaKampanye
    //     ]);
    // }

    public function cariKampanye(Request $request) {
        $search = $request->input('search'); // Retrieve the search input

        // Query to search in 'nama' and 'deskripsi' columns
        $results = Kampanye::where('nama', 'like', '%' . $search . '%')->paginate(9);
            // ->orWhere('deskripsi', 'like', '%' . $search . '%')
            // ->get();

        return view('donation-listing', [
            'semuaKampanye' => $results
        ]);
    }
}
