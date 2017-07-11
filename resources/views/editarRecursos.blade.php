@extends('master')

@section('contenido')
<form action="{{url('/actualizarRecurso')}}/{{$recurso->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		
		<label for="id">id:</label>
		<input type="number" class="form-control" name="id" required value="{{$recurso->id}}">
	</div>

	<div class="form-group">

		<label for="nombre">nombre:</label>
		<input type="text" class="form-control" name="nombre" required value="{{$recurso->nombre}}">
	</div>
	<div class="form-group">
		<label for="correo">correo:</label>
		<input type="email" class="form-control" name="correo" required value="{{$recurso->correo}}">
	</div>
	<div class="form-group">
		<label for="fecha_entrega">edad:</label>
		<input type="number" class="form-control" name="edad" required value="{{$recurso->edad}}">
	</div>
	<div class="form-group">
	<label for="puesto_id">puesto id:</label>
		<select name="puesto_id" class="form-control">
			<option selected="{{$recurso->puesto_id}}">
				{{$recurso->puesto_id}}</option>
			@foreach($puestos as $a)
				<option value="{{$a->id}}">{{$a->descripcion}}</option>
			@endforeach
		</select>
	</div>
	
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@include('flash::message')
@stop




















