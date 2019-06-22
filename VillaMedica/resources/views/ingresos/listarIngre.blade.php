@extends('inicio')

@section('content')
	
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Lista de Ingresos</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'IngresoController@listarIngre', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
							<a href="{{ url('/ingreso/crearIngre')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ingresos as $ingreso)
						<tr>
							<td>{{ $ingreso->id_ingre }}</td>
							<td>{{ $ingreso->num_recibo }}</td>
							<td>{{ $ingreso->nombre }}</td>
							<td>S/.{{ $ingreso->monto }}</td>
							<td>{{ $ingreso->fecha}}</td>
							<td><a href="{{ url('/ingreso/mostrarIngre', $ingreso->id_ingre) }}" class="btn btn-primary">Ver</a></td>
							<td><a href="{{ url('/ingreso/editarIngre', $ingreso->id_ingre)}}" class="btn btn-warning">Editar</a></td>
							<td>
								<form action="{{ url('/ingreso/borrarIngre', $ingreso->id_ingre) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $ingresos->render() !!}
		</div>
	</div>

@endsection