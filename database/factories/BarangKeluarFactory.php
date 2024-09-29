<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BarangKeluar;
use App\Models\Barang;
use App\Models\Divisi;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangKeluar>
 */
class BarangKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => function () {
                return Barang::factory()->create()->id;
            },
            'divisi_id' => function () {
                return Divisi::factory()->create()->id;
            },
            'jumlah' => $this->faker->numberBetween(1,10),
            'tanggal_keluar' => $this->faker->date(),
        ];
    }
}
