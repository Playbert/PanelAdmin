@extends('layouts.app')
@section('content')
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-car"></i> Servicios</h3>
  </div>
  <div class="panel-body">
    <div class="x_content">
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
        	<thead>
          	<tr class="headings">
          		<th class="column-title"></th>
	            <th class="column-title"></th>
	            <th class="column-title"></th>
	            <th class="column-title"></th>
	            <th class="column-title no-link last"><span class="nobr"></span></th>
	          </tr>
	        </thead>
          <tbody>
	        	@foreach ($servicioss as $i => $servicio)
            <tr class="even pointer">
              <td class=" ">{{ $i+1 }}</td>
              <td class=" ">{{ }}</td>
              <td class=" ">{{ }}</td>
              <td class=" ">{{ }}</td>
              <td class=" ">{{ }}</td>
              <td class=" ">
              <form action="servicios/{{ $servicio{'id'} }}" method="POST">
                {{ csrf_field() }}
                <a type="button" class="btn btn-primary btn-xs" class="fa fa-folder" value="Ver" onclick="window.location='{{ route('servicios.show', ['servicio' => $servicio{'id'}]) }}'"><i class="fa fa-folder"></i> Ver</a>
                <a type="button" class="btn btn-info btn-xs" value="Editar" onclick="window.location='{{ route('servicios.edit', ['servicio' => $servicio{'id'}]) }}'"><i class="fa fa-pencil"></i> Editar </a>
                <a type="button" class="btn btn-danger btn-xs" value="Eliminar" href="{{ route('servicios.destroy', ['servicio' => $servicio{'id'}]) }}" onclick="return confirm('¿Desea Eliminar Empleado?')"><i class="fa fa-trash"></i> Eliminar </a>
              </form>
              </td>
            </tr>
            @endforeach
        	</tbody>
        </table>
        <center>{{$servicios->links()}}</center>
      </div>	
    </div>
  </div>
</div>
@endsection