<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalDonasi = [10000, 20000, 30000, 40000, 50000];
        for($x = 0; $x <= 100; $x++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('transaksi')->insert([
                    'pengguna_id' => $i,
                    'kampanye_id' => $i,
                    'tanggal_transaksi' => Carbon::now()->subDays($i),
                    'jumlahMakanan' => rand(1, 10),
                    'totalDonasi' => $totalDonasi[rand(0,4)]
                ]);
            }
        }
    }
}
