<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\BarangDiterima;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembelian>
 */
class PembelianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supplier_id' => function () {
                return \App\Models\Supplier::factory()->create()->id;
            },
            'barang_id' => function () {
                return \App\Models\Barang::factory()->create()->id;
            },
            'jumlah' => $this->faker->numberBetween(1, 10),
            'tanggal_beli' => $this->faker->date(),
        ];
    }
}
