<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ixclientes extends Model
{
    protected $fillable = ['id_instancia','id_cliente'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentIxc()
    {
        return $this->belongsTo(Ixclientes::class);        
    }
    public function instancias()
    {
     return $this->belongsTo('App\Instancias','id_instancia');
    }
    public function clientes()
    {
     return $this->belongsTo('App\Clientes','id_cliente');
    }
}
