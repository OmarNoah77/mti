@extends('admin.adminlayout')

@section('css')
  <style>
  table.table .actions {
      width: 100px;
      text-align: center;
  }
  </style>
@stop

@section('page-header')
    Servidores <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.servidoresRoute.create') }}"  title="Agregar Servidor">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Host name</th>
                    <th>IP</th>
                    <th>CPU</th>
                    <th>CORES</th>
                    <th>RAM</th>
                    <th>Disco</th>
                    <th>Rol</th>
                    <th>S.O</th>
                    <th>Version S.O</th>
                    <th>Tipo</th>
                    <th>Uso</th>
                    <th>Nodo Padre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Mac</th>
                    <th>Serial</th>
                    <th>Ubicacion</th>
                    <th>Propietario</th>
                    <th>Estado</th>
                    <th>Observacion</th>
                    <th class="no-sort"></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th class="actions"></th>
                </tr>
            </tfoot>
            <tbody>
      					@foreach ($items as $item)
      						<tr>
                      <td><a>{{$item->id }}</a></td>
                      <td><a>{{$item->hostname }}</a></td>
                      <td><a>{{$item->ip }}</a></td>
                      <td><a>{{$item->cpu }}</a></td>
                      <td><a>{{$item->cores }}</a></td>
                      <td><a>{{$item->ram }}</a></td>
                      <td><a>{{$item->disco }}</a></td>
                      <td><a>{{$item->roles->nombre}}</a></td>
                      <td><a>{{$item->versionn->so->nombre}}</a></td>
                      <td><a>{{$item->versionn->version}}</a></td>
                      <td><a>{{$item->tipos->nombre}}</a></td>
                      <td><a>{{$item->usos->nombre}}</a></td>
                      <td>
                        @if ($item->servidores2)
                          {{ $item->servidores2->ip }}
                        @endif
                      </td>
                      <td><a>{{$item->marcas->nombre }}</a></td>
                      <td><a>{{$item->modelos->modelo }}</a></td>
                      <td><a>{{$item->mac }}</a></td>
                      <td><a>{{$item->serial }}</a></td>
                      <td><a>{{$item->ubicacion }}</a></td>
                      <td><a>{{$item->propietario }}</a></td>
                      <td><a>{{$item->estados->nombre}}</a></td>
                      <td><a>{{$item->observacion }}</a></td>
                      
                      <!--<td><a href="{{ route(ADMIN. '.servidoresRoute.edit', $item->version) }}">{{ $item->version }}</a></td>
                      <td>
                        @if ($item->parent)
                        	{{ $item->parent->nombre }}
                        @endif
                      </td>-->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.servidoresRoute.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.servidoresRoute.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}
                                    <button class="btn btn-danger btn-xs" title="{{ trans('app.delete_title') }}"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
      						</tr>
      					@endforeach
            </tbody>
          </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	</div>
@stop

@section('js')
  <script>

    (function($) {

      var table = $('.data-tables').DataTable({
          "columnDefs": [{
                 "targets": 'no-sort',
                 "orderable": false,
           }],
      });

    })(jQuery);
  </script>
@stop
