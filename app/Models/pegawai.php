<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pegawai', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'agama', 'alamat' , 'id_kelurahan', 'id_kecamatan', 'id_provinsi'];

    public function kecamatan()
    {
        return $this->belongsTo(kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(kelurahan::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(provinsi::class);
    }
}
