@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Ediar Departamento</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/departamento/editandoDepa')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_depa" value="{{$departamento->id_depa}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Departamento :</label>
                            <div class="col-md-6">
                                <input id="num_depa" type="text" class="form-control" name="num_depa" value="{{ $departamento->num_depa }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo :</label>
                            <div class="col-md-4">
                                @if($departamento->tipo == "simple")
                                    <select class="form-control" name="tipo">
                                        <option value="{{$departamento->tipo}}">Simple</option>
                                        <option value="duplex">Duplex</option>
                                    </select>
                                @else
                                    <select class="form-control" name="tipo">
                                        <option value="{{$departamento->tipo}}">Duplex</option>
                                        <option value="simple">Simple</option>
                                    </select>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero de cochera :</label>
                            <div class="col-md-6">
                                <input id="num_cochera" type="text" class="form-control" name="num_cochera" value="{{ $departamento->num_cochera }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero de Estacionamiento :</label>
                            <div class="col-md-6">
                                <input id="num_estaciona" type="text" class="form-control" name="num_estaciona" value="{{ $departamento->num_estaciona }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero de Torre :</label>
                            <div class="col-md-6">
                                <input id="num_torre" type="text" class="form-control" name="num_torre" value="{{ $departamento->num_torre }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID del Propietario :</label>
                            <div class="col-md-6">
                                <input id="id_pro" type="text" class="form-control" name="id_pro" value="{{ $departamento->id_pro }}" required>
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

        <div class="col-sm-6 col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de usuarios</h3>            
                </div>

                <div class="box-body chat" id="chat-box">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th >ID</th>
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