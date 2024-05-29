<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
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
            'nama' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'kataSandi' => Hash::make($faker->password()),
            'nomorTelepon' => '628' . $faker->numerify('##########'),
        ];
    }
}
