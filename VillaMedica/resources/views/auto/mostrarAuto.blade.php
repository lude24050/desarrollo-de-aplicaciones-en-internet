@extends('inicio')

@section('content')
	
	<div class="container">
		<div align="center">
			<h2>Mostrando Auto</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
						
					<tr>
						<td><h4>ID auto :</h4></td>  				
						<td><h4>{{$auto->id_auto}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Marca :</h4></td>  				
						<td ><h4>{{$auto->marca}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Año :</h4></td>  				
						<td ><h4>{{$auto->ano}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Modelo :</h4></td>  				
						<td ><h4>{{$auto->modelo}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Placa :</h4></td>  				
						<td ><h4>{{$auto->placa}}</h4></td>				
					</tr>
					<tr>
						<td><h4>Color :</h4></td>  				
						<td ><h4>{{$auto->color}}</h4></td>				
					</tr>
					<tr>
						<td><h4>ID propietario :</h4></td>  				
						<td ><h4>{{$auto->id_pro}}</h4></td>				
					</tr>

				</tbody>
			</table>
		</div>

	</div>

@endsection