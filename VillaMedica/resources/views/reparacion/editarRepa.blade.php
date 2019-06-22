@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar Reparacion</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/reparacion/editandoRepa')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_repa" value="{{ $reparacion->id_repa }}">

                        <div class="form-group">    
                            <label for="name" class="col-md-4 control-label">Lugar :</label>
                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control" name="lugar" value="{{ $reparacion->lugar }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha inicio :</label>
                            <div class="col-md-6">
                                <input id="fecha_inicio" type="text" class="form-control" name="fecha_inicio" value="{{ $reparacion->fecha_inicio }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha final :</label>
                            <div class="col-md-6">
                                <input id="fecha_final" type="text" class="form-control" name="fecha_final" value="{{ $reparacion->fecha_final }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ $reparacion->monto }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Motivo :</label>
                            <div class="col-md-6">
                                <input id="motivo" type="text" class="form-control" name="motivo" value="{{ $reparacion->motivo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Ides de Herramientas :</label>
                            <div class="col-md-6">
                                <input id="ids_inventario" type="text" class="form-control" name="ids_inventario" value="{{ $reparacion->ids_inventario }}" required>
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