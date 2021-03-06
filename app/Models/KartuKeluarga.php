<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    use HasFactory;
    protected $table='kartu_keluarga'; 

    protected $fillable = [
        'no',
        'jorong_id',
        'tanggal_pencatatan'
    ];

    public function jorong()
    {
        return $this->belongsTo('App\Models\Jorong', 'jorong_id');
    }

    public function penduduk()
    {
        return $this->hasMany('App\Models\Penduduk', 'keluarga_id', 'id');
    }
}
