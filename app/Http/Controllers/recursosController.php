<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use App\Recurso;
use App\Puesto;
use DB;

class recursosController extends Controller
{
     public function registrar(){
    	$puestos=Puesto::all();
    	return view('registrarRecursos', compact('puestos'));
        flash('registro recurso correctamente !')->success();
}

public function guardar(Request $datos){
    	$recurso = new Recurso();

    	$recurso->nombre=$datos->input('nombre');
    	$recurso->correo=$datos->input('correo');
    	$recurso->edad=$datos->input('edad');
    	$recurso->puesto_id=$datos->input('puesto_id');
    	$recurso->save();
flash('registro correctamente !')->success();
    	return redirect('/consultarRecursos');
    }

    public function consultar(){
    	//$proyectos=Proyecto::all();
    	$recursos=DB::table('recursos')
            ->join('puestos', 'recursos.puesto_id', '=', 'puestos.id')
            ->select('recursos.*', 'puestos.descripcion')
            ->get();
 	return view('consultarRecursos', compact('recursos'));
    }

    public function eliminar($id){
    	$recurso=Recurso::find($id);
    	$recurso->delete();
flash('registro se ha eliminado correctamente !')->warning();
    	return redirect('/consultarRecursos');
    }


     public function editar($id){
        $recurso=DB::table('recursos')
        ->where('recursos.id', '=', $id) 
         ->join('puestos','recursos.puesto_id', '=', 'puestos.id')
        ->select('recursos.*', 'puestos.descripcion')
        ->first();
        $puestos=Puesto::all();
  
        return view('editarRecursos', compact('puestos','recurso'));
    }


     public function actualizar($id, Request $datos){
      
        $recurso=Recurso::find($id);
        $recurso->id=$datos->input('id');
        $recurso->nombre=$datos->input('nombre');
        $recurso->correo=$datos->input('correo');
        $recurso->edad=$datos->input('edad');
        $recurso->puesto_id=$datos->input('puesto_id');
        $recurso->save();
        flash('registro se ha actualizado !')->success();

        return redirect('/consultarRecursos');
    }


     public function pdf(){
      $recursos=Recurso::all();
      $vista=view('recursosPDF',compact('recursos'));
      $pdf=\App::make('dompdf.wrapper');
      $pdf->loadHTML($vista);
      $pdf->setpaper('letter');
        return $pdf->stream('ListadoRecursos.pdf');
    }


   //    public function recursopdf($id){
      
   //  $proyecto=Proyecto::find($id);
   //    $lista=DB::table('proyectorecursos')
   //    ->join('recursos','recursos.id', "=", 'proyectorecursos.id_recursos')
   //    ->where ('proyectorecursos.id_proyecto', '=', $id)
   //    ->pluck('recursos.id');
  
   // $recursosAsignados=DB::table('recursos')
   // ->whereIn('recursos.id',$lista)
   // ->join('proyectorecursos','recursos.id', '=',
   //  'proyectorecursos.id_recursos')
   //  ->where('proyectorecursos.id_proyecto','=' ,$id)
   // ->select('recursos.nombre','recursos.id','recursos.correo','recursos.edad')
   // ->get();

   //    $vista=view('proyectosPDF',compact('proyecto' ,'recursosAsignados'));
   //    $pdf=\App::make('dompdf.wrapper');
   //    $pdf->loadHTML($vista);
   //    $pdf->setpaper('letter');
        
   //      return $pdf->stream('ListadoasignacionPDF.pdf');
   //  }

    public function listado($id, Request $datos){
      
        $recurso=Recurso::find($id);
        $recurso->id=$datos->input('id');
        $recurso->nombre=$datos->input('nombre');
        $recurso->correo=$datos->input('correo');
        $recurso->edad=$datos->input('edad');
        $recurso->puesto_id=$datos->input('puesto_id');
        $recurso->save();
        flash('Mostrar lista ')->success();

        return redirect('/consultarRecursos');
    }
}















