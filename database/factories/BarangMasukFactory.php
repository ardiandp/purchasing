<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BarangMasuk;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangMasuk>
 */
class BarangMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => $this->faker->numberBetween(1, 10),
            'supplier_id' => $this->faker->numberBetween(1, 10),
            'jumlah' => $this->faker->numberBetween(1, 100),
            'tanggal_masuk' => $this->faker->date(),
        ];
    }
}
