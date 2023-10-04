<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama_kelurahan', 'id_kecamatan'];

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class);
    }

    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}
