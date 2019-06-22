@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Cuotas Ordinarias</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'CuotaController@listarOrdi', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
				<div class="form-group">
					{!! Form::text('busqueda', null, ['class' => 'form-control', 'placeholder' => 'Nro Departamento']) !!}
				</div>
				<button type="text" class="btn btn-default">Buscar</button>
			{!! Form::close() !!}
			<!-- Aplicando Laravel Collection -->

			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th width="20px">ID</th>
						<th>Nro Recibo</th>
						<th>Monto Inicial</th>
						<th>Fecha Inicial</th>
						<th>Estado</th>
						<th>Fecha Pago</th>
						<th>Monto Pago</th>
						<th>Nro Depa</th>
						<th>Nro Torre</th>
						<th colspan="3">
							<!-- <a href="{{ url('/cuota/crearOrdi')}}" class="btn btn-success">Registrar</a> -->
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ordinarios as $ordinario)
						<tr>
							<td>{{ $ordinario->id_ordi }}</td>
							<td>{{ $ordinario->num_recibo }}</td>
							<td>S/.{{ $ordinario->monto }}</td>
							<td>{{ $ordinario->fecha }}</td>
							<td>{{ $ordinario->estado }}</td>
							<td>{{ $ordinario->fecha_pago}}</td>
							<td>S/.{{ $ordinario->monto_pago}}</td>
							<td>{{ $ordinario->num_depa }}</td>
							<td>{{ $ordinario->num_torre}}</td>
							<td><a href="{{ url('/cuota/mostrarOrdi', $ordinario->id_ordi) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/cuota/editarOrdi', $ordinario->id_ordi)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/cuota/borrarOrdi', $ordinario->id_ordi) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $ordinarios->render() !!}

		</div>
	</div>

@endsection