<?php $title = isset($item) ? $item->name: "Agregar nuevo Cliente" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
