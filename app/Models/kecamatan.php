<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama_kecamatan'];

    public function kelurahan()
    {
        return $this->hasMany(kelurahan::class);
    }

    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}


