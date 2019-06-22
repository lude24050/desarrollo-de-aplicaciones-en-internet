@extends('inicio')

@section('content')
	<div class="container">
		<div class="table-responsive">
		
			<h2 align="center">Lista de Departamentos</h2>

			<!-- Aplicando Laravel Collection -->
			{!! Form::open(['action' => 'DepartamentoController@listarDepa', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
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
						<th width="80px">Nro Depa</th>
						<th width="80px">Tipo</th>
						<th width="80px">Cochera</th>
						<th width="80px">Estaciona</th>
						<th width="40px">Nro Torre</th>
						<th width="80px">Id Propietario</th>
						<th colspan="5">
							<a href="{{ url('/departamento/crearDepa')}}" class="btn btn-success">Registrar</a>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($departamentos as $departamento)
						<tr>
							<td>{{ $departamento->id_depa }}</td>
							<td>{{ $departamento->num_depa }}</td>
							<td>{{ $departamento->tipo }}</td>
							<td>{{ $departamento->num_cochera }}</td>
							<td>{{ $departamento->num_estaciona}}</td>
							<td>{{ $departamento->num_torre }}</td>
							<td>{{ $departamento->id_pro }}</td>
							<!-- <td>{{ $departamento->nombres}}</td> -->
							<td width="40px"><a href="{{ url('/departamento/mostrarDepa', $departamento->id_depa) }}" class="btn btn-primary">Ver</a></td>
							<td width="40px"><a href="{{ url('/departamento/editarDepa', $departamento->id_depa)}}" class="btn btn-warning">Editar</a></td>
							<td width="40px">
								<form action="{{ url('/departamento/borrarDepa', $departamento->id_depa) }}" method="POST">
									{{csrf_field() }}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-danger">Borrar</button>
								</form>
							</td>
							<td width="60px"><a href="{{ url('/cuota/crearOrdi', $departamento->id_depa) }}" class="btn btn-light">Pagar Cuota Ordi</a></td>
							<td><a href="{{ url('/cuota/crearExtra', $departamento->id_depa)}}" class="btn btn-light">Pagar Cuota Extra</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $departamentos->render() !!}

		</div>
	</div>

@endsection