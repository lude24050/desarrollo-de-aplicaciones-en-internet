@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Registrar empleado</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/empleado/creandoEmple')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombres :</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Apellidos :</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">DNI :</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefono :</label>
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Correo Electronico :</label>
                            <div class="col-md-6">
                                <input id="correo" type="text" class="form-control" name="correo" value="{{ old('correo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo de Trabajador :</label>
                            <div class="col-md-6">
                                <input id="tipo_trabajador" type="text" class="form-control" name="tipo_trabajador" value="{{ old('tipo_trabajador') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Subsidio :</label>
                            <div class="col-md-3">
                                <select class="form-control" name="subsidio">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Domicilio :</label>
                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control" name="domicilio" value="{{ old('domicilio') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Seccion de Trabajo :</label>
                            <div class="col-md-6">
                                <input id="seccion_trabajo" type="text" class="form-control" name="seccion_trabajo" value="{{ old('seccion_trabajo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID usuario :</label>
                            <div class="col-md-6">
                                <input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ old('id_usuario') }}" required>
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

        <div class="col-xs-6 col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de usuarios</h3>            
                </div>

                <div class="box-body chat" id="chat-box">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nombres</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $usu)
                                    <tr>
                                        <td>{{$usu->id}}</td>
                                        <td>{{$usu->name}}</td>
                                        <td>{{$usu->tipo}}</td>
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