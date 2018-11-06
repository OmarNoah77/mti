<?php $title = isset($item) ? $item->name: "Agregar nuevo Uso" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
