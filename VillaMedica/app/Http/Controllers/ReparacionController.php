<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Reparacion;	
use Illuminate\Support\Facades\View;

class ReparacionController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		
	}

	public function listarRepa(Request $request){
		$reparaciones = Reparacion::orderBy('id_repa')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('reparacion.listarRepa', compact('reparaciones'));
	}

	public function crearRepa(){
		return view('reparacion.crearRepa');
	}

	public function creandoRepa(Request $request){

		$this->validate($request, [
	        'lugar' => 'required|min:2',
	        'fecha_inicio' => 'required|min:2',
	        'fecha_final' => 'required|min:2',
	        'monto' => 'required|min:2',
            'motivo' => 'required|min:2',
            'ids_inventario' => 'required|min:1'
	    ]);

		$reparacion = new Reparacion;
		$reparacion->lugar = $request->lugar;
		$reparacion->fecha_inicio = $request->fecha_inicio;
		$reparacion->fecha_final = $request->fecha_final;
		$reparacion->monto = $request->monto;
        $reparacion->motivo = $request->motivo;
		$reparacion->ids_inventario = $request->ids_inventario;
		$reparacion->borrado = "";
		$reparacion->save();
		
		return redirect('/reparacion/listarRepa');
	}

	public function mostrarRepa($id){
		$reparacion = Reparacion::find($id);
		return view('reparacion.mostrarRepa', compact('reparacion'));
	}

	public function editarRepa($id){
		$reparacion = Reparacion::find($id);
		return view('reparacion.editarRepa', ['reparacion'=>$reparacion]);
	}

	public function editandoRepa(Request $request){

		$this->validate($request, [
	        'lugar' => 'required|min:2',
	        'fecha_inicio' => 'required|min:2',
	        'fecha_final' => 'required|min:2',
	        'monto' => 'required|min:2',
            'motivo' => 'required|min:2',
            'ids_inventario' => 'required|min:1'
	    ]);
        
		$reparacion = Reparacion::find($request->get('id_repa'));
		$reparacion->lugar = $request->get('lugar');
		$reparacion->fecha_inicio = $request->get('fecha_inicio');
		$reparacion->fecha_final = $request->get('fecha_final');
		$reparacion->monto = $request->get('monto');
        $reparacion->motivo = $request->get('motivo');
        $reparacion->ids_inventario = $request->get('ids_inventario');
		$reparacion->save();
		return redirect('/reparacion/listarRepa');
	}

    public function borrarRepa($id){
		$reparacion = Reparacion::find($id);
		// $reparacion->delete();
		$hoy = date("Y-m-d H:i:s");

		$reparacion->borrado = $hoy;
		$reparacion->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}