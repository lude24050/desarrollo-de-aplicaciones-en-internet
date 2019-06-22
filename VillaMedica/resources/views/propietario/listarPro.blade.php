@extends('inicio')

@section('content')
	<div class="container">
	<div class="table-responsive">
		<h2 align="center">Listado de Propietarios</h2>

		<!-- Aplicando Laravel Collection -->
		{!! Form::open(['action' => 'PropietarioController@listarPro', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
			<div class="form-group">
				{!! Form::text('busqueda', null, ['class' => 'form-control', 'placeholder' => 'escribe ...']) !!}
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
							<!-- <th>Mascotas</th>
							<th>Familia</th> -->
							<th>Nombre Carpeta</th>
							<th>id_usuario</th>
							<th colspan="3">
								<a href="{{ url('/propietario/crearPro')}}" class="btn btn-success">Nuevo Propietario</a>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($propietarios as $pro)
							<tr>
								<td>{{ $pro->id_pro }}</td>
								<td>{{ $pro->nombres }}</td>
								<td>{{ $pro->apellidos }}</td>
								<td>{{ $pro->dni }}</td>
								<td>{{ $pro->telefono }}</td>
								<!-- <td>{{ $pro->num_mascotas}}</td>
								<td>{{ $pro->num_familiares}}</td> -->
								<td>{{ $pro->nombre_carpeta}}</td>
								<td>{{ $pro->id_usuario }}</td>
								<td><a href="{{ url('/propietario/mostrarPro', $pro->id_pro) }}" class="btn btn-primary">Ver</a></td>
								<td><a href="{{ url('/propietario/editarPro', $pro->id_pro)}}" class="btn btn-warning">Editar</a></td>
								<td>
									<form action="{{ url('/propietario/borrarPro', $pro->id_pro) }}" method="POST">
										{{csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger">Borrar</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $propietarios->render() !!}
			</div>

	</div>

@endsection