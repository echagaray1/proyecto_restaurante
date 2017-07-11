@extends('master')

@section('contenido')
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Descripción</th>

			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($puestos as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->descripcion}}</td>
			
			
			
				<a href="" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarPuestos')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop
