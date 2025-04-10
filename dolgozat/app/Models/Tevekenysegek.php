<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tevekenysegek extends Model
{
    protected $fillable=[
        'id',
        'kat_id',
        'tev_nev',
        'allapot'
    ];
}

function tevekenysegek(){
    return $this->belongsTo(Tevekenysegek::class, 'kat_id', 'id');
}
