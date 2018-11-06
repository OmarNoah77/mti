<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servidores;
use App\Servicios;
use App\Instancias;
use App\Estados;
use App\Usos;

class Ixs extends Model
{
    protected $fillable = ['id_servidor','id_servicio','id_instancia','id_estado','configuracion','id_uso'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentIxs()
    {
        return $this->belongsTo(Servicios::class);        
    }

    public function servidores()
    {
     return $this->belongsTo('App\Servidores','id_servidor');
    }

    public function servicios()
    {
     return $this->belongsTo('App\Servicios','id_servicio');
    }

    public function instancias()
    {
     return $this->belongsTo('App\Instancias','id_instancia');
    }

    public function estados()
    {
     return $this->belongsTo('App\Estados','id_estado');
    }

    public function usos()
    {
     return $this->belongsTo('App\Usos','id_uso');
    }

    
}
