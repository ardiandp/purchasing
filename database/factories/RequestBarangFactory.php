<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RequestBarang;
use App\models\Divisi;
use Ap\Models\Barang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestBarang>
 */
class RequestBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'divisi_id' => function () {
                return \App\Models\Divisi::factory()->create()->id;
            },
            'barang_id' => function () {
                return \App\Models\Barang::factory()->create()->id;
            },
            'jumlah' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
