<?php

namespace Database\Seeders;

use App\Models\BuktiDonasi;
use App\Models\FotoDonasi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PenggunaSeeder::class,
            MakananSeeder::class,
            KampanyeSeeder::class,
            TransaksiSeeder::class,
            FotoDonasiSeeder::class,
            BuktiDonasiSeeder::class
        ]);
    }
}
