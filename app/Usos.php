<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usos extends Model
{
     protected $fillable = ['nombre'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Tipos::class);
    }
}
