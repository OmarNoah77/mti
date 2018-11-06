<?php $title = isset($item) ? $item->name: "Agregar nuevo Tipo" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
