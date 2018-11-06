<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servidores extends Model
{
    protected $fillable = ['hostname','ip','cpu','cores','ram','disco','id_padre','id_rol','id_so','id_version','id_tipo','id_uso','id_marca','id_modelo','mac','serial','ubicacion','propietario','id_estado','observacion'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parentServidores()
    {
        return $this->belongsTo(Servidores::class);
    }

    public function servidores2()
    {
        return $this->belongsTo('App\Servidores','id_padre');
    }

    public function roles()
    {
     return $this->belongsTo('App\Roles','id_rol');
    }

    public function usos()
    {
     return $this->belongsTo('App\Usos','id_uso');
    }

    public function so()
    {
     return $this->belongsTo('App\SistemasOperativos','id_so');
    }

    public function versionn()
    {
     return $this->belongsTo('App\SoVersiones','id_version');
    }

    public function tipos()
    {
     return $this->belongsTo('App\Tipos','id_tipo');
    }

    public function estados()
    {
     return $this->belongsTo('App\Estados','id_estado');
    }

    public function marcas()
    {
     return $this->belongsTo('App\Marcas','id_marca');
    }

    public function modelos()
    {
     return $this->belongsTo('App\Modelos','id_modelo');
    }

     public function instancias()
    {
     return $this->belongsToMany('App\Indisponibilidades');
    }

    

}
