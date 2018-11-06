<?php $title = isset($item) ? $item->name: "Agregar nuevo Servicio" ?>
{!! Form::myInput('text', 'nombre', 'Nombre', ['required']) !!}
{!! Form::myInput('text', 'version', 'Version', ['required']) !!}
