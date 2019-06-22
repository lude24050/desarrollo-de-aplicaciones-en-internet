<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Ingreso;
use Illuminate\Support\Facades\View;

class IngresoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarIngre(Request $request){

		$ingresos = Ingreso::orderBy('id_ingre')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('ingresos.listarIngre', compact('ingresos'));
	}

	public function crearIngre(){
		return view('ingresos.crearIngre');
	}

	public function creandoIngre(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'detalles' => 'required|min:5',
	        'monto' => 'required|min:1',
	        'fecha' => 'required|min:3'
	    ]);

		$ingreso = new Ingreso;
		$ingreso->num_recibo = $request->num_recibo;
		$ingreso->nombre = $request->nombre;
		$ingreso->detalles = $request->detalles;
		$ingreso->monto = $request->monto;
		$ingreso->fecha = $request->fecha;
		$ingreso->borrado = "";
		$ingreso->save();
		
		return redirect('/ingreso/listarIngre');
	}

	public function mostrarIngre($id){
		$ingreso = Ingreso::find($id);
		return view('ingresos.mostrarIngre', compact('ingreso'));
	}

	public function editarIngre($id){
		$ingreso = Ingreso::find($id);
		return view('ingresos.editarIngre', ['ingreso'=>$ingreso]);
	}

	public function editandoIngre(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'detalles' => 'required|min:5',
	        'monto' => 'required|min:1',
	        'fecha' => 'required|min:3'
	    ]);
        
		$ingreso = Ingreso::find($request->get('id_ingre'));
		$ingreso->num_recibo = $request->get('num_recibo');
		$ingreso->nombre = $request->get('nombre');
		$ingreso->detalles = $request->get('detalles');
		$ingreso->monto = $request->get('monto');
		$ingreso->fecha = $request->get('fecha');
		$ingreso->save();
		return redirect('/ingreso/listarIngre');
	}

    public function borrarIngre($id){
		$ingreso = Ingreso::find($id);
		// $ingreso->delete();
		$hoy = date("Y-m-d H:i:s");

		$ingreso->borrado = $hoy;
		$ingreso->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}