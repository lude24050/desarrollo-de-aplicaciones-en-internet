@extends('inicio')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">
                    <h4>Registrar Nueva Herramienta o Equipo</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{url('/inventario/creandoInve')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Tipo :</label>
                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ old('tipo') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre :</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Cantidad de instrumentos :</label>
                            <div class="col-md-6">
                                <input id="cantidad" type="text" class="form-control" name="cantidad" value="{{ old('cantidad') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div align="center">
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