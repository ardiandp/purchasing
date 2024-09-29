<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = ['nama_barang', 'kategori', 'stok_awal', 'satuan'];

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    public function stokBarang()
    {
        return $this->hasOne(StokBarang::class);
    }

    public function requestBarang()
    {
        return $this->hasMany(RequestBarang::class);
    }

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}
