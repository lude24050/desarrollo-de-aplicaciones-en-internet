<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Egreso;
use Illuminate\Support\Facades\View;

class EgresoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarEgre(Request $request){

		$egresos = Egreso::orderBy('id_egre')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('egresos.listarEgre', compact('egresos'));
	}

	public function crearEgre(){
		return view('egresos.crearEgre');
	}

	public function creandoEgre(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'detalles' => 'required|min:5',
	        'monto' => 'required|min:1',
	        'fecha' => 'required|min:3'
	    ]);

		$egreso = new Egreso;
		$egreso->num_recibo = $request->num_recibo;
		$egreso->nombre = $request->nombre;
		$egreso->detalles = $request->detalles;
		$egreso->monto = $request->monto;
		$egreso->fecha = $request->fecha;
		$egreso->borrado = "";
		$egreso->save();
		
		return redirect('/egreso/listarEgre');
	}

	public function mostrarEgre($id){
		$egreso = Egreso::find($id);
		return view('egresos.mostrarEgre', compact('egreso'));
	}

	public function editarEgre($id){
		$egreso = Egreso::find($id);
		return view('egresos.editarEgre', ['egreso'=>$egreso]);
	}

	public function editandoEgre(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'detalles' => 'required|min:5',
	        'monto' => 'required|min:1',
	        'fecha' => 'required|min:3'
	    ]);
        
		$egreso = Egreso::find($request->get('id_egre'));
		$egreso->num_recibo = $request->get('num_recibo');
		$egreso->nombre = $request->get('nombre');
		$egreso->detalles = $request->get('detalles');
		$egreso->monto = $request->get('monto');
		$egreso->fecha = $request->get('fecha');
		$egreso->save();
		return redirect('/egreso/listarEgre');
	}

    public function borrarEgre($id){
		$egreso = Egreso::find($id);
		// $egreso->delete();
		$hoy = date("Y-m-d H:i:s");
		
		$egreso->borrado = $hoy;
		$egreso->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}