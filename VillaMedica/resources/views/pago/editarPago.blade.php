@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Pago</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/pago/editandoPago')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_pago" value="{{ $pago->id_pago }}">

                        <div class="form-group">    
                            <label for="name" class="col-md-4 control-label">Numero Recibo :</label>
                            <div class="col-md-6">
                                <input id="num_recibo" type="text" class="form-control" name="num_recibo" value="{{ $pago->num_recibo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ $pago->monto }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha de Pago :</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ $pago->fecha }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Reportes :</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" name="reportes">{{$pago->reportes}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">ID empleado :</label>
                            <div class="col-md-6">
                                <input id="id_emple" type="text" class="form-control" name="id_emple" value="{{ $pago->id_emple }}" required>
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