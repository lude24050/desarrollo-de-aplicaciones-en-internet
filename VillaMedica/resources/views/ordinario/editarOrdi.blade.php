@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-xs-6 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Cuota Ordinaria</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/cuota/editandoOrdi')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_ordi" value="{{$ordinario->id_ordi}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Recibo :</label>
                            <div class="col-md-6">
                                <input id="num_recibo" type="text" class="form-control" name="num_recibo" value="{{ $ordinario->num_recibo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto Inicial :</label>

                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ $ordinario->monto }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha Inicial :</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ $ordinario->fecha }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Estado de Paga :</label>
                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control" name="estado" value="{{ $ordinario->estado }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha de Pago :</label>
                            <div class="col-md-6">
                                <input id="fecha_pago" type="text" class="form-control" name="fecha_pago" value="{{ $ordinario->fecha_pago }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto de Pago :</label>
                            <div class="col-md-6">
                                <input id="monto_pago" type="text" class="form-control" name="monto_pago" value="{{ $ordinario->monto_pago }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID Departamento :</label>
                            <div class="col-md-6">
                                <input id="id_depa" type="text" class="form-control" name="id_depa" value="{{ $ordinario->id_depa }}" required>
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

        <!-- Miniventa para Listar Departamentos -->
        <div class="col-xs-6 col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de Departamentos</h3>            
                </div>

                <div class="box-body chat" id="chat-box">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Nro Departamento</th>
                                    <th>Nro Torre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($departamentos as $depa)
                                    <tr>
                                        <td>{{$depa->id_depa}}</td>
                                        <td>{{$depa->num_depa}}</td>
                                        <td>{{$depa->num_torre}}</td>
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