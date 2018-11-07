<?php $title = isset($item) ? $item->name: "Agregar Indisponibilidad"?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

{!! Form::mySelect('nivel', 'Nivel de Indisponibilidad: ', config('variables.nivel'),['required','id' => 'ListaNivel', 'class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('servidor', 'Servidor: ', App\Servidores::pluck('ip', 'id')->toArray(), null, ['id' => 'server', 'class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

<div class="row">  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
      <div class="box-body" style="margin:10px;">
            <div class="requerido-con-instancia">
          <label class="col-sm-5" for="nombre">Instancia</label>
          <br>
            <select name="instancia" id="instancia" class="requerido-con-instancia" style="width: 100%" multiple="multiple">
               <option value="">Selecciona un servidor primero</option>
            </select>
          <br>
          </div>
      </div>
    </div>
  </div>
</div>

<script> 
        var rutaConsultaInstancia = "{{ route('admin.ruta.consulta.instancia') }}"; 
        $(document).ready(function(){ 
        selectChange(); 
        }); 

        function selectChange(){ 
        $('#server').on('change', function(e){ 
        var insta = $(this).val(); 
        ajaxSelect(insta); 
        }); 
        } 

        function ajaxSelect(id)
        { 
            $.ajax({ 
            type: 'POST', 
            headers: { 
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },   
            url: rutaConsultaInstancia, 
            data: {id: id}, 
            dataType: 'json', 
            beforeSend: function(){ 
            } 
            }).done(function(response) { 
            var html = '<option value="">Selecciona una opción</option>'; 
            $.each(response.ixs, function(i, elem){ 
            html += '<option value="'+ elem.id +'">'+ elem.configuracion +'</option>' 
            }); 
            $('#instancia').html(html); 
            }).fail(function(data) { 

            }); 
        }
    </script>


<!-- Script Select2 -->



<!-- <label>Seleccionar Servidor</label>



<br><br> 

{!! Form::mySelect('servidor', 'Servidor: ', App\Servidores::pluck('ip', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

{!! Form::mySelect('instancia', 'Instancia: ', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen', 'placeholder' => 'Escoge una opción']) !!}

-->

<!-- {!! Form::mySelect('instancia', 'Instancia', App\Instancias::pluck('nombre', 'id')->toArray(), null, ['required','class'=>'chosen', 'placeholder' => 'Escoge una opción', 'name' => 'instancia','id' => 'instancia','multiple' => 'multiple']) !!} -->


<!-- <div class="requerido-con-instancia">
	<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:2px solid #d2d6de;">
    	<div class="box-body" style="margin:10px;">


</div>
</div>
</div>
</div>
</div> -->


{!! Form::myInput('datetime-local', 'hora_inicio', 'Hora inicio: ', ['required']) !!}

{!! Form::myInput('datetime-local', 'hora_final', 'Hora final: ' , ['required']) !!}

{!! Form::myInput('text', 'descripcion', 'Descripción: ', ['required']) !!}

 <script>
     $(function() 
      {
      $("#ListaNivel").change(function()
        {
          if($("option:selected", this).text() == 'Instancia')
          {
              $(".requerido-con-instancia").show();
            }
            else
            {
              $(".requerido-con-instancia").hide();         
            }
        });
      });
  </script>