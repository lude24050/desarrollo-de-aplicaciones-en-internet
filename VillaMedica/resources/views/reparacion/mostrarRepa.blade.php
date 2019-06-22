@extends('inicio')

@section('content')

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2>Mostrando Reparacion</h2>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <table class="table table-condensed table-striped">
            <tbody>	
                <tr>
                    <td><h4>ID Reparacion :</h4></td>  				
                    <td><h4>{{$reparacion->id_repa}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Lugar :</h4></td>  				
                    <td ><h4>{{$reparacion->lugar}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Fecha de Inicio :</h4></td>  				
                    <td ><h4>{{$reparacion->fecha_inicio}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Fecha finalizacion :</h4></td>  				
                    <td ><h4>{{$reparacion->fecha_final}}</h4></td>				
                </tr>

                <tr>
                    <td><h4>Monto :</h4></td>  				
                    <td ><h4>S/.{{$reparacion->monto}}</h4></td>				
                </tr>

                <tr>
                    <td><h4>Motivo :</h4></td>  				
                    <td ><h4>{{$reparacion->motivo}}</h4></td>				
                </tr>

                <tr>
                    <td><h4>Ides de las Herramientas:</h4></td>  				
                    <td ><h4>{{$reparacion->ids_inventario}}</h4></td>				
                </tr>
            </tbody>
        </table>
	</div>
@endsection