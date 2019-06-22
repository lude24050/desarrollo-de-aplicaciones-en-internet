<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Extraordinario;
use VillaMedica\Ordinario;
use VillaMedica\Departamento;
use Illuminate\Support\Facades\View;
use VillaMedica\Reparacion;

class CuotaController extends Controller {

	//DEUDORES PARA LA PAGINA DE INICIO
	public function deudores(){
		$extraordinarios = Extraordinario::orderBy('id_extra')
		->join('departamentos','extraordinarios.id_depa','=','departamentos.id_depa')
		->join('propietarios','departamentos.id_pro','=','propietarios.id_pro')
		->where('estado','=','debe')
		->paginate();

		$ordinarios = Ordinario::orderBy('id_ordi')
		->join('departamentos','ordinarios.id_depa','=','departamentos.id_depa')
		->join('propietarios','departamentos.id_pro','=','propietarios.id_pro')
		->where('estado','=','debe')
		->paginate();

		return view('deudores.listarDeudores',['extraordinarios'=>$extraordinarios],['ordinarios'=>$ordinarios]);
	}

	public function __construct()
	{
		// $this->middleware('auth');
		$this->middleware('auth')->except('deudores');
	}

	public function listarOrdi(Request $request){

		$busqueda = $request->get('busqueda');

		if(trim($busqueda)){
			
			$ordinarios = \DB::table('ordinarios')
			->join('departamentos','ordinarios.id_depa','=','departamentos.id_depa')
			// ->select('ordinarios.*','departamentos.num_depa','departamentos.num_torre')
			// ->where(\DB::raw("CONCAT(num_recibo,' ',fecha,' ',estado)"),"LIKE","%$busqueda%")
			->where('ordinarios.borrado','=','')
			->where('departamentos.num_depa',"LIKE","%".$busqueda."%")
			->paginate();

		}else{
			$ordinarios = \DB::table('ordinarios')
			->join('departamentos','ordinarios.id_depa','=','departamentos.id_depa')
			->select('ordinarios.*','departamentos.num_depa','departamentos.num_torre')
			->where('ordinarios.borrado','=','')
			->paginate();
		}
			
		//Consultas con scopes creado en el Modelo Ordinario
		// $ordinarios = Ordinario::orderBy('id_ordi')
		// ->busca($request->get('busqueda'))
		// ->paginate();
		
		return view('ordinario.listarOrdi', compact('ordinarios'));
	}

	public function crearOrdi($id){
		//Esto es para mostrar tabla de reparaciones en la vista de Regitrar cuota
		$departamentos = Departamento::orderBy('id_depa')->paginate();
		//$depa = Departamento::find($id);
		return view('ordinario.crearOrdi',['departamentos'=>$departamentos],['id'=>$id]);
	}

	public function creandoOrdi(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'monto' => 'required|min:2',
	        'fecha' => 'required|min:2',
	        'estado' => 'required|min:3',
	        'fecha_pago' => 'required|min:2',
	        'monto_pago' => 'required|min:1'
	    ]);

		$ordinario = new Ordinario;
		$ordinario->num_recibo = $request->num_recibo;
		$ordinario->monto = $request->monto;
		$ordinario->fecha = $request->fecha;
		$ordinario->estado = $request->estado;
		$ordinario->fecha_pago = $request->fecha_pago;
		$ordinario->monto_pago = $request->monto_pago;
		$ordinario->id_depa = $request->id_depa;
		$ordinario->borrado = "";
		$ordinario->save();
		
		return redirect('/cuota/listarOrdi');
	}

	public function editarOrdi($id){
		$departamentos = Departamento::orderBy('id_depa')->paginate();
		$ordinario = Ordinario::find($id);

		return view('ordinario.editarOrdi', ['ordinario'=>$ordinario],['departamentos'=>$departamentos]);
	}

	public function editandoOrdi(Request $request){

		$ordinario = Ordinario::find($request->get('id_ordi'));
		$ordinario->num_recibo = $request->get('nombres');
		$propietario->monto = $request->get('monto');
		$propietario->fecha = $request->get('fecha');
		$propietario->estado = $request->get('estado');
		$propietario->fecha_pago = $request->get('fecha_pago');
		$propietario->monto_pago = $request->get('monto_pago');
		$propietario->id_depa = $request->get('id_depa');
		$propietario->save();
		return redirect('/cuota/ListarOrdi');
	}

	public function mostrarOrdi($id){
		$ordinario = Ordinario::find($id);
		return view('ordinario.mostrarOrdi', compact('ordinario'));
	}

	public function borrarOrdi($id){
		$ordinario = Ordinario::find($id);
		// $ordinario->delete();
		$hoy = date("Y-m-d H:i:s");

		$ordinario->borrado = $hoy;
		$ordinario->save();
		return back()->with('alerta','El producto fue Eliminado');
	}

	////////////////////////////////////////Cuota Extraordinaria//////////////////////////////////////////

	public function listarExtra(Request $request){

		$busqueda = $request->get('busqueda');
		if(trim($busqueda)){
			
			$extraordinarios = \DB::table('extraordinarios')
			->join('departamentos','extraordinarios.id_depa','=','departamentos.id_depa')
			// ->select('ordinarios.*','departamentos.num_depa','departamentos.num_torre')
			// ->where(\DB::raw("CONCAT(num_recibo,' ',fecha,' ',estado)"),"LIKE","%$busqueda%")
			->where('departamentos.num_depa',"LIKE","%".$busqueda."%")
			->where('extraordinarios.borrado','=','')
			->paginate();

		}else{
			$extraordinarios = \DB::table('extraordinarios')
			->join('departamentos','extraordinarios.id_depa','=','departamentos.id_depa')
			->select('extraordinarios.*','departamentos.num_depa','departamentos.num_torre')
			->where('extraordinarios.borrado','=','')
			->paginate();

		}

		// $extraordinarios = Extraordinario::orderBy('id_extra')
		// ->busca($request->get('busqueda'))
		// ->paginate();  
		return view('extraordinario.listarExtra', compact('extraordinarios'));
	}

	public function crearExtra($id){
		$reparaciones = Reparacion::orderBy('id_repa')->paginate();
		return view('extraordinario.crearExtra',['reparaciones'=>$reparaciones],['id'=>$id]);
	}

	public function creandoExtra(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'monto' => 'required|min:2',
	        'fecha' => 'required|min:2',
	        'estado' => 'required|min:3',
	        'fecha_pago' => 'required|min:2',
	        'monto_pago' => 'required|min:1',
			'id_depa' => 'required|min:1',
			'id_repa' => 'required|min:1'
	    ]);

		$extraordinario = new Extraordinario;
		$extraordinario->num_recibo = $request->num_recibo;
		$extraordinario->monto = $request->monto;
		$extraordinario->fecha = $request->fecha;
		$extraordinario->estado = $request->estado;
		$extraordinario->fecha_pago = $request->fecha_pago;
		$extraordinario->monto_pago = $request->monto_pago;
		$extraordinario->id_depa = $request->id_depa;
		$extraordinario->id_repa = $request->id_repa;
		$extraordinario->borrado = "";
		$extraordinario->save();
		
		return redirect('/cuota/listarExtra');
	}

	public function editarExtra($id){
		$extraordinario = Extraordinario::find($id);
		$departamentos = Departamento::orderBy('id_depa')->paginate();
		return view('extraordinario.editarExtra',['extraordinario'=>$extraordinario],['departamentos'=>$departamentos]);
	}

	public function editandoExtra(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'monto' => 'required|min:2',
	        'fecha' => 'required|min:2',
	        'estado' => 'required|min:3',
	        'fecha_pago' => 'required|min:2',
	        'monto_pago' => 'required|min:1',
			'id_depa' => 'required|min:1',
			'id_repa' => 'required|min:1'
	    ]);

		$extraordinario = Extraordinario::find($request->get('id_extra'));
		$extraordinario->num_recibo = $request->get('num_recibo');
		$extraordinario->monto = $request->get('monto');
		$extraordinario->fecha = $request->get('fecha');
		$extraordinario->estado = $request->get('estado');
		$extraordinario->fecha_pago = $request->get('fecha_pago');
		$extraordinario->monto_pago = $request->get('monto_pago');
		$extraordinario->id_depa = $request->get('id_depa');
		$extraordinario->id_repa = $request->get('id_repa');
		$extraordinario->save();
		return redirect('/cuota/listarExtra');
	}

	public function mostrarExtra($id){
		$extraordinario = Extraordinario::find($id);
		return view('extraordinario.mostrarExtra', compact('extraordinario'));
	}

	public function borrarExtra($id){
		$extraordinario = Extraordinario::find($id);
		// $extraordinario->delete();
		$hoy = date("Y-m-d H:i:s");

		$extraordinario->borrado=$hoy;
		$extraordinario->save();
		return back()->with('alerta','El producto fue Eliminado');
	}

	

	public function missingMethod($parameters=array()){
		abort(404);
	}

}