<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Pago;
use VillaMedica\Empleado;	
use Illuminate\Support\Facades\View;

class PagoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		
	}

	public function listarPago(Request $request){
		$pagos = Pago::orderBy('id_pago')
		->busca($request->get('busqueda'))
		->where('borrado','=','')
		->paginate();  
		return view('pago.listarPago', compact('pagos'));
	}

	public function crearPago(){
		$empleados = Empleado::orderBy('id_emple')->paginate();
		return view('pago.crearPago',['empleados'=>$empleados]);
	}

	public function creandoPago(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:1',
	        'monto' => 'required|min:2',
	        'fecha' => 'required|min:2',
	        'reportes' => 'required|min:2',
            'id_emple' => 'required|min:1'
	    ]);

		$pago = new Pago;
		$pago->num_recibo = $request->num_recibo;
		$pago->monto = $request->monto;
		$pago->fecha = $request->fecha;
		$pago->reportes = $request->reportes;
		$pago->id_emple = $request->id_emple;
		$pago->borrado = "";
		$pago->save();
		
		return redirect('/pago/listarPago');
	}

	public function mostrarPago($id){
		$pago = Pago::find($id);
		return view('pago.mostrarPago', compact('pago'));
	}

	public function editarPago($id){
		$pago = Pago::find($id);
		return view('pago.editarPago', ['pago'=>$pago]);
	}

	public function editandoPago(Request $request){

		$this->validate($request, [
	        'num_recibo' => 'required|min:2',
	        'monto' => 'required|min:2',
	        'fecha' => 'required|min:2',
	        'reportes' => 'required|min:2',
            'id_emple' => 'required|min:2'
	    ]);
        
		$pago = Pago::find($request->get('id_pago'));
		$pago->num_recibo = $request->get('num_recibo');
		$pago->monto = $request->get('monto');
		$pago->fecha = $request->get('fecha');
		$pago->reportes = $request->get('reportes');
        $pago->id_emple = $request->get('id_emple');
		$pago->save();
		return redirect('/pago/listarPago');
	}

    public function borrarPago($id){
		$pago = Pago::find($id);
		// $pago->delete();
		$hoy = date("Y-m-d H:i:s");

		$pago->borrado = $hoy;
		$pago->save();
		return back()->with('alerta','El producto fue Eliminado');
	}
    
	public function missingMethod($parameters=array()){
		abort(404);
	}

}