<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoVersiones extends Model
{
    protected $fillable = ['id_so','version','so','consultarVersiones'];

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function parent()
    {
        return $this->belongsTo(SoVersiones::class);
    }

    public function so()
    {
     return $this->belongsTo('App\SistemasOperativos','id_so');
    }

    public function consultarVersiones(Request $request)
    {
       $id_so = $request->id;
       $versiones = SoVersiones::where('id_so', $id_so)->get();

       $respuesta = array();
       $respuesta['versiones'] = $versiones->toArray();   
       return response()->json($respuesta);
    }
}
