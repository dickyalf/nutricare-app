<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makanan')->insert([
            [
                'id' => 1,
                'nama' => 'Nasi Pecel',
                'harga' => 20000,
                'deskripsi' => 'Nasi pecel dengan aneka sayuran rebus, disajikan dengan sambal kacang yang khas, tempe goreng, dan kerupuk.'
            ],
            [
                'id' => 2,
                'nama' => 'Nasi Rawon',
                'harga' => 30000,
                'deskripsi' => 'Nasi putih disajikan dengan rawon, sup daging sapi berkuah hitam dengan bumbu kluwek, dilengkapi dengan taoge, sambal, dan telur asin.'
            ],
            [
                'id' => 3,
                'nama' => 'Nasi Uduk',
                'harga' => 22000,
                'deskripsi' => 'Nasi uduk yang gurih dengan santan, disajikan dengan ayam goreng, telur dadar, tempe kering, sambal, dan emping.'
            ],
            [
                'id' => 4,
                'nama' => 'Nasi Kuning',
                'harga' => 25000,
                'deskripsi' => 'Nasi kuning yang lezat, dilengkapi dengan ayam suwir, serundeng, telur balado, sambal, dan kerupuk.'
            ],
            [
                'id' => 5,
                'nama' => 'Nasi Gudeg',
                'harga' => 28000,
                'deskripsi' => 'Nasi putih disajikan dengan gudeg nangka khas Jogja, krecek pedas, telur pindang, ayam opor, dan sambal.'
            ],
            [
                'id' => 6,
                'nama' => 'Nasi Liwet',
                'harga' => 27000,
                'deskripsi' => 'Nasi liwet dengan rasa gurih khas Solo, dilengkapi dengan sayur labu siam, telur pindang, ayam suwir, dan sambal.'
            ],
            [
                'id' => 7,
                'nama' => 'Nasi Timbel',
                'harga' => 24000,
                'deskripsi' => 'Nasi timbel dengan lauk ayam goreng, tahu, tempe, sambal terasi, dan lalapan segar.'
            ],
            [
                'id' => 8,
                'nama' => 'Nasi Padang',
                'harga' => 32000,
                'deskripsi' => 'Nasi Padang lengkap dengan rendang sapi, gulai ayam, daun singkong, sambal lado, dan kerupuk.'
            ],
            [
                'id' => 9,
                'nama' => 'Nasi Goreng',
                'harga' => 18000,
                'deskripsi' => 'Nasi goreng spesial dengan bumbu rempah, dilengkapi dengan telur mata sapi, ayam suwir, dan kerupuk.'
            ]
        ]);
    }
}
