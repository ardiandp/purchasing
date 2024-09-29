<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\models\StokBarang;
use App\Models\Barang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StokBarang>
 */
class StokBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => Barang::all()->random()->id,
            'stok_terakhir' => function (array $attributes) {
                return Barang::find($attributes['barang_id'])->stok_awal;
            },
        ];
    }
}
