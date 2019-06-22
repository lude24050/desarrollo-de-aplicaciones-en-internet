@extends('inicio')

@section('content')
	<div class="container">
		<div align="center">
			<h2>Mostrando Usuario</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
						
					<tr>
						<td><h4>ID Usuario :</h4></td>  				
						<td><h4>{{$usuario->id}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Nombre :</h4></td>  				
						<td ><h4>{{$usuario->name}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Email :</h4></td>  				
						<td ><h4>{{$usuario->email}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Contraseña :</h4></td>  				
						<td ><h4>{{$usuario->password}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Palabra Clave :</h4></td>  				
						<td ><h4>{{$usuario->palabra_clave}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Tipo :</h4></td>  				
						<td ><h4>{{$usuario->tipo}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Estado :</h4></td>  				
						<td ><h4>{{$usuario->estado}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>
	
@endsection