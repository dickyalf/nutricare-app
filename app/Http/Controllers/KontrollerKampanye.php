<?php

namespace App\Http\Controllers;

use App\Models\Kampanye;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

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

        $persentaseProgress = $uangTerkumpul / $kampanye->targetDonasi;
        $persentaseProgress = number_format($persentaseProgress * 100);
        return view("donation-detail", [
            "dataDetilKampanye" => $kampanye,
            "uangTerkumpul" => $uangTerkumpul,
            "uangKurang" => $uangKurang,
            "persentaseProgress" => $persentaseProgress,
        ]); // kembalikan tampilan donation-detail kepada user dengan properti `dataDetailKampanye`
    }

    public function konfirmasiDonasi(Request $request){
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $amount = $request->input('amount');
        $porsi = $request->input('food');
        $totalPorsi = $amount / $porsi;

        $transaction_details = [
            'order_id' => uniqid(),
            'gross_amount' => $amount, 
        ];

        $item_details = [
            [
                'id' => '1',
                'price' => $totalPorsi,
                'quantity' => $porsi,
                'name' => 'Bakso',
            ],
        ];

        $customer_details = [
            'first_name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
            'customer_details' => $customer_details,
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);
            return response()->json(['snapToken' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    
    }

    public function buatTransaksi(Request $request)
    {
        Transaksi::create([
            'pengguna_id' => 1,
            'kampanye_id' => $request->id,
            'tanggal_transaksi' => Carbon::now(),
            'jumlahMakanan' => $request->food,
            'totalDonasi' => $request->amount,
        ]);
        return response()->json(['success' => true]);
    }
}
