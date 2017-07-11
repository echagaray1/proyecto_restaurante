@extends('master')

@section('contenido')
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Edad</th>
			<th>puesto ID </th>
			<th> <a href="{{url('/recursosPDF')}}">PDF</a></th>
		
		</tr>
	</thead>
	<tbody>
	@foreach($recursos as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>	
			<td>{{$p->correo}}</td>
			<td>{{$p->edad}}</td>
			<td>{{$p->puesto_id}}</td>
		
			<td>
				<a href="{{url('/editarRecursos')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarRecurso')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
		@include('flash::message')
	@endforeach
	</tbody>
</table>
@stop




















