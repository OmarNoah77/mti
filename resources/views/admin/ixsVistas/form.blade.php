<?php $title = isset($item) ? $item->name: "Agregar nueva Instancia x Servidor" ?>

{!! Form::mySelect('id_servidor', 'Servidor', App\Servidores::pluck('ip', 'id')->toArray(), null, ['class'=>'chosen']) !!}

{!! Form::mySelect('id_servicio', 
               'Servicio', 
                App\Servicios::select(DB::raw("CONCAT(nombre, ' - ', version) AS nombre_version"), "id")->pluck('nombre_version', 'id')->toArray(),       
                null, 
               ['class'=>'chosen']) !!}


{!! Form::mySelect('id_instancia', 'Instancia', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen']) !!}

{!! Form::mySelect('id_estado', 'Estado', App\Estados::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen']) !!}

{!! Form::myInput('text', 'configuracion', 'Configuracion', ['required']) !!}

