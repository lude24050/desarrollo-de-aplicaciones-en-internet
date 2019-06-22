@extends('inicio')

@section('content')
	<div class="container">
		<div class="table-responsive">

		<h2 align="center">Lista de Pagos</h2>
		<!-- Aplicando Laravel Collection -->
		{!! Form::open(['action' => 'PagoController@listarPago', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
					<th>Numero Recibo</th>
					<th>Monto</th>
					<th>Fecha</th>
					<th>Reportes</th>
                    <th>ID Empleado</th>
					<th colspan="3">
						<a href="{{ url('/pago/crearPago')}}" class="btn btn-success">Registrar</a>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pagos as $pago)
					<tr>
						<td>{{ $pago->id_pago }}</td>
						<td>{{ $pago->num_recibo }}</td>
						<td>{{ $pago->monto }}</td>
						<td>{{ $pago->fecha}}</td>
						<td>{{ $pago->reportes }}</td>
						<td>{{ $pago->id_emple }}</td>
						<td><a href="{{ url('/pago/mostrarPago', $pago->id_pago) }}" class="btn btn-primary">Ver</a></td>
						<td><a href="{{ url('/pago/editarPago', $pago->id_pago)}}" class="btn btn-warning">Editar</a></td>
						<td>
							<form action="{{ url('/pago/borrarPago', $pago->id_pago) }}" method="POST">
								{{csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $pagos->render() !!}

		</div>
	</div>

@endsection