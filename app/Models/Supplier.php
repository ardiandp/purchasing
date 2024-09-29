<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = ['nama_supplier', 'alamat', 'telepon'];

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}
