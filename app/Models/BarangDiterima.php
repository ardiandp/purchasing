<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangDiterima extends Model
{
    use HasFactory;

    protected $table = 'barang_diterima';

    protected $fillable = ['pembelian_id', 'tanggal_terima'];

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class);
    }
}
