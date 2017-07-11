@extends('master')

@section('contenido')
<table class="table table-hover">
	<h1>Proyectos:</h1>
	<thead>
		<tr>
			<th>Proyectos:</th>
			<th>
			<div class="form-group">
	<label for="estado">Recursos:</label>
		<select name="recursos" class="form-control">
			<option selected="{{$proyecto->encargado_id}}">
				{{$proyecto->encargado_id}}</option>
			@foreach($encargados as $a)
				<option value="{{$a->encargado_id}}">{{$a->encargado_id}}</option>
			@endforeach
		</select> </th>
			<th> <a href="{{url('/asignarRecurso')}}">PDF</a></th>
		
		</tr>
	</thead>
	<tbody>
	@foreach($proyectos as $p)
		<tr>
			<td>{{$p->descripcion}}</td>
			
			<td>{{$p->puesto_id}}</td>
		
			<td>
				<a href="{{url('/editarLista')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarLista')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop




















