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
        'status_pernikahan',
        'ayah',
        'ibu',
        'keluarga_id',
        'kewarganegaraan_id',
        'level_pendidikan_id',
        'pekerjaan_id',
    ];

    public function kartu_keluarga()
    {
        return $this->belongsTo('App\Models\KartuKeluarga', 'keluarga_id',);
    }

    public function kewarganegaraan()
    {
        return $this->belongsTo('App\Models\Kewarganegaraan', 'keluarga_id',);
    }
    
    public function level_pendidikan()
    {
        return $this->belongsTo('App\Models\LevelPendidikan', 'level_pendidikan_id',);
    }

    public function Pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan', 'pekerjaan_id',);
    }
}
