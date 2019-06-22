@extends('inicio')

@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2>Mostrando Empleado</h2>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
					<table class="table table-condensed table-striped">
						<tbody>
							
						<tr>
							<td><h4>ID Empleado :</h4></td>  				
							<td><h4>{{$empleado->id_emple}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>Nombres :</h4></td>  				
							<td ><h4>{{$empleado->nombres}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>Apellidos :</h4></td>  				
							<td ><h4>{{$empleado->apellidos}}</h4></td>				
						</tr>
					
						<tr>
							<td><h4>DNI :</h4></td>  				
							<td ><h4>{{$empleado->dni}}</h4></td>				
						</tr>

						<tr>
							<td><h4>Telefono :</h4></td>  				
							<td ><h4>{{$empleado->telefono}}</h4></td>				
						</tr>

						<tr>
							<td><h4>Correo :</h4></td>  				
							<td ><h4>{{$empleado->correo}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>Tipo trabajador :</h4></td>  				
							<td ><h4>{{$empleado->tipo_trabajador}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>Subsidio :</h4></td>  				
							<td ><h4>{{$empleado->subsidio}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>Domicilio :</h4></td>  				
							<td ><h4>{{$empleado->domicilio}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>Seccion Trabajo :</h4></td>  				
							<td ><h4>{{$empleado->seccion_trabajo}}</h4></td>				
						</tr>

                        <tr>
							<td><h4>ID Usuario :</h4></td>  				
							<td ><h4>{{$empleado->id_usuario}}</h4></td>				
						</tr>

					</tbody>
			</table>
	</div>

@endsection