@extends('admin.adminlayout')

@section('page-header')
    Presentacion <small>Inicio</small>
@stop

@section('content')

    <div class="row" >
        <div class="col-md-12">
            <div class="panel panel-default"  >
                <div class="panel-body" >
                    Bienvenido {{ Auth::user()->name }} !!!

                 

                    




                    <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNGM5NDYyNWMtMGVkYi00NmE5LWE4YWQtYWMyYzI0ODRjYjBjIiwidCI6IjMzOTQ0MGI4LTk2MzUtNGIxMi05YTVmLTBhMTJjZmE2OWExZSIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>
                                        








                </div>
            </div>
        </div>
    </div>
@stop
