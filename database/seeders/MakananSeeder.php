<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makanan::factory(50)->create();
    }
}
