@extends('inicio')

@section('content')

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2>Mostrando Pago</h2>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <table class="table table-condensed table-striped">
            <tbody>	
                <tr>
                    <td><h4>ID pago :</h4></td>  				
                    <td><h4>{{$pago->id_pago}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Numero Recibo :</h4></td>  				
                    <td ><h4>{{$pago->num_recibo}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Monto :</h4></td>  				
                    <td ><h4>{{$pago->monto}}</h4></td>				
                </tr>
            
                <tr>
                    <td><h4>Fecha :</h4></td>  				
                    <td ><h4>{{$pago->fecha}}</h4></td>				
                </tr>

                <tr>
                    <td><h4>Reportes :</h4></td>  				
                    <td ><h4>{{$pago->reportes}}</h4></td>				
                </tr>

                <tr>
                    <td><h4>Id empleado :</h4></td>  				
                    <td ><h4>{{$pago->id_emple}}</h4></td>				
                </tr>
            </tbody>
        </table>
	</div>
@endsection