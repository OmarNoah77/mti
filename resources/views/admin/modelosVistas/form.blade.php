<?php $title = isset($item) ? $item->name: "Agregar modelo para Marca" ?>
{!! Form::mySelect('id_marca', 'Marca', App\Marcas::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}
{!! Form::myInput('text', 'modelo', 'Modelo', ['required']) !!}

