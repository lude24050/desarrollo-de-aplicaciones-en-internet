<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Propietario;
use VillaMedica\User;
use VillaMedica\Extraordinario;
use Illuminate\Support\Facades\View;

class PropietarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarPro(Request $request){

		$propietarios = Propietario::orderBy('id_pro')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('propietario.listarPro', compact('propietarios'));
	}

	public function crearPro(){
		$usuarios = User::orderBy('id')
		->where('tipo','=','propietario')
		->paginate();
		return view('propietario.crearPro',['usuarios'=>$usuarios]);
	}

	public function creandoPro(Request $request){

		$this->validate($request, [
	        'nombres' => 'required|min:3',
	        'apellidos' => 'required|min:3',
	        'dni' => 'required|min:3',
	        'telefono' => 'required|min:3',
	        'num_mascotas' => 'required|min:1',
	        'num_familiares' => 'required|min:1',
	        'nombre_carpeta' => 'required|min:2',
	        'id_usuario' => 'required|min:1'
	    ]);

		$propietario = new Propietario;
		$propietario->nombres = $request->nombres;
		$propietario->apellidos = $request->apellidos;
		$propietario->dni = $request->dni;
		$propietario->telefono = $request->telefono;
		$propietario->num_mascotas = $request->num_mascotas;
		$propietario->num_familiares = $request->num_familiares;
		$propietario->nombre_carpeta = $request->nombre_carpeta;
		$propietario->id_usuario = $request->id_usuario;
		$propietario->borrado = "";
		$propietario->save();
		
		return redirect('/propietario/listarPro');
	}

	public function mostrarPro($id){
		$propietario = Propietario::find($id);
		return view('propietario.mostrarPro', compact('propietario'));
	}

	public function borrarPro($id){
		$propietario = Propietario::find($id);
		// $propietario->delete();
		$hoy = date("Y-m-d H:i:s");

		$propietario->borrado = $hoy;
		$propietario->save();
		return back()->with('alerta','El producto fue Eliminado');
	}

	public function editarPro($id){
		$propietario = Propietario::find($id);
		$usuarios = User::orderby('id')->paginate();
		return view('propietario.editarPro', ['propietario'=>$propietario],['usuarios'=>$usuarios]);
	}

	public function editandoPro(Request $request){
		$propietario = Propietario::find($request->get('id_pro'));
		$propietario->nombres = $request->get('nombres');
		$propietario->apellidos = $request->get('apellidos');
		$propietario->dni = $request->get('dni');
		$propietario->telefono = $request->get('telefono');
		$propietario->num_mascotas = $request->get('num_mascotas');
		$propietario->num_familiares = $request->get('num_familiares');
		$propietario->nombre_carpeta = $request->get('nombre_carpeta');
		$propietario->id_usuario = $request->get('id_usuario');
		$propietario->save();
		return redirect('/propietario/listarPro');
	}

	public function propietario($id){
		$propietario = Propietario::orderBy('id_pro')
		->join('users','propietarios.id_usuario','=','users.id')
		->where('id','=',$id)
		->paginate();
		
		
		$extraordinario = Extraordinario::orderBy('id_extra')
		->join('departamentos','extraordinarios.id_depa','=','departamentos.id_depa')
		->join('propietarios','departamentos.id_pro','=','propietarios.id_pro')
		->join('users','propietarios.id_usuario','=','users.id')
		// ->where('id_usuario','=',$id)
		->select('departamentos.*','propietarios.*','users.*')
		//->where('extraordinario.estado','=','debe')	
		->paginate();

		// dd($extraordinario);
		
		return view('vistaPropietario.vistaPropietario',['propietario'=>$propietario]);
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}