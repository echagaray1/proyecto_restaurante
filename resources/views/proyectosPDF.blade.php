<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Proyectos</title>
</head>
<body>
	
<img src="https://www.google.com.mx/imgres?imgurl=http%3A%2F%2Fstatic.dnaindia.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fhalf%2Fpublic%2F2015%2F09%2F18%2F377173-itc-crop.jpg%3Fitok%3DeXGOrjub&imgrefurl=http%3A%2F%2Fwww.dnaindia.com%2Fmoney%2Freport-itc-to-double-investment-to-rs-1400-crore-in-punjab-food-park-2126410&docid=1yEl94-R7CSQYM&tbnid=wDALw3PnJKGdtM%3A&vet=10ahUKEwjM06SYxt7UAhWg3oMKHaE7A_cQMwhaKBUwFQ..i&w=640&h=360&bih=662&biw=1366&q=itc&ved=0ahUKEwjM06SYxt7UAhWg3oMKHaE7A_cQMwhaKBUwFQ&iact=mrc&uact=8" alt="">

	<h1>Listado de proyectos</h1>
	<hr>
	@foreach($proyectos as $p)
	<b><br>{{$p->descripcion}} <br></b>
	@endforeach
	<hr>


</body>
</html>