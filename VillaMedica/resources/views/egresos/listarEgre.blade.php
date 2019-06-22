@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Lista de Egresos</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'EgresoController@listarEgre', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th>Nombre</th>
						<th>Monto</th>
						<th>Fecha</th>
						<th colspan="3">
							<a href="{{ url('/egreso/crearEgre')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($egresos as $egreso)
						<tr>
							<td>{{ $egreso->id_egre }}</td>
							<td>{{ $egreso->num_recibo }}</td>
							<td>{{ $egreso->nombre }}</td>
							<td>S/.{{ $egreso->monto }}</td>
							<td>{{ $egreso->fecha}}</td>
							<td><a href="{{ url('/egreso/mostrarEgre', $egreso->id_egre) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/egreso/editarEgre', $egreso->id_egre)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/egreso/borrarEgre', $egreso->id_egre) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $egresos->render() !!}
		</div>
	</div>

@endsection