<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Asignacion</title>
</head>
<body>
	
	<h2>Listado de recursos Asignados: {{$proyecto->descripcion}}</h2>
	

<div>

<table class="table table-striped">
	
	<thead>
		<tr>
		<th>ID</th>
		<th>Nombre:</th>
		<th>Correo:</th>
		<th>Edad:</th>
		</tr>
	</thead>
	<tbody>
		@foreach($recursosAsignados as $ra)
<tr>
	<td>{{$ra->id}}</td>
	<td>{{$ra->nombre}}</td>
	<td>{{$ra->correo}}</td>
	<td>{{$ra->edad}}</td>

	</tr>

		@endforeach
	</tbody>
	</table>
	</div>
</body>
</html>