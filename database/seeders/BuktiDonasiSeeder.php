<?php

namespace Database\Seeders;

use App\Models\BuktiDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuktiDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuktiDonasi::factory(50)->create();
    }
}
