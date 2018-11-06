<?php $title = isset($item) ? $item->name: "Agregar nueva marca" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}

