@extends('inicio')

@section('content')

	<div class="container">
		<div align="center">
			<h2>Mostrando Inquilino</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
							
					<tr>
						<td><h4>ID Ordinario :</h4></td>  				
						<td><h4>{{$ordinario->id_ordi}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Numero de Recibo :</h4></td>  				
						<td><h4>{{$ordinario->num_recibe}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Fecha :</h4></td>  				
						<td><h4>{{$ordinario->fecha}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Estado :</h4></td>  				
						<td><h4>{{$ordinario->estado}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Fecha Pago :</h4></td>  				
						<td><h4>{{$ordinario->fecha_pago}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Monto de pago :</h4></td>  				
						<td><h4>{{$ordinario->monto_pago}}</h4></td>				
					</tr>
                    <tr>
						<td><h4>Id departamento :</h4></td>  				
						<td><h4>{{$ordinario->id_depa}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>

@endsection