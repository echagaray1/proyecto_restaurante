<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use App\Recurso;
use App\Puesto;
use DB;


class puestosController extends Controller
{
     public function registrar(){
    	$puestos=Puesto::all();
    	return view('registrarPuestos', compact('puestos'));
}

 public function guardar(Request $datos){
    	$puestos = new Puesto();
    	$puestos->id=$datos->input('id');
    	$puestos->descripcion=$datos->input('descripcion');
    	$puestos->save();

    	return redirect('/consultarPuestos');
    }

    public function consultar(){
    	//$proyectos=Proyecto::all();
    	$puestos=DB::table('puestos')
    		->join('recursos', 'puestos.id', '=', 'recursos.id')
    		->select('puestos.*', 'recursos.id')
    		->get();

    	return view('consultarPuestos', compact('puestos'));
    }

    public function eliminar($id){
    	$puestos=Puesto::find($id);
    	$puestos->delete();

    	return redirect('/consultarPuestos');
    }

}
