@extends('master')

@section('contenido')
<form action="{{url('/guardarRecurso')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="nombre"> Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
	<div class="form-group">
		<label for="correo">Correo:</label>
		<input type="email" class="form-control" name="correo" required>
	</div>
	<div class="form-group">
		<label for="edad">Edad:</label>
		<input type="number" class="form-control" name="edad" required>
	</div>
	<div class="form-group">
	<label for="puesto_id">Puesto id:</label>
		<select name="puesto_id" class="form-control">
			@foreach($puestos as $a)
				<option value="{{$a->id}}">{{$a->descripcion}}</option>
			@endforeach
		</select>
		@include('flash::message')
	</div>
		
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop
<script type="text/javascript">
	setTimeout(function()){
		$(".alert").fadeOut(1500);

	},1500);
</script>




















