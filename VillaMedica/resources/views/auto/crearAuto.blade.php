@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-sm-8 -col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <h4>Añadir auto</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/auto/creandoAuto')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Marca :</label>
                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca" value="{{ old('marca') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Año :</label>
                            <div class="col-md-6">
                                <input id="ano" type="text" class="form-control" name="ano" value="{{ old('ano') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Modelo :</label>
                            <div class="col-md-6">
                                <input id="modelo" type="text" class="form-control" name="modelo" value="{{ old('modelo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Placa :</label>
                            <div class="col-md-6">
                                <input id="placa" type="text" class="form-control" name="placa" value="{{ old('placa') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Color :</label>
                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control" name="color" value="{{ old('color') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID propietario :</label>
                            <div class="col-md-6">
                                <input id="id_pro" type="text" class="form-control" name="id_pro" value="{{ old('id_pro') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div align="center">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
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