@extends('master')

@section('contenido')
<form action="{{url('/actualizarProyecto')}}/{{$proyecto->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		
		<label for="id">id:</label>
		<input type="number" class="form-control" name="id" required value="{{$proyecto->id}}">
	</div>

	<div class="form-group">

		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required value="{{$proyecto->descripcion}}">
	</div>
	<div class="form-group">
		<label for="fecha_inicio">Fecha de inicio:</label>
		<input type="date" class="form-control" name="fecha_inicio" required value="{{$proyecto->fecha_inicio}}">
	</div>
	<div class="form-group">
		<label for="fecha_entrega">Fecha de entrega:</label>
		<input type="date" class="form-control" name="fecha_entrega" required value="{{$proyecto->fecha_entrega}}">
	</div>
	<div class="form-group">
	<label for="encargado">Encargado:</label>
		<select name="encargado" class="form-control">
			<option selected="{{$proyecto->encargado_id}}">
				{{$proyecto->encargado_id}}</option>
			@foreach($encargados as $a)
				<option value="{{$a->encargado_id}}">{{$a->encargado_id}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
	<label for="estado">Estado:</label>
		<select name="estado" class="form-control">
			@if($proyecto->estado==0)
				<option value="0" selected>Pendiente</option>
				@elseif($proyecto->estado==1)
				<option value="1" selected>En proceso</option>
				@elseif($proyecto->estado==2)
				<option value="2" selected>Finalizado</option>
				@elseif($proyecto->estado==3)
				<option value="3" selected>Cancelado</option>
				@endif

		
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop




















