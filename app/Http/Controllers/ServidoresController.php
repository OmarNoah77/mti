<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Servidores;
use App\Roles;
use App\SistemasOperativos;
use App\SoVersiones;
use App\Tipos;
use App\Marcas;
use App\Modelos;
use App\Estados;


class ServidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Servidores::with('parentServidores','servidores2','roles','so','versionn','marcas','modelos','tipos','estados','usos')->get();

        return view('admin.servidoresVistas.index', compact('items'));
    }

    
    public function consultarVersiones(Request $request)
    {
       $id_so = $request->id;
       $versiones = SoVersiones::where('id_so', $id_so)->get();

       $respuesta = array();
       $respuesta['versiones'] = $versiones->toArray();   
       return response()->json($respuesta);
    }


    public function consultarModelos(Request $request) 
    { 
        $id_marca = $request->id; 
        $modelos = Modelos::where('id_marca', $id_marca)->get(); 


        $respuesta = array(); 
        $respuesta['modelos'] = $modelos->toArray(); 
        return response()->json($respuesta); 
    }



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $sistemas = SistemasOperativos::orderBy('nombre','asc')->get();
       $marcas = Marcas::orderBy('nombre','asc')->get();  
       return view ('admin.servidoresVistas.create', compact('sistemas','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Servidores::create($request->all());

        //return back()->withSuccess(trans('app.success_store'));
        return redirect()->route(ADMIN.'.servidoresRoute.index')->withSuccess(trans('app.success_store'));
  
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
        $item = Servidores::findOrFail($id);
        return view('admin.servidoresVistas.edit', compact('item'));
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
        
        $item = Servidores::findOrFail($id);
        $item->update($request->all());
        //return back()->withSuccess(trans('app.success_update'));
        return redirect()->route(ADMIN.'.servidoresRoute.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servidores::destroy($id);

        return back()->withSuccess(trans('app.success_destroy'));
    }

    
}
