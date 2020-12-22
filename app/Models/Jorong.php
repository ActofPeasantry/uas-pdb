<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    use HasFactory;
    protected $table='jorong'; 

    protected $fillable = ['id', 'nagari_id', 'nama'];

    public function kartu_keluarga(){
        return $this->hasMany('App\Models\KartuKeluarga', 'jorong_id', 'id');
    }

    public function nagari()
    {
        return $this->belongsTo('App\Models\Nagari', 'nagari_id');
    }
}
