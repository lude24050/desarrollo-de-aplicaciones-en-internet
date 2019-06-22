@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Inquilino</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/inquilino/creandoInqui')}}">
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
                            <label for="name" class="col-md-4 control-label">Dni :</label>
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
                            <label for="name" class="col-md-4 control-label">Correo :</label>
                            <div class="col-md-6">
                                <input id="correo" type="text" class="form-control" name="correo" value="{{ old('correo') }}" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Id Propietario :</label>
                            <div class="col-md-6">
                                <input id="id_pro" type="text" class="form-control" name="id_pro" value="{{ old('id_pro') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div> 
        </div>

        <!-- Para mostrar la miniventana de usuarios -->
        <div class="col-sm-4 -col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de Propietarios</h3>            
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
                                @foreach($propietarios as $pro)
                                    <tr>
                                        <td>{{$pro->id_pro}}</td>
                                        <td>{{$pro->nombres}}</td>
                                        <td>{{$pro->apellidos}}</td>
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