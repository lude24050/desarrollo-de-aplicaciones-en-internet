@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Nuevo Departamento</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/departamento/creandoDepa')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero del Departamento :</label>
                            <div class="col-md-6">
                                <input id="num_depa" type="text" class="form-control" name="num_depa" value="{{ old('num_depa') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo :</label>
                            <div class="col-md-4">
                                <select class="form-control" name="tipo">
                                    <option value="simple">Simple</option>
                                    <option value="duplex">Duplex</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numeros de Cochera :</label>
                            <div class="col-md-6">
                                <input id="num_cochera" type="text" class="form-control" name="num_cochera" value="{{ old('num_cochera') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numeros de Estacionamiento :</label>
                            <div class="col-md-6">
                                <input id="num_estaciona" type="text" class="form-control" name="num_estaciona" value="{{ old('num_estaciona') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nro Torre :</label>
                            <div class="col-md-4">
                                <select class="form-control" name="num_torre">
                                    <option value="1">Nro 1</option>
                                    <option value="2">Nro 2</option>
                                    <option value="3">Nro 3</option>
                                    <option value="4">Nro 4</option>
                                    <option value="5">Nro 5</option>
                                    <option value="6">Nro 6</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID propietario :</label>
                            <div class="col-md-6">
                                <input id="id_pro" type="text" class="form-control" name="id_pro" value="{{ old('id_pro') }}" required>
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

        <div class="col-md-4">
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