@extends('inicio')

@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2>Mostrando Empleado</h2>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
					<table class="table table-condensed table-striped">
						<tbody>
							
						<tr>
							<td><h4>ID Departamento :</h4></td>  				
							<td><h4>{{$departamento->id_depa}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>Nombres :</h4></td>  				
							<td ><h4>{{$departamento->num_depa}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>Apellidos :</h4></td>  				
							<td ><h4>{{$departamento->tipo}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>DNI :</h4></td>  				
							<td ><h4>{{$departamento->num_cochera}}</h4></td>				
						</tr>

						<tr>
							<td><h4>Telefono :</h4></td>  				
							<td ><h4>{{$departamento->num_estaciona}}</h4></td>				
						</tr>

						<tr>
							<td><h4>Correo :</h4></td>  				
							<td ><h4>{{$departamento->num_torre}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>Tipo trabajador :</h4></td>  				
							<td ><h4>{{$departamento->id_pro}}</h4></td>				
						</tr>

					</tbody>
			</table>
	</div>

@endsection