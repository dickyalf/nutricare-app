<?php

namespace Database\Seeders;

use App\Models\FotoDonasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoDonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FotoDonasi::factory(50)->create();
    }
}
