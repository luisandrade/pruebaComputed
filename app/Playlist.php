<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table="playlist";

    protected $fillable = [
        'id_usuario',
        'nombre_playlist',
        'hora_inicio',
        'fecha_emision',
        'loop',
        'auto_start'

    ];
    public function usuario()
     {
         return $this->belongsTo('App\User');
     }
}
