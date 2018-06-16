@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Resumen de ventas por categoria
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Resumen de ventas por categoria
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
                    <form role="form" method="post" action="{{route('tactico.1')}}">
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
                                <label for="Proveedor">Categoria de producto</label>
                               <select class="form-control">
                                        <option value="proveedor1">Categoría 1</option>
                                        <option value="proveedor2">Categoría 2</option>
                                        <option value="proveedor3">Categoría 3</option>
                                        <option value="proveedor4">Categoría 4</option>
                                </select>
                                
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-file-text-o"></i> Generar</button>
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

