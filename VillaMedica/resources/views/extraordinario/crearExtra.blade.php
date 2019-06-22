@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cuota Extraordinaria</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/cuota/creandoExtra')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero del Recibo :</label>
                            <div class="col-md-6">
                                <input id="num_recibo" type="text" class="form-control" name="num_recibo" value="{{ old('num_recibo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto Inicial :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ old('monto') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha Inicial :</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="2000/12/30{{ old('fecha') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Estado :</label>
                            <div class="col-md-4">
                                <select class="form-control" name="estado">
                                    <option value="debe">Debe</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha de Pago :</label>

                            <div class="col-md-6">
                                <input id="fecha_pago" type="text" class="form-control" name="fecha_pago" value="2000/12/30{{ old('fecha_pago') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto de Pago :</label>
                            <div class="col-md-6">
                                <input id="monto_pago" type="text" class="form-control" name="monto_pago" value="{{ old('monto_pago') }}" required>
                            </div>
                        </div>

                        <input type="hidden" name="id_depa" value="{{$id}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Reparacion :</label>
                            <div class="col-md-6">
                                <input id="id_repa" type="text" class="form-control" name="id_repa" value="{{ old('id_repa') }}" required>
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

        <!-- Miniventa para Listar Departamentos -->
        <div class="col-md-4">
            <div class="box box-success" >
                <div class="box-header">
                    <h3 class="box-title">Lista de Reparacion</h3>            
                </div>

                <div class="box-body chat" id="chat-box">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">ID</th>
                                    <th>Motivo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reparaciones as $repa)
                                    <tr>
                                        <td>{{$repa->id_repa}}</td>
                                        <td>{{$repa->motivo}}</td>
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