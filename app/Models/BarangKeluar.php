<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';

    protected $fillable = ['barang_id', 'divisi_id', 'jumlah', 'tanggal_keluar'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}
