<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/ejemplo', 'ejemploController@index');
Route::get('/registrarProyecto', 'proyectosController@registrar');
Route::post('/guardarProyecto', 'proyectosController@guardar');
Route::get('/consultarProyectos', 'proyectosController@consultar');
Route::get('/eliminarProyecto/{id}', 'proyectosController@eliminar');
Route::get('/editarProyecto/{id}', 'proyectosController@editar');
Route::post('/actualizarProyecto/{id}', 'proyectosController@actualizar');
Route::get('/proyectosPDF/', 'proyectosController@pdf');
Route::get('/asignarRecurso/{id}', 'proyectosController@asignarRecurso');
Route::post('/guardarAsignacion/{id}','proyectosController@guardarAsignacion');	
Route::get('/eliminarAsignacion/{idr}/{idp}', 'proyectosController@eliminarAsignacion');

			//PUBLICIDAD

Route::get('form_enviar_correo', 'CorreoController@crear');
Route::post('enviar_correo', 'CorreoController@enviar');
Route::post('cargar_archivo_correo', 'CorreoController@store');




			//Recursos

Route::get('/registrarRecursos', 'recursosController@registrar');
Route::post('/guardarRecurso', 'recursosController@guardar');
Route::get('/consultarRecursos', 'recursosController@consultar');
Route::get('/eliminarRecurso/{id}', 'recursosController@eliminar');
Route::get('/editarRecursos/{id}', 'recursosController@editar');
Route::post('/actualizarRecurso/{id}', 'recursosController@actualizar');
Route::get('/recursosPDF/', 'recursosController@pdf');	

	//Puestos
Route::get('/consultarencargado', 'encargadosController@consultar');
			//Nueva RUTA
Route::get('/asignacionPDF/{id}', 'proyectorecursosController@recursopdf');
Route::post('/guardarPuestos', 'puestosController@guardar');

Route::get('/consultarPuestos', 'puestosController@consultar');

Route::get('/eliminarPuestos/{id}', 'puestosController@eliminar');


			//Encargados

Route::get('/registrarPuestos', 'puestosController@registrar');

Route::post('/guardarPuestos', 'puestosController@guardar');

Route::get('/consultarencargado', 'puestosController@consultar');

Route::get('/eliminarPuestos/{id}', 'puestosController@eliminar');
	
	//hacer editar y eliminar !!!









