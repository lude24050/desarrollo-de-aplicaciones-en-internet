@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Lista de Herramietas</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'InventarioController@listarInve', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th>Tipo</th>
						<th>Nombre</th>
						<th>Cantidad</th>
						<th colspan="3">
							<a href="{{ url('/inventario/crearInve')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($inventarios as $inve)
						<tr>
							<td>{{ $inve->id_inve }}</td>
							<td>{{ $inve->tipo }}</td>
							<td>{{ $inve->nombre }}</td>
							<td>{{ $inve->cantidad }}</td>
							<td><a href="{{ url('/inventario/mostrarInve', $inve->id_inve) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/inventario/editarInve', $inve->id_inve)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/inventario/borrarInve', $inve->id_inve) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $inventarios->render() !!}
		</div>
	</div>

@endsection