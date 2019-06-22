@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Lista de Empleados</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'EmpleadoController@listarEmple', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
				<div class="form-group">
					{!! Form::text('busqueda', null, ['class' => 'form-control', 'placeholder' => 'escriba ..']) !!}
				</div>
				<button type="text" class="btn btn-default">Buscar</button>
			{!! Form::close() !!}
			<!-- Aplicando Laravel Collection -->

			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th width="20px">ID</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Dni</th>
						<th>Telefono</th>
						<!-- <th>Correo</th> -->
						<th>Tipo</th>
						<!-- <th>Subsidio</th> -->
						<!-- <th>Domicilio</th> -->
						<th>Area Trabajo</th>
						<th>ID usuario</th>
						<th colspan="3">
							<a href="{{ url('/empleado/crearEmple')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($empleados as $empleado)
						<tr>
							<td>{{ $empleado->id_emple }}</td>
							<td>{{ $empleado->nombres }}</td>
							<td>{{ $empleado->apellidos }}</td>
							<td>{{ $empleado->dni }}</td>
							<td>{{ $empleado->telefono }}</td>
							<!-- <td>{{ $empleado->correo}}</td> -->
							<td>{{ $empleado->tipo_trabajador }}</td>
							<!-- <td>{{ $empleado->subsidio }}</td> -->
							<!-- <td>{{ $empleado->domicilio }}</td> -->
							<td>{{ $empleado->seccion_trabajo }}</td>
							<td>{{ $empleado->id_usuario }}</td>
							<td><a href="{{ url('/empleado/mostrarEmple', $empleado->id_emple) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/empleado/editarEmple', $empleado->id_emple)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/empleado/borrarEmple', $empleado->id_emple) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $empleados->render() !!}
		</div>
	</div>

@endsection