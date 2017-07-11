
   <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Encargado;
use App\Recurso;
use App\Puesto;
use DB;

class encargadosController extends Controller
{
     public function registrar(){
    	$encargado=Encargado::all();
    	return view('registrarEncargado', compact('encargaos'));
        flash('registro encargado correctamente !')->success();
}

public function guardar(Request $datos){
    	$encargado = new Recurso();

    	$encargado->nombre=$datos->input('nombre');
    	$encargado->correo=$datos->input('correo');
    	$encargado->save();
flash('registro correctamente !')->success();
    	return redirect('/consultarEncargado',compact('encargado'));
    }

    public function consultar(){
    	$encargado=Encargado::all();
 
 	return view('consultarEncargado', compact('encargados'));
    }

    public function eliminar($id){
    	$encargado=Recurso::find($id);
    	$encargado->delete();
flash('registro se ha eliminado correctamente !')->warning();
    	return redirect('/consultarEncargado');
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
















}
