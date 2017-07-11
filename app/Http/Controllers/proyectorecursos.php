<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use App\Recurso;
use App\Puesto;
use App\proyectorecursos;
use DB;


class proyectorecursos extends Controller
{
    
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
}
