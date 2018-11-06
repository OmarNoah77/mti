<?php $title = isset($item) ? $item->name: "Agregar nueva instancia" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
{!! Form::myInput('text', 'descripcion', 'Descripcion', ['required']) !!}
