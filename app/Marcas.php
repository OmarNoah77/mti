<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
     protected $fillable = ['nombre'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Roles::class);
    }
}
