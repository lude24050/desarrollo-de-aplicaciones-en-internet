<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Propietario;
use VillaMedica\Auto;	
use Illuminate\Support\Facades\View;

class AutoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		
	}

	public function listarAuto(Request $request){

		$autos = Auto::orderBy('id_auto')
		->where('borrado','=','')
		->busca($request->get('busqueda'))
		->paginate();  
		return view('auto.listarAuto', compact('autos'));
	}

	public function crearAuto(){
		$propietarios = Propietario::orderBy('id_pro')->paginate();
		return view('auto.crearAuto',['propietarios'=>$propietarios]);
	}

	public function creandoAuto(Request $request){

		$this->validate($request, [
	        'marca' => 'required|min:2',
	        'ano' => 'required|min:2',
	        'modelo' => 'required|min:2',
	        'placa' => 'required|min:2',
            'color' => 'required|min:2',
            'id_pro' => 'required|min:1'
	    ]);

		$auto = new Auto;
		$auto->marca = $request->marca;
		$auto->ano = $request->ano;
		$auto->modelo = $request->modelo;
		$auto->placa = $request->placa;
        $auto->color = $request->color;
		$auto->id_pro = $request->id_pro;
		$auto->borrado = "";
		$auto->save();
		
		return redirect('/auto/listarAuto');
	}

	public function mostrarAuto($id){
		$auto = Auto::find($id);
		return view('auto.mostrarAuto', compact('auto'));
	}

	public function editarAuto($id){
		$propietarios = Propietario::orderBy('id_pro')->paginate();
		$auto = Auto::find($id);
		return view('auto.editarAuto', ['auto'=>$auto],['propietarios'=>$propietarios]);
	}

	public function editandoAuto(Request $request){

		$this->validate($request, [
	        'marca' => 'required|min:2',
	        'ano' => 'required|min:2',
	        'modelo' => 'required|min:2',
	        'placa' => 'required|min:2',
            'color' => 'required|min:2',
            'id_pro' => 'required|min:1'
	    ]);
        
		$auto = Auto::find($request->get('id_auto'));
		$auto->marca = $request->get('marca');
		$auto->ano = $request->get('ano');
		$auto->modelo = $request->get('modelo');
		$auto->placa = $request->get('placa');
        $auto->color = $request->get('color');
        $auto->id_pro = $request->get('id_pro');
		$auto->save();
		return redirect('/auto/listarAuto');
	}

    public function borrarAuto($id){
		$auto = Auto::find($id);
		// $auto->delete();
		$hoy = date("Y-m-d H:i:s");

		$auto->borrado = $hoy;
		$auto->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}