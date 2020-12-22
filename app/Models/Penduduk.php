<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table='penduduk'; 

    protected $fillable = [
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'status_keluarga',
        'ayah',
        'ibu',
        'keluarga_id',
        'kewarganegaraan_id',
    ];

    public function kartu_keluarga()
    {
        return $this->belongsTo('App\Models\KartuKeluarga', 'keluarga_id',);
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo('App\Models\Kewarganegaraan', 'keluarga_id',);
    }

   
}
