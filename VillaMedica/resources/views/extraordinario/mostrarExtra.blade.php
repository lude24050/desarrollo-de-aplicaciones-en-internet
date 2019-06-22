@extends('inicio')

@section('content')

	<div class="container">
		<div align="center">
			<h2>Mostrando Cuota Extraordinario</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
							
					<tr>
						<td><h4>ID Extraordinario :</h4></td>  				
						<td><h4>{{$extraordinario->id_extra}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Numero de Recibo :</h4></td>  				
						<td><h4>{{$extraordinario->num_recibe}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Fecha :</h4></td>  				
						<td><h4>{{$extraordinario->monto}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Estado :</h4></td>  				
						<td><h4>{{$extraordinario->fecha}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Fecha Pago :</h4></td>  				
						<td><h4>{{$extraordinario->estado}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Monto de pago :</h4></td>  				
						<td><h4>{{$extraordinario->monto_pago}}</h4></td>				
					</tr>
                    <tr>
						<td><h4>Fecha Pago :</h4></td>  				
						<td><h4>{{$extraordinario->fecha_pago}}</h4></td>				
					</tr>
                    <tr>
						<td><h4>Monto pago :</h4></td>  				
						<td><h4>{{$extraordinario->monto_pago}}</h4></td>				
					</tr>
					<tr>
						<td><h4>ID Departamento :</h4></td>  				
						<td><h4>{{$extraordinario->id_depa}}</h4></td>				
					</tr>
                    <tr>
						<td><h4>ID Reparacion :</h4></td>  				
						<td><h4>{{$extraordinario->id_repa}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>

@endsection