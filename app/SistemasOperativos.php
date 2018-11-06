<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemasOperativos extends Model
{
     protected $fillable = ['nombre'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentSO()
    {
        return $this->belongsTo(SistemasOperativos::class);
    }

    }
