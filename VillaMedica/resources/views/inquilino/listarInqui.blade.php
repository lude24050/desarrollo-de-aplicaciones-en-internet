@extends('inicio')

@section('content')
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Listado de Inquilinos</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'InquilinoController@listarInqui', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Dni</th>
							<th>Telefono</th>
							<th>Correo</th>
							<th>id_propietario</th>
							<th colspan="3">
								<a href="{{ url('/inquilino/crearInqui')}}" class="btn btn-success">Nuevo Propietario</a>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($inquilinos as $inqui)
							<tr>
								<td>{{ $inqui->id_pro }}</td>
								<td>{{ $inqui->nombres }}</td>
								<td>{{ $inqui->apellidos }}</td>
								<td>{{ $inqui->dni }}</td>
								<td>{{ $inqui->telefono }}</td>
								<td>{{ $inqui->correo}}</td>
								<td>{{ $inqui->id_pro }}</td>
								<td><a href="{{ url('/inquilino/mostrarInqui', $inqui->id_inqui) }}" class="btn btn-primary">Ver</a></td>
								<td><a href="{{ url('/inquilino/editarInqui', $inqui->id_inqui)}}" class="btn btn-warning">Editar</a></td>
								<td>
									<form action="{{ url('/inquilino/borrarInqui', $inqui->id_inqui) }}" method="POST">
										{{csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-danger">Borrar</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $inquilinos->render() !!}
			</div>

	</div>

@endsection