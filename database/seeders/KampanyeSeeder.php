<?php

namespace Database\Seeders;

use App\Models\Kampanye;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KampanyeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kampanye::factory(50)->create();
    }
}
