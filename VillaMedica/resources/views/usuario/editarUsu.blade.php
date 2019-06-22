@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Usuario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/usuario/editandoUsu')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{$usuario->id}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre :</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Email :</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $usuario->email }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Contraseña :</label>
                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="password" value="{{ $usuario->password }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Palabra Clave :</label>
                            <div class="col-md-6">
                                <input id="palabra_clave" type="text" class="form-control" name="palabra_clave" value="{{ $usuario->palabra_clave }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo :</label>
                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ $usuario->tipo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Estado :</label>
                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control" name="estado" value="{{ $usuario->estado }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
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