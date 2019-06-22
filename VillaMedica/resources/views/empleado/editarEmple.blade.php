@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <h4>Editar Empleado</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/empleado/editandoEmple')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_emple" value="{{$empleado->id_emple}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombres :</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ $empleado->nombres }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Apellidos :</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ $empleado->apellidos }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Dni :</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ $empleado->dni }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefono :</label>
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $empleado->telefono }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Correo :</label>
                            <div class="col-md-6">
                                <input id="correo" type="text" class="form-control" name="correo" value="{{ $empleado->correo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo Trabajador :</label>
                            <div class="col-md-6">
                                <input id="tipo_trabajador" type="text" class="form-control" name="tipo_trabajador" value="{{ $empleado->tipo_trabajador }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Subsidio :</label>
                            <div class="col-md-3">
                                <select class="form-control" name="subsidio">
                                    @if($empleado->subsidio == "si")
                                        <option value="{{$empleado->subsidio}}">Si</option>
                                        <option value="no">No</option>
                                    @else
                                        <option value="{{$empleado->subsidio}}">No</option>
                                        <option value="si">Si</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Domicilio :</label>
                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control" name="domicilio" value="{{ $empleado->domicilio }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Seccion de Trabajo :</label>
                            <div class="col-md-6">
                                <input id="seccion_trabajo" type="text" class="form-control" name="seccion_trabajo" value="{{ $empleado->seccion_trabajo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID usuario :</label>
                            <div class="col-md-6">
                                <input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ $empleado->id_usuario }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div align="center">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de usuarios</h3>            
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombres</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usu)
                                <tr>
                                    <td>{{$usu->id}}</td>
                                    <td>{{$usu->name}}</td>
                                    <td>{{$usu->email}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection