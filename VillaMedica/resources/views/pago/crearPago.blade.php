@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-xs-6 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar nuevo pago</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/pago/creandoPago')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero recibo :</label>
                            <div class="col-md-6">
                                <input id="num_recibo" type="text" class="form-control" name="num_recibo" value="{{ old('num_recibo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ old('monto') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha :</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="2000/12/30{{ old('fecha') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reportes :</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" name="reportes"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID Empleado :</label>

                            <div class="col-md-6">
                                <input id="id_emple" type="text" class="form-control" name="id_emple" value="{{ old('id_emple') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Miniventa para Listar Empleados -->
        <div class="col-xs-6 col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de Empleados</h3>            
                </div>

                <div class="box-body chat" id="chat-box">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($empleados as $emple)
                                    <tr>
                                        <td>{{$emple->id_emple}}</td>
                                        <td>{{$emple->nombres}}</td>
                                        <td>{{$emple->apellidos}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection