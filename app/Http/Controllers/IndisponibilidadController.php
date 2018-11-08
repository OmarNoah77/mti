<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indisponibilidades;
use App\SistemasOperativos;
use App\Servidores;
use App\Ixs;
use App\Instancias;



class IndisponibilidadController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Indisponibilidades::with('parentIndisponibilidades','server','instanciasF','ixs')->get();

        return view('admin.indisponibilidadVistas.index', compact('items'));
    }

    
    public function consultarInstancias(Request $request) 
    { 
        $servidores = $request->id; 
        $ixs = Ixs::where('id_servidor', $servidores)->get(); 

        $respuesta2 = array(); 
        $respuesta2['ixs'] = $ixs->toArray(); 
        return response()->json($respuesta2); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servidores = Servidores::orderBy('ip','asc')->get(); 
          return view ('admin.indisponibilidadVistas.create', compact('servidores')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Indisponibilidades::create($request->all()); 
        $intancia = $request->get('instancia'); 
        $nivel = $request->get('nivel'); 
        $servidor = $request->get('servidor'); 
        $hora_inicio = $request->get('hora_inicio'); 
        $hora_final = $request->get('hora_final'); 
        $descripcion = $request->get('descripcion'); 

        $Indisponibilidades = []; 

        foreach($intancia as $insta) 
        { 
        if(! empty($insta)) 
        { 
        // Get the current time 
            $now = date('Y-m-d');

            // Formulate record that will be saved 
            $Indisponibilidades[] = [ 
            'instancia' => $insta, 
            'nivel' => $nivel, 
            'servidor' => $servidor, 
            'hora_inicio' => $hora_inicio, 
            'hora_final' => $hora_final, 
            'descripcion' => $descripcion, 
            'updated_at' => $now, 
            'created_at' => $now 
            ]; 
        } 
        } 

        Indisponibilidades::insert($Indisponibilidades); 

        //return back()->withSuccess(trans('app.success_store')); 
        return redirect()->route(ADMIN.'.indisponibilidadRoute.index')->withSuccess(trans('app.success_store')); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Indisponibilidades::findOrFail($id);
        return view('admin.indisponibilidadVistas.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $item = Indisponibilidades::findOrFail($id);
        $item->update($request->all());
        //return back()->withSuccess(trans('app.success_update'));
        return redirect()->route(ADMIN.'.indisponibilidadRoute.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indisponibilidades::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
