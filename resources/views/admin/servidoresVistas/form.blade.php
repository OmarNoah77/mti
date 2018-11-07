<?php $title = isset($item) ? $item->name: "Agregar nuevo Servidor" ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
{!! Form::myInput('text', 'hostname', 'Hostname', ['required']) !!}
{!! Form::myInput('text', 'ip', 'IP', ['required']) !!}
{!! Form::myInput('text', 'cpu', 'CPU', ['required']) !!}
{!! Form::myInput('number', 'cores', 'Cores', ['required']) !!}
{!! Form::myInput('number', 'ram', 'Ram (MB)', ['required']) !!}
{!! Form::myInput('number', 'disco', 'Disco (GB)', ['required']) !!}
{!! Form::mySelect('id_rol', 'Rol', App\Roles::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}






<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
      <div class="box-body" style="margin:10px;">

          {!! Form::mySelect('id_so', 'Sistema Operativo: ', App\SistemasOperativos::pluck('nombre', 'id')->toArray(), null, ['id' => 'so', 'class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

            <br>
          <label class="chosen" for="nombre">Version Sistema operativo</label>
          <br>
            <select name="id_version" id="version" style="width: 100%">
               <option value="">Selecciona un sistema operativo primero</option>
            </select>
          <br>
      </div>
    </div>
  </div>
</div>


    <script> 
        var rutaConsulta = "{{ route('admin.ruta.consulta.so') }}"; 
        $(document).ready(function(){ 
        selectChange(); 
        }); 

        function selectChange(){ 
        $('#so').on('change', function(e){ 
        var idSo = $(this).val(); 
        ajaxSelect(idSo); 
        }); 
        } 

        function ajaxSelect(id)
        { 
            $.ajax({ 
            type: 'POST', 
            headers: { 
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },   
            url: rutaConsulta, 
            data: {id: id}, 
            dataType: 'json', 
            beforeSend: function(){ 
            } 
            }).done(function(response) { 
            var html = '<option value="">Selecciona una opción</option>'; 
            $.each(response.versiones, function(i, elem){ 
            html += '<option value="'+ elem.id +'">'+ elem.version +'</option>' 
            }); 
            $('#version').html(html); 
            }).fail(function(data) { 

            }); 
        }
    </script>

{!! Form::mySelect('id_tipo', 'Tipo', App\Tipos::pluck('nombre', 'id')->toArray(), null, ['required','class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('id_uso', 'Uso', App\Usos::pluck('nombre', 'id')->toArray(), null, ['required','id' => 'listaUsos', 'class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

<div class="requerido-con-virtual">
	<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
    	<div class="box-body" style="margin:10px;">

{!! Form::mySelect('id_padre', 
               'Servidor padre:', 
                App\Servidores::select(DB::raw("ip AS ip"), "id")->where('id_uso', '=', 1)-> pluck('ip', 'id')->toArray(),       
                null, 
               ['class'=>'requerido-con-virtual', 'style' => 'width: 100%;', 'placeholder' => 'Escoge una opción']) !!}
</div>
</div>
</div>
</div>
</div>


<!-- MARCA Y MODELO -->

<div class="requerido-con-fisico">

		<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
    	<div class="box-body" style="margin:10px;">


<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
      <div class="box-body" style="margin:10px;">

          {!! Form::mySelect('id_marca', 'Marca: ', App\Marcas::pluck('nombre', 'id')->toArray(), null, ['id' => 'marca', 'class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

      <label class="col-sm-5" for="nombre">Modelo</label>
      <select name="id_modelo" id="modelo" style="width: 100%"> 
      <option value="70" name=id_modelo>Selecciona un modelo primero</option> 
      </select>

      <br>
      </div>
    </div>
  </div>
</div>

<script> 
  var rutaConsulta2 = "{{ route('admin.ruta.consulta.mod') }}"; 
  $(document).ready(function(){ 
  selectChange2(); 
  }); 

  function selectChange2(){ 
    $('#marca').on('change', function(e){ 
    var idMarca = $(this).val(); 
    ajaxSelect1(idMarca); 
    }); 
    } 

  function ajaxSelect1(id){ 
    $.ajax({ 
    type: 'POST', 
    headers: { 
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
    } ,
    url:  rutaConsulta2, 
    data: {id: id}, 
    dataType: 'json', 
    beforeSend: function(){ 
    } 
    }).done(function(response) { 
    var html = '<option value="">Selecciona una opción</option>'; 
    $.each(response.modelos, function(i, elem){ 
    html += '<option value="'+ elem.id +'">'+ elem.modelo +'</option>' 
    }); 
    $('#modelo').html(html); 
    }).fail(function(data) { 

    }); 
    }
</script>

{!! Form::myInput('text', 'mac', 'Mac', ['class' => 'requerido-con-fisico', 'style' => 'width: 100%;']) !!}
{!! Form::myInput('text', 'serial', 'Serial', ['class' => 'requerido-con-fisico', 'style' => 'width: 100%;']) !!}
{!! Form::myInput('text', 'ubicacion', 'Ubicación', ['class' => 'requerido-con-fisico', 'style' => 'width: 100%;']) !!}
{!! Form::myInput('text', 'propietario', 'Propietario', ['class' => 'requerido-con-fisico', 'style' => 'width: 100%;']) !!}
</div>
</div>
</div>
</div>
</div>

{!! Form::mySelect('id_estado', 'Estado', App\Estados::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::myInput('text', 'observacion', 'Observacion', ['required']) !!}
 

 <script>
     $(function() 
      {
      $("#listaUsos").change(function()
        {
          if($("option:selected", this).text() == 'Fisico')
          {
              $(".requerido-con-fisico").show();
              $(".requerido-con-virtual").hide();
            }
            else
            {
              $(".requerido-con-fisico").hide();
              $(".requerido-con-virtual").show();                
            }
        });
      });
  </script>