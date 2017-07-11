<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Recursos</title>
</head>
<body>
	
	<h1>recursos Asignados</h1>
	<hr>
	@foreach($recursos as $p)
	<br>

	<b>{{$p->nombre}} <br></b>
	@endforeach
	<br>
</body>
</html>