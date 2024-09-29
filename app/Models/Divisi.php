<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $fillable = ['nama_divisi'];

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    public function requestBarang()
    {
        return $this->hasMany(RequestBarang::class);
    }
}
