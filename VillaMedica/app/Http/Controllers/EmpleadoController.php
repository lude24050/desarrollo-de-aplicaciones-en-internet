<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Empleado;
use VillaMedica\User;
use Illuminate\Support\Facades\View;
use VillaMedica\Extraordinario;
//use Illuminate\Foundation\Auth\User;

class EmpleadoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarEmple(Request $request){

		$empleados = Empleado::orderBy('id_emple')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('empleado.listarEmple', compact('empleados'));
	}

	public function crearEmple(){
		$usuarios = User::orderBy('id')
		->where('tipo','=','empleado')
		->paginate();
		return view('empleado.crearEmple',['usuarios'=>$usuarios]);
	}

	public function creandoEmple(Request $request){

		$this->validate($request, [
	        'nombres' => 'required|min:2',
	        'apellidos' => 'required|min:2',
	        'dni' => 'required|min:5',
	        'telefono' => 'required|min:1',
			'correo' => 'required|min:3',
			'tipo_trabajador' => 'required|min:2',
			'subsidio' => 'required|min:1',
			'domicilio' => 'required|min:5',
			'seccion_trabajo' => 'required|min:3',
			'id_usuario' => 'required|min:1'
	    ]);

		$empleado = new Empleado;
		$empleado->nombres = $request->nombres;
		$empleado->apellidos = $request->apellidos;
		$empleado->dni = $request->dni;
		$empleado->telefono = $request->telefono;
		$empleado->correo = $request->correo;
		$empleado->tipo_trabajador = $request->tipo_trabajador;
		$empleado->subsidio = $request->subsidio;
		$empleado->domicilio = $request->domicilio;
		$empleado->seccion_trabajo = $request->seccion_trabajo;
		$empleado->id_usuario = $request->id_usuario;
		$empleado->borrado = "";
		$empleado->save();
		
		return redirect('/empleado/listarEmple');
	}

	public function mostrarEmple($id){
		$empleado = Empleado::find($id);
		return view('empleado.mostrarEmple', compact('empleado'));
	}

	public function editarEmple($id){
		$usuarios = User::orderBy('id')->paginate();
		$empleado = Empleado::find($id);
		return view('empleado.editarEmple', ['empleado'=>$empleado],['usuarios'=>$usuarios]);
	}

	public function editandoEmple(Request $request){

		$this->validate($request, [
	        'nombres' => 'required|min:2',
	        'apellidos' => 'required|min:2',
	        'dni' => 'required|min:3',
	        'telefono' => 'required|min:2',
			'correo' => 'required|min:3',
			'tipo_trabajador' => 'required|min:3',
			'subsidio' => 'required|min:2',
			'domicilio' => 'required|min:2',
			'seccion_trabajo' => 'required|min:3',
			'id_usuario' => 'required|min:1'
	    ]);
        
		$empleado = Empleado::find($request->get('id_emple'));
		$empleado->nombres = $request->get('nombres');
		$empleado->apellidos = $request->get('apellidos');
		$empleado->dni = $request->get('dni');
		$empleado->telefono = $request->get('telefono');
		$empleado->correo = $request->get('correo');
		$empleado->tipo_trabajador = $request->get('tipo_trabajador');
		$empleado->subsidio = $request->get('subsidio');
		$empleado->domicilio = $request->get('domicilio');
		$empleado->seccion_trabajo = $request->get('seccion_trabajo');
		$empleado->id_usuario = $request->get('id_usuario');
		$empleado->save();
		return redirect('/empleado/listarEmple');
	}

    public function borrarEmple($id){
		$empleado = Empleado::find($id);
		// $empleado->delete();
		$hoy = date("Y-m-d H:i:s");

		$empleado->borrado = $hoy;
		$empleado->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
	
	//Para la vista empleado
	public function empleado($id){

		// $empleado = Empleado::orderBy('id_emple')
		// ->join('')
		// ->where('id_usuario','=','2')
		// ->paginate();

		$empleado = Empleado::orderBy('id_emple')
		->join('users','empleados.id_usuario','=','users.id')
		->where('id_usuario','=',$id)
		->paginate();

		return view('vistaTrabajador.vistaTrabajador',['empleado'=>$empleado]);
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}