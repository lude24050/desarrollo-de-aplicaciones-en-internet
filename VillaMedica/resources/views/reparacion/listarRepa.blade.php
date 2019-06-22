@extends('inicio')

@section('content')
	<div class="container">
		<div class="table-responsive">
		
		<h2 align="center">Lista de Reparaciones</h2>

		<!-- Aplicando Laravel Collection -->
		{!! Form::open(['action' => 'ReparacionController@listarRepa', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
					<th>Lugar</th>
					<th>Fecha inicio</th>
					<th>Fecha final</th>
					<th>Monto</th>
					<th>Motivo</th>
					<th>Ids Inventario</th>
					<th colspan="3">
						<a href="{{ url('/reparacion/crearRepa')}}" class="btn btn-success">Registrar</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($reparaciones as $reparacion)
					<tr>
						<td>{{ $reparacion->id_repa }}</td>
						<td>{{ $reparacion->lugar }}</td>
						<td>{{ $reparacion->fecha_inicio }}</td>
						<td>{{ $reparacion->fecha_final }}</td>
						<td>S/.{{ $reparacion->monto }}</td>
						<td>{{ $reparacion->motivo }}</td>
						<td>{{ $reparacion->ids_inventario }}</td>
						<td><a href="{{ url('/reparacion/mostrarRepa', $reparacion->id_repa) }}" class="btn btn-primary">Ver</a></td>
						<td><a href="{{ url('/reparacion/editarRepa', $reparacion->id_repa)}}" class="btn btn-warning">Editar</a></td>
						<td>
							<form action="{{ url('/reparacion/borrarRepa', $reparacion->id_repa) }}" method="POST">
								{{csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $reparaciones->render() !!}

		</div>
	</div>


@endsection