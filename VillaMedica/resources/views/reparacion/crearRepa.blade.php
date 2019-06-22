@extends('inicio')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Nueva Reparacion</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/reparacion/creandoRepa')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Lugar :</label>
                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control" name="lugar" value="{{ old('lugar') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha inicio :</label>
                            <div class="col-md-6">
                                <input id="fecha_inicio" type="text" class="form-control" name="fecha_inicio" value="2000/12/30{{ old('fecha_inicio') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha final :</label>
                            <div class="col-md-6">
                                <input id="fecha_final" type="text" class="form-control" name="fecha_final" value="2000/12/30{{ old('fecha_final') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ old('monto') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Motivo :</label>
                            <div class="col-md-6">
                                <input id="motivo" type="text" class="form-control" name="motivo" value="{{ old('motivo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Ides de cada Herramienta :</label>
                            <div class="col-md-6">
                                <input id="ids_inventario" type="text" class="form-control" name="ids_inventario" value="{{ old('ids_inventario') }}" required>
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
    </div>
</div>
@endsection