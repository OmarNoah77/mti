<?php $title = isset($item) ? $item->name: "Agregar nuevo Rol" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
