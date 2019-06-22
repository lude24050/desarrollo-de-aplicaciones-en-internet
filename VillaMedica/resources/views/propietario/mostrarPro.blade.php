@extends('inicio')

@section('content')

	<div class="container">
		<div align="center">
			<h2>Mostrando Propietario</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
							
					<tr>
						<td><h4>ID Propietario :</h4></td>  				
						<td><h4>{{$propietario->id_pro}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Nombres :</h4></td>  				
						<td><h4>{{$propietario->nombres}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Apellidos :</h4></td>  				
						<td><h4>{{$propietario->apellidos}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Dni :</h4></td>  				
						<td><h4>{{$propietario->dni}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Telefono :</h4></td>  				
						<td><h4>{{$propietario->telefono}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Numero Mascotas :</h4></td>  				
						<td><h4>{{$propietario->num_mascotas}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Numero de Familiares :</h4></td>  				
						<td><h4>{{$propietario->num_familiares}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Nombre Carpeta :</h4></td>  				
						<td><h4>{{$propietario->nombre_carpeta}}</h4></td>				
					</tr>
					<tr>
						<td><h4>ID Usuario :</h4></td>  				
						<td><h4>{{$propietario->id_usuario}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>

@endsection