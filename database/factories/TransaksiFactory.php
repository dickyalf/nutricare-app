<?php

namespace Database\Factories;

use App\Models\Kampanye;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pengguna;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        return [
            'pengguna_id' => Pengguna::factory(),
            'kampanye_id' => Kampanye::factory(),
            'tanggal_transaksi' => $faker->dateTimeThisYear(),
            'jumlahMakanan' => $faker->numberBetween(1, 10),
            'totalDonasi' => $faker->numberBetween(100000, 1000000),
        ];
    }
}
