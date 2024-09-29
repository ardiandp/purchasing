<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestBarang extends Model
{
    use HasFactory;

    protected $table = 'request_barang';

    protected $fillable = ['divisi_id', 'barang_id', 'jumlah', 'status'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
