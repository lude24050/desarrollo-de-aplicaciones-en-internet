<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Departamento;
use VillaMedica\Propietario;
use Illuminate\Support\Facades\View;

class DepartamentoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listarDepa(Request $request){
		$busqueda = $request->get('busqueda');
		$departamentos = \DB::table('departamentos')
		->join('propietarios', 'departamentos.id_pro', '=', 'propietarios.id_pro')
		->where('departamentos.num_depa',"LIKE","%".$busqueda."%")
		->where('departamentos.borrado','=','')
		->paginate();

		// $departamentos = Departamento::orderBy('id_depa')
		// ->busca($request->get('busqueda'))
		// ->paginate();
		return view('departamento.listarDepa', compact('departamentos'));
	}

	public function crearDepa(){
		$propietarios = Propietario::orderby('id_pro')->paginate();
		return view('departamento.crearDepa',['propietarios'=>$propietarios]);
	}

	public function creandoDepa(Request $request){

		$this->validate($request, [
	        'num_depa' => 'required|min:',
	        'tipo' => 'required|min:2',
	        'num_cochera' => 'required|min:1',
	        'num_estaciona' => 'required|min:1',
			'num_torre' => 'required|min:1',
			'id_pro' => 'required|min:1'
	    ]);

		$departamento = new Departamento;
		$departamento->num_depa = $request->num_depa;
		$departamento->tipo = $request->tipo;
		$departamento->num_cochera = $request->num_cochera;
		$departamento->num_estaciona = $request->num_estaciona;
		$departamento->num_torre = $request->num_torre;
		$departamento->id_pro = $request->id_pro;
		$departamento->borrado = "";
		$departamento->save();
		
		return redirect('/departamento/listarDepa');
	}

	public function mostrarDepa($id){
		$departamento = Departamento::find($id);
		return view('departamento.mostrarDepa', compact('departamento'));
	}

	public function editarDepa($id){
		$propietarios = Propietario::orderby('id_pro')->paginate();
		$departamento = Departamento::find($id);
		return view('departamento.editarDepa', ['departamento'=>$departamento],['propietarios'=>$propietarios]);
	}

	public function editandoDepa(Request $request){

		$this->validate($request, [
	        'num_depa' => 'required|min:',
	        'tipo' => 'required|min:2',
	        'num_cochera' => 'required|min:1',
	        'num_estaciona' => 'required|min:1',
			'num_torre' => 'required|min:1',
			'id_pro' => 'required|min:1'
	    ]);
        
		$departamento = Departamento::find($request->get('id_depa'));
		$departamento->num_depa = $request->get('num_depa');
		$departamento->tipo = $request->get('tipo');
		$departamento->num_cochera = $request->get('num_cochera');
		$departamento->num_estaciona = $request->get('num_estaciona');
		$departamento->num_torre = $request->get('num_torre');
		$departamento->id_pro = $request->get('id_pro');
		$departamento->save();

		return redirect('/departamento/listarDepa');
	}

    public function borrarDepa($id){
		$departamento = Departamento::find($id);
		// $departamento->delete();
		$hoy = date("Y-m-d H:i:s");
		 
		$departamento->borrado = $hoy;
		$departamento->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}