@extends('master')

@section('contenido')
<form action="{{url('/guardarPuesto')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="id">ID:</label>
		<input type="text" class="form-control" name="id" required>
	</div>
	<div class="form-group">
		<label for="descripcion"> Descripcion:</label>
		<input type="date" class="form-control" name="descripcion" required>
	</div>
	
	
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop




















