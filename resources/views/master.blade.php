<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Administración de Proyectos</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proyectos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarProyecto')}}">Registrar proyecto</a></li>
            <li><a href="{{url('/consultarProyectos')}}">Consultar Proyectos</a></li>
            <li><a href="{{url('/consultarPuestos')}}">Consultar Puestos</a></li>
            <li><a href="{{url('/consultarEncargados')}}">Consultar Encargados</a></li>
           
           </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Recursos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          
            <li><a href="{{url('/registrarRecursos')}}">Registrar Recursos</a></li>
            <li><a href="{{url('/consultarRecursos')}}">Consultar Recursos</a></li>
           </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Publicidad <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <!-- <li><a href="{{url('/cargar_archivo_correo')}}">Cargar archivo</a></li> -->
            <li><a href="{{url('/form_enviar_correo')}}">Formulario Correos</a></li>
            <!-- <li><a href="{{url('/enviar_correo')}}">Enviar Correos</a></li> -->
           
           </ul>
        </li>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      @yield('contenido')
    </div>
  </div>
</div>

<footer class="text-center">
	<hr>
	Negocios Electrónicos &copy; 2017
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>











