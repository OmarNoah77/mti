<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
     protected $fillable = ['nombre','version'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Servicios::class);
    }

}
