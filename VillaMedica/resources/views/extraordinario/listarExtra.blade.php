@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Cuotas Extraordinarias</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'CuotaController@listarExtra', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th>ID repa</th>
						<th colspan="3">
							<!-- <a href="{{ url('/cuota/crearExtra')}}" class="btn btn-success">Registrar</a> -->
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($extraordinarios as $extra)
						<tr>
							<td>{{ $extra->id_extra }}</td>
							<td>{{ $extra->num_recibo }}</td>
							<td>S/.{{ $extra->monto }}</td>
							<td>{{ $extra->fecha }}</td>
							<td>{{ $extra->estado }}</td>
							<td>{{ $extra->fecha_pago}}</td>
							<td>S/.{{ $extra->monto_pago}}</td>
							<td>{{ $extra->num_depa }}</td>
							<td>{{ $extra->num_torre}}</td>
							<td>{{ $extra->id_repa }}</td>
							<td><a href="{{ url('/cuota/mostrarExtra', $extra->id_extra) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/cuota/editarExtra', $extra->id_extra)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/cuota/borrarExtra', $extra->id_extra) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $extraordinarios->render() !!}
		</div>

	</div>

@endsection