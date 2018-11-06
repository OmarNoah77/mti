<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $fillable = ['id_marca','modelo'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(Modelos::class);
    }

    public function marca()
    {
     return $this->belongsTo('App\Marcas','id_marca');
    }
}
