<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\User;
use VillaMedica\Propietario;
use VillaMedica\Empleado;	
use Illuminate\Support\Facades\View;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarUsu(Request $request){

		$usuarios = User::orderBy('id')
		->where('borrado','=',"")
		->busca($request->get('busqueda'))
		->paginate();  
		return view('usuario.listarUsu', compact('usuarios'));
	}

	public function crearUsu(){
		return view('usuario.crearUsu');
	}

	public function creandoUsu(Request $request){

		$this->validate($request, [
	        'name' => 'required|min:3',
	        'email' => 'required|min:5',
	        'password' => 'required|min:5',
	        'palabra_clave' => 'required|min:1',
            'tipo' => 'required|min:3',
            'estado' => 'required|min:3'
	    ]);

		$usuario = new User;
		$usuario->name = $request->name;
		$usuario->email = $request->email;
		$usuario->password = bcrypt($request->password);
		$usuario->palabra_clave = $request->palabra_clave;
        $usuario->tipo = $request->tipo;
		$usuario->estado = $request->estado;
		$usuario->borrado = "";
		$usuario->save();
		
		return redirect('/usuario/listarUsu');
	}

	public function mostrarUsu($id){
		$usuario = User::find($id);
		return view('usuario.mostrarUsu', compact('usuario'));
	}

	public function editarUsu($id){
		$usuario = User::find($id);
		return view('usuario.editarUsu', ['usuario'=>$usuario]);
	}

	public function editandoUsu(Request $request){

		$this->validate($request, [
	        'name' => 'required|min:3',
	        'email' => 'required|min:5',
	        'password' => 'required|min:5',
	        'palabra_clave' => 'required|min:1',
            'tipo' => 'required|min:3',
            'estado' => 'required|min:3'
	    ]);
        
		$usuario = User::find($request->get('id'));
		$usuario->name = $request->get('name');
		$usuario->email = $request->get('email');
		$usuario->password = bcrypt($request->get('password'));
		$usuario->palabra_clave = $request->get('palabra_clave');
        $usuario->tipo = $request->get('tipo');
		$usuario->estado = $request->get('estado');
		$usuario->save();
		return redirect('/usuario/listarUsu');
	}

    public function borrarUsu($id){
		// $usuario = User::find($id);
		// $usuario->delete();
		$hoy = date("Y-m-d H:i:s");

		$usuario = User::find($id);
		$usuario->borrado = $hoy;
		$usuario->save();

		// $propietario = Propietario::where('id_usuario','=',$id);
		// $propietario 

		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}