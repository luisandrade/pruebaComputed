<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePlaylist extends Model
{
    protected $table="detalle_playlist";

    protected $fillable = [ 
                'id_video',
                'id_playlist',
                // 'lenght_total'

    
    ];
}
