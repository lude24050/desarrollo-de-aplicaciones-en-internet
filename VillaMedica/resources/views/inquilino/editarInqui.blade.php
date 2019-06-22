@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-sm-8 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Inquilino</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/inquilino/editandoInqui')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_inqui" value="{{$inquilino->id_inqui}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombres :</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" class="form-control" name="nombres" value="{{ $inquilino->nombres }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Apellidos :</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ $inquilino->apellidos }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Dni :</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{ $inquilino->dni }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefono :</label>
                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $inquilino->telefono }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Correo :</label>
                            <div class="col-md-6">
                                <input id="correo" type="text" class="form-control" name="correo" value="{{ $inquilino->correo }}" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Id de Propietario</label>
                            <div class="col-md-6">
                                <input id="id_pro" type="text" class="form-control" name="id_pro" value="{{ $inquilino->id_pro }}" required>
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

        <!-- Para mostrar la miniventana de propietarios -->
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