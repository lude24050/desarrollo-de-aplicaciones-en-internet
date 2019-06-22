<?php

namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = Auth::user()->tipo;
        $estado = Auth::user()->estado;
        $id = Auth::user()->id;
        $borrado = Auth::user()->borrado;

        if($tipo == "empleado" && $estado == "activo" && $borrado == ""){
            return view('index');

        }if($tipo == "administrador" && $estado == "activo" && $borrado == ""){
            return view('inicio');

        }if($tipo == "propietario" && $estado == "activo" && $borrado == ""){

            return view('index');
        }else{
            return view('sinCuenta');
        }
    }
}
