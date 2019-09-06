<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $table="canales";

    protected $fillable = [ 'nombre_canal'];

    public function playlist()
    {
        return $this->hasMany('App\Playlist');
    }


}
