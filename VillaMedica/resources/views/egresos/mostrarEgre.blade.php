@extends('inicio')

@section('content')
	<div class="container">

		<div align="center">
			<h2>Mostrando Egreso</h2>
		</div>

		<table class="table table-condensed table-striped">
			<tbody>
				<tr>
					<td><h4>ID Egreso :</h4></td>  				
					<td><h4>{{$egreso->id_egre}}</h4></td>				
				</tr>
				<tr>
					<td><h4>Numero Recibo :</h4></td>  				
					<td ><h4>{{$egreso->num_recibo}}</h4></td>				
				</tr>
				<tr>
					<td><h4>Nombre :</h4></td>  				
					<td ><h4>{{$egreso->nombre}}</h4></td>				
				</tr>
				<tr>
					<td><h4>Detalles :</h4></td>  				
					<td ><h4>{{$egreso->detalles}}</h4></td>				
				</tr>
				<tr>
					<td><h4>Monto :</h4></td>  				
					<td ><h4>{{$egreso->monto}}</h4></td>				
				</tr>
				<tr>
					<td><h4>Fecha del Egreso :</h4></td>  				
					<td ><h4>{{$egreso->fecha}}</h4></td>				
				</tr>
			</tbody>
		</table>
				
	</div>

@endsection