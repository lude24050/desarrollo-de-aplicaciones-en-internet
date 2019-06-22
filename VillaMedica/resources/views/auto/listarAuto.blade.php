@extends('inicio')

@section('content')

	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Lista de Autos</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'AutoController@listarAuto', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th>Marca</th>
						<th>Año</th>
						<th>Modelo</th>
						<th>Placa</th>
						<th>Color</th>
						<th>Id Propietario</th>
						<th colspan="3">
							<a href="{{ url('/auto/crearAuto')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($autos as $auto)
						<tr>
							<td>{{ $auto->id_auto }}</td>
							<td>{{ $auto->marca }}</td>
							<td>{{ $auto->ano }}</td>
							<td>{{ $auto->modelo }}</td>
							<td>{{ $auto->placa }}</td>
							<td>{{ $auto->color }}</td>
							<td>{{ $auto->id_pro }}</td>
							<td><a href="{{ url('/auto/mostrarAuto', $auto->id_auto) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/auto/editarAuto', $auto->id_auto)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/auto/borrarAuto', $auto->id_auto) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $autos->render() !!}
		</div>
	</div>

@endsection