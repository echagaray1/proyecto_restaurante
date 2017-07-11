<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use App\Recurso;
use App\Puesto;
use App\proyectorecursos;
use DB;

class proyectosController extends Controller
{
    public function registrar(){
    	$encargados=Encargado::all();
      flash('se registro correctamente el proyecto !')->success();
    	return view('registrarProyectos', compact('encargados'));
    }

    public function guardar(Request $datos){
    	$proyecto = new Proyecto();
    	$proyecto->descripcion=$datos->input('descripcion');
    	$proyecto->fecha_inicio=$datos->input('fecha_inicio');
    	$proyecto->fecha_entrega=$datos->input('fecha_entrega');
    	$proyecto->encargado_id=$datos->input('encargado');
    	$proyecto->estado=$datos->input('estado');
    	$proyecto->save();
       flash('registro correctamente !')->success();
    	return redirect('/consultarProyectos');
    }

    public function consultar(){
    	//$proyectos=Proyecto::all();
    	$proyectos=DB::table('proyectos')
    		->join('encargados', 'proyectos.encargado_id', '=', 'encargados.id')
    		->select('proyectos.*', 'encargados.nombre')
    		->get();

    	return view('consultarProyectos', compact('proyectos'));
    }

    public function eliminar($id){
    	$proyecto=Proyecto::find($id);
    	$proyecto->delete();
       flash('ha sido eliminado  del proyecto !')->warning();

    	return redirect('/consultarProyectos');
    }

     public function editar($id){
        $proyecto=DB::table('proyectos')
        ->where('proyectos.id', '=', $id) 
         ->join('encargados','encargados.id', '=', 'proyectos.encargado_id')
        ->select('proyectos.*', 'encargados.nombre')
        ->first();
        $encargados=Encargado::all();
 flash('editado correctamente !')->success();
        return view('editarProyectos', compact('proyecto','encargados'));
    }


     public function actualizar($id, Request $datos){
      
        $proyecto=Proyecto::find($id);
        $proyecto->descripcion=$datos->input('descripcion');
        $proyecto->fecha_inicio=$datos->input('fecha_inicio');
        $proyecto->fecha_entrega=$datos->input('fecha_entrega');
        $proyecto->encargado_id=$datos->input('encargado');
        $proyecto->estado=$datos->input('estado');
        $proyecto->save();
         flash('El recurso se actualizo !')->success();

        return redirect('/consultarProyectos');
    }


     public function pdf(){
      $proyectos=Proyecto::all();
      $vista=view('proyectosPDF',compact('proyectos'));
      $pdf=\App::make('dompdf.wrapper');
      $pdf->loadHTML($vista);
      $pdf->setpaper('letter');
        return $pdf->stream('ListadoProyectos.pdf');
    }

  public function asignarRecurso($id){
      $proyecto=Proyecto::find($id);
      $lista=DB::table('proyectorecursos')
      ->join('recursos','recursos.id', "=", 'proyectorecursos.id_recursos')
      ->where ('proyectorecursos.id_proyecto', '=', $id)
      ->pluck('recursos.id');
  
   $recursosNoAsignados=DB::table('recursos')
   ->whereNotIn('recursos.id', $lista)
   ->select('recursos.nombre','recursos.id')
   ->get();

   $recursosAsignados=DB::table('recursos')
   ->whereIn('recursos.id',$lista)
   ->join('proyectorecursos','recursos.id', '=',
    'proyectorecursos.id_recursos')
    ->where('proyectorecursos.id_proyecto','=' ,$id)
   ->select('recursos.nombre','recursos.id')
   ->get();

   return view('asignarRecursos',compact('proyecto','recursosNoAsignados'
    , 'recursosAsignados'));
    }

    public function guardarAsignacion($id,Request $datos)
    {
      $nuevo=new proyectorecursos();
      $nuevo->id_recursos=$datos->input('recurso_id');
      $nuevo->id_proyecto=$id;
      $nuevo->save();
      flash('El recurso se agrego con exito al proyecto !')->success();

      return redirect('/asignarRecurso/'.$id);
    }

    public function eliminarAsignacion($idr,$idp)
    {
      DB::table('proyectorecursos')
      ->where('proyectorecursos.id_recursos', '=' , $idr)
      ->where('proyectorecursos.id_proyecto' ,'=' , $idp)
      ->delete();
       flash('El recurso se elimino del proyecto !')->warning();
      return redirect('/asignarRecurso/'.$idp);
    }

   //  public function recursopdf($id){
      
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
        
   //      return $pdf->stream('asignacionPDF.pdf');
   //  }
}















