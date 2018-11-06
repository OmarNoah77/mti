@extends('admin.adminlayout')

@section('page-header')
  Crear Servidor <small>nuevo</small>
@stop

@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::open([
                'action' => ['ServidoresController@store'],
                'files' => true
            ])
        !!}

        <div class="box-body" style="margin:10px;">
          @include('admin.servidoresVistas.form')
        </div>

      	<div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">Guardar</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.servidoresRoute.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancelar</a>
      	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

 


 
        {!! Form::close() !!}
    </div>
  </div>
  
</div>
@stop
