<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Inventario;
use Illuminate\Support\Facades\View;

class InventarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarInve(Request $request){

		$inventarios = Inventario::orderBy('id_inve')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('inventario.listarInve', compact('inventarios'));
	}

	public function crearInve(){
		return view('inventario.crearInve');
	}

	public function creandoInve(Request $request){

		$this->validate($request, [
	        'tipo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'cantidad' => 'required|min:1'
	    ]);

		$inventario = new Inventario;
		$inventario->tipo = $request->tipo;
		$inventario->nombre = $request->nombre;
		$inventario->cantidad = $request->cantidad;
		$inventario->borrado = "";
		$inventario->save();
		
		return redirect('/inventario/listarInve');
	}

	public function mostrarInve($id){
		$inventario = Inventario::find($id);
		return view('inventario.mostrarInve', compact('inventario'));
	}

	public function editarInve($id){
		$inventario = Inventario::find($id);
		return view('inventario.editarInve', ['inventario'=>$inventario]);
	}

	public function editandoInve(Request $request){

		$this->validate($request, [
	        'tipo' => 'required|min:2',
	        'nombre' => 'required|min:2',
	        'cantidad' => 'required|min:1'
	    ]);
        
		$inventario = Inventario::find($request->get('id_inve'));
		$inventario->tipo = $request->get('tipo');
		$inventario->nombre = $request->get('nombre');
		$inventario->cantidad = $request->get('cantidad');
		$inventario->save();
		return redirect('/inventario/listarInve');
	}

    public function borrarInve($id){
		$inventario = Inventario::find($id);
		// $inventario->delete();
		$hoy = date("Y-m-d H:i:s");

		$inventario->borrado = $hoy;
		$inventario->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}