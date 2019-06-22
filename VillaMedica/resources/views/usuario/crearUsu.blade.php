@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 align="center">Registrar nuevo usuario</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/usuario/creandoUsu')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre del Usuario :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email de la Cuenta :</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}@villamedica.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Contraseña :</label>
                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="password" value="{{ old('password') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Palabra Clave :</label>
                            <div class="col-md-6">
                                <input id="palabra_clave" type="text" class="form-control" name="palabra_clave" value="{{ old('palabra_clave') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo :</label>
                            <div class="col-md-4">
                                <select class="form-control" name="tipo">
                                    <option value="administrador">Administrador</option>
                                    <option value="propietario">Propietario</option>
                                    <option value="empleado">Empleado</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Estado :</label>
                            <div class="col-md-4">
                                <select class="form-control" name="estado">
                                    <option value="activo">Activo</option>
                                    <option value="desactivado">Desactivado</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection