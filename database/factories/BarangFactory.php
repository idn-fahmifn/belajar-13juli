<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Barang;

/**
 * @extends Factory<Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->word(),
            'merk' => fake()->company(),
            'stok' => random_int(0, 100),
            'harga' => random_int(1000, 100000),
        ];
    }
}
