@extends('inicio')

@section('content')
	<div class="container">

	<div class="table-responsive">
		<h2 align="center">Lista de Usuarios</h2>

		<!-- Aplicando Laravel Collection -->
		{!! Form::open(['action' => 'UsuarioController@listarUsu', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th>Nombre</th>
						<th>Email</th>
						<!-- <th>Contraseña</th> -->
						<th>Palabra Clave</th>
						<th>Tipo</th>
						<th>Estado</th>
						<th colspan="3">
							<a href="{{ url('/usuario/crearUsu')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
						<tr>
							<td>{{ $usuario->id }}</td>
							<td>{{ $usuario->name }}</td>
							<td>{{ $usuario->email }}</td>
							<!-- <td>{{ $usuario->password }}</td> -->
							<td>{{ $usuario->palabra_clave}}</td>
							<td>{{ $usuario->tipo }}</td>
							<td>{{ $usuario->estado }}</td>
							<td><a href="{{ url('/usuario/mostrarUsu', $usuario->id) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/usuario/editarUsu', $usuario->id)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/usuario/borrarUsu', $usuario->id) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $usuarios->render() !!}
		</div>
	</div>

		

@endsection