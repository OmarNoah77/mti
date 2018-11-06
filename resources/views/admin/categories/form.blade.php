<?php $title = isset($item) ? $item->name: "Agregar nueva categoria" ?>
{!! Form::myInput('text', 'name', 'Name', ['required']) !!}
{!! Form::mySelect('parent_id', 'Parent category', [0 => 'root'] + App\Category::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}
