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
						<td><h4>ID Inquilino :</h4></td>  				
						<td><h4>{{$inquilino->id_inqui}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Nombres :</h4></td>  				
						<td><h4>{{$inquilino->nombres}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Apellidos :</h4></td>  				
						<td><h4>{{$inquilino->apellidos}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Dni :</h4></td>  				
						<td><h4>{{$inquilino->dni}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Telefono :</h4></td>  				
						<td><h4>{{$inquilino->telefono}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Correo :</h4></td>  				
						<td><h4>{{$inquilino->correo}}</h4></td>				
					</tr>
					<tr>
						<td><h4>ID Propietario :</h4></td>  				
						<td><h4>{{$inquilino->id_pro}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>

@endsection