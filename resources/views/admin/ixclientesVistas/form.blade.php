<?php $title = isset($item) ? $item->name: "Agregar nuevo Instancia x Cliente" ?>

{!! Form::mySelect('id_instancia', 'Instancia', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen']) !!}

{!! Form::mySelect('id_cliente', 'Cliente', App\Clientes::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen']) !!}
