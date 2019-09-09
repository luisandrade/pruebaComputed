<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table="playlist";

    protected $fillable = [
        'id',
        'id_usuario',
        'id_canal',
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

         public function canal()
     {
         return $this->belongsTo('App\Canal');
     }    
}
