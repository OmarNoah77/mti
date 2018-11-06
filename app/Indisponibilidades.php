<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indisponibilidades extends Model
{
    protected $fillable = ['servidor','descripcion','hora_inicio','hora_final','instancia','nivel'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
     public function parentIndisponibilidades()
    {
        return $this->belongsTo(Indisponibilidades::class);
    }

    public function server()
    {
        return $this->belongsToMany('App\Servidores','servidor');
    }

    public function instancias()
    {
        return $this->belongsToMany('App\Instancias','instancia');
    }

 
}
