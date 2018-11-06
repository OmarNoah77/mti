<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
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
