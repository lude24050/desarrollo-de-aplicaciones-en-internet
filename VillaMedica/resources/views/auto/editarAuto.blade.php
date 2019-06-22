@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-sm-8 -col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <h4>Actualizar auto</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/auto/editandoAuto')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_auto" value="{{$auto->id_auto}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Marca :</label>
                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca" value="{{ $auto->marca }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Año :</label>
                            <div class="col-md-6">
                                <input id="ano" type="text" class="form-control" name="ano" value="{{ $auto->ano }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Modelo :</label>
                            <div class="col-md-6">
                                <input id="modelo" type="text" class="form-control" name="modelo" value="{{ $auto->modelo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Placa :</label>
                            <div class="col-md-6">
                                <input id="placa" type="text" class="form-control" name="placa" value="{{ $auto->placa }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Color :</label>
                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control" name="color" value="{{ $auto->color }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID propietario :</label>
                            <div class="col-md-6">
                                <input id="id_pro type="text" class="form-control" name="id_pro" value="{{ $auto->id_pro }}" required>
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

        <!-- Para mostrar la miniventana de usuarios -->
        <div class="col-sm-4 -col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de Propietarios</h3>            
                </div>
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
@endsection