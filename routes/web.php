<?php

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::get('selectso','ServidoresController@getso');
    Route::post('selectversionRoute', 'ServidoresController@consultarVersiones')->name('ruta.consulta.so');
    Route::post('selectmodeloRoute', 'ServidoresController@consultarModelos')->name('ruta.consulta.mod');
    Route::post('selectinstanciaRoute', 'IndisponibilidadController@consultarInstancias')->name('ruta.consulta.instancia');
    Route::resource('rolesRoute', 'RolesController');
    Route::resource('indisponibilidadRoute', 'IndisponibilidadController');
    Route::resource('sisopRoute', 'SisopController');      
    Route::resource('tipoRoute', 'TipoController');
    Route::resource('estadosRoute', 'EstadosController');
    Route::resource('usosRoute', 'UsosController');
    Route::resource('serviciosRoute', 'ServiciosController');
    Route::resource('servidoresRoute', 'ServidoresController');
    Route::resource('instanciasRoute', 'InstanciasController');
    Route::resource('ixsRoute', 'IxsController');
    Route::resource('clientesRoute', 'ClientesController');
    Route::resource('ixclientesRoute', 'IxclientesController');
    Route::resource('soversionesRoute', 'SoversionesController');
    Route::resource('marcasRoute', 'MarcasController');
    Route::resource('modelosRoute', 'ModelosController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
    Route::get('tags', function (Illuminate\Http\Request  $request) {
        $term = $request->term ?: '';
        $tags = App\Instancias::where('nombre', 'like', $term.'%')->lists('nombre', 'id');
        $valid_tags = [];
        foreach ($tags as $id => $tag) {
            $valid_tags[] = ['id' => $id, 'text' => $tag];
        }
        return \Response::json($valid_tags);
    });
    

});
