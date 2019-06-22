<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Propietario;
use VillaMedica\Inquilino;
use Illuminate\Support\Facades\View;

class InquilinoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarInqui(Request $request){
		$inquilinos = Inquilino::orderBy('id_inqui')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('inquilino.listarInqui', compact('inquilinos'));
	}

	public function crearInqui(){
		$inquilinos = Propietario::orderBy('id_pro')->paginate();
		return view('inquilino.crearInqui',['propietarios'=>$inquilinos]);
	}

	public function creandoInqui(Request $request){

		$this->validate($request, [
	        'nombres' => 'required|min:3',
	        'apellidos' => 'required|min:3',
	        'dni' => 'required|min:3',
	        'telefono' => 'required|min:5',
	        'correo' => 'required|min:1',
	        'id_pro' => 'required|min:1'
	    ]);

		$inquilino = new Inquilino;
		$inquilino->nombres = $request->nombres;
		$inquilino->apellidos = $request->apellidos;
		$inquilino->dni = $request->dni;
		$inquilino->telefono = $request->telefono;
		$inquilino->correo = $request->correo;
		$inquilino->id_pro = $request->id_pro;
		$inquilino->borrado = "";
		$inquilino->save();
		
		return redirect('/inquilino/listarInqui');
	}

	public function editarInqui($id){
		$inquilino = Inquilino::find($id);
		$inquilinos = Propietario::orderby('id_pro')->paginate();
		return view('inquilino.editarInqui', ['inquilino'=>$inquilino],['propietarios'=>$inquilinos]);
	}

	public function editandoInqui(Request $request){
		$inquilino = Inquilino::find($request->get('id_inqui'));
		$inquilino->nombres = $request->get('nombres');
		$inquilino->apellidos = $request->get('apellidos');
		$inquilino->dni = $request->get('dni');
		$inquilino->telefono = $request->get('telefono');
		$inquilino->correo = $request->get('correo');
		$inquilino->id_pro = $request->get('id_pro');
		$inquilino->save();
		return redirect('/inquilino/listarInqui');
    }
    
    public function mostrarInqui($id){
		$inquilino = Inquilino::find($id);
		return view('inquilino.mostrarInqui', compact('inquilino'));
	}

	public function borrarInqui($id){
		$inquilino = Inquilino::find($id);
		// $inquilino->delete();
		$hoy = date("Y-m-d H:i:s");

		$inquilino->borrado = $hoy;
		$inquilino->save();
		return back()->with('alerta','El producto fue Eliminado');
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}