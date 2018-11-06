<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
     protected $fillable = ['nombre'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Clientes::class);
    }
}
