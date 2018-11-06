<?php $title = isset($item) ? $item->name: "Agregar Indisponibilidad"?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- <label>Seleccionar Servidor</label>

<select name="servidor" id="servidor" class="chosen"> 
<option value="">Seleccionar Servidor</option> 
@foreach($servidores as $servidor) 
<option value="{{ $servidor->id }}">{{ $servidor->ip }}</option> 
@endforeach 
</select>

<br><br> -->

{!! Form::mySelect('servidor', 'Servidor: ', App\Servidores::pluck('ip', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}


{!! Form::mySelect('nivel', 'Nivel de Indisponibilidad: ', config('variables.nivel')) !!}


{!! Form::mySelect('instancia', 'Instancia: ', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}


<!-- {!! Form::mySelect('instancia', 'Instancia', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['required','class'=>'chosen', 'placeholder' => 'Escoge una opción', 'name' => 'instancia','id' => 'instancia','multiple' => 'multiple']) !!} -->


<!-- <div class="requerido-con-instancia">
	<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:2px solid #d2d6de;">
    	<div class="box-body" style="margin:10px;">


</div>
</div>
</div>
</div>
</div> -->


{!! Form::myInput('datetime-local', 'hora_inicio', 'Hora inicio: ', ['required']) !!}

{!! Form::myInput('datetime-local', 'hora_final', 'Hora final: ' , ['required']) !!}

{!! Form::myInput('text', 'descripcion', 'Descripción: ', ['required']) !!}

