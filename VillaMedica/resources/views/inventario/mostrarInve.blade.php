@extends('inicio')

@section('content')
	
	<div class="container">
		<div align="center">
			<h2>Mostrando Herramienta o equipo</h2>
		</div>

		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<tbody>
					
					<tr>
						<td><h4>ID Inventario :</h4></td>  				
						<td><h4>{{$inventario->id_inve}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Tipo :</h4></td>  				
						<td ><h4>{{$inventario->tipo}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Nombre :</h4></td>  				
						<td ><h4>{{$inventario->nombre}}</h4></td>				
					</tr>					
					<tr>
						<td><h4>Cantidad :</h4></td>  				
						<td ><h4>{{$inventario->cantidad}}</h4></td>				
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>

@endsection