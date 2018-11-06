<?php $title = isset($item) ? $item->name: "Agregar nuevo Estado" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
