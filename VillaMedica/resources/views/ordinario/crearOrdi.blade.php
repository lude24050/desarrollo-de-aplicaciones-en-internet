@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Cuota Ordinaria</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/cuota/creandoOrdi')}}">
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

    </div>
</div>
@endsection