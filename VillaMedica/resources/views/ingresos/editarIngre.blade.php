@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <h4>Editar Ingreso</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/ingreso/editandoIngre')}}">
                        {{ csrf_field() }}

                        <input type="hidden" name="id_ingre" value="{{ $ingreso->id_ingre }}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Numero Recibo :</label>
                            <div class="col-md-6">
                                <input id="num_recibo" type="text" class="form-control" name="num_recibo" value="{{ $ingreso->num_recibo }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre :</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $ingreso->nombre }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Detalles de egreso :</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" name="detalles" required>{{ $ingreso->detalles }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Monto :</label>
                            <div class="col-md-6">
                                <input id="monto" type="text" class="form-control" name="monto" value="{{ $ingreso->monto }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Fecha de Ingreso :</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ $ingreso->fecha }}" required>
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
    </div>
</div>
@endsection