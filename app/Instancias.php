<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instancias extends Model
{
    protected $fillable = ['nombre','descripcion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Instancias::class);
    }

    public function indisponibilidad()
    {
        return $this->belongsToMany('App\Indisponibilidades');
    }
}
