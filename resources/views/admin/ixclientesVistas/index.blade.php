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
    Instancias x Clientes <small>{{ trans('app.manage') }}</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box" style="border:1px solid #d2d6de;" >

	      <div class="box-header" style="background-color:#f5f5f5;border-bottom:1px solid #d2d6de;">
          <a class="btn btn-info" href="{{ route(ADMIN . '.ixclientesRoute.create') }}"  title="Agregar Roles">
            <i class="fa fa-plus" style="vertical-align:middle"></i>
          </a>
	      </div>

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding"  >
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>id</th>
                    <th>Instancia</th>
                    <th>Cliente</th>
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
                      <td><a>{{$item->instancias->nombre}}</a></td>
                      <td><a>{{$item->clientes->nombre}}</a></td>
                      <!--<td><a href="{{ route(ADMIN. '.ixclientesRoute.edit', $item->version) }}">{{ $item->version }}</a></td>
                      <td>
                        @if ($item->parent)
                        	{{ $item->parent->nombre }}
                        @endif
                      </td>-->
                      <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                                <li><a href="{{ route(ADMIN . '.ixclientesRoute.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                <li>
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.ixclientesRoute.destroy', $item->id),
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
