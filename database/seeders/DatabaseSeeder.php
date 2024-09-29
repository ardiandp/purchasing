<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Divisi;
use App\Models\Role;
use App\Models\Barang;
use App\models\Supplier;
use App\Models\BarangMasuk;
use App\models\BarangKeluar;
use App\Models\StokBarang;
use App\Models\RequestBarang;
use App\Models\Pembelian;
use App\Models\BarangDiterima;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Role::factory(5)->create();
         User::factory(10)->create();
         Divisi::factory(10)->create();
         Barang::factory(10)->create();
         Supplier::factory(10)->create();
         BarangMasuk::factory(10)->create();
         BarangKeluar::factory(10)->create();
         StokBarang::factory(10)->create();
         RequestBarang::factory(10)->create();
         Pembelian::factory(10)->create();
         BarangDiterima::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
