@extends('inicio')

@section('content')
	
	<div class="container">
		<div align="center">
			<h2>Mostrando Ingresos</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
					
					<tr>
						<td><h4>ID Egreso :</h4></td>  				
						<td><h4>{{$ingreso->id_ingre}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Numero Recibo :</h4></td>  				
						<td ><h4>{{$ingreso->num_recibo}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Nombre :</h4></td>  				
						<td ><h4>{{$ingreso->nombre}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Detalles :</h4></td>  				
						<td ><h4>{{$ingreso->detalles}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Monto :</h4></td>  				
						<td ><h4>{{$ingreso->monto}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Fecha del Egreso :</h4></td>  				
						<td ><h4>{{$ingreso->fecha}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>
	</div>

@endsection