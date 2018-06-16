@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Resumen de compras por Proveedor
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Resumen de compras por proveedor
@endsection

@section('contentheader_description')
    {{--Aqui va la descripcion de la vista OPCIONAL --}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Parámetros del informe</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('tactico.4')}}">
                        @csrf
                        <div class="box-body">
                            {{--Fecha de inicio--}}
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="Seleccione una fecha">
                            </div>
                            {{--Fecha de fin--}}
                            <div class="form-group">
                                <label for="fecha_fin">Fecha final</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" placeholder="Seleccione una fecha">
                            </div>
							{{--Proveedor--}}
                             <div class="form-group">
                                <label for="Proveedor">Proveedor</label>
                               <select class="form-control">
                                        <option value="proveedor1">proveedor 1</option>
                                        <option value="proveedor2">proveedor 2</option>
                                        <option value="proveedor3">proveedor 3</option>
                                        <option value="proveedor4">proveedor 4</option>
                                </select>
                                
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary pull-right">Generar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('JSExtra')
    {{--Aqui va JS adicional para la vista--}}
@endsection

