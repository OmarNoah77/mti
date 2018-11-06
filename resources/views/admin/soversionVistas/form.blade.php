<?php $title = isset($item) ? $item->name: "Agregar nueva version para S.O" ?>
{!! Form::mySelect('id_so', 'S.O', App\SistemasOperativos::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}
{!! Form::myInput('text', 'version', 'Version', ['required']) !!}

