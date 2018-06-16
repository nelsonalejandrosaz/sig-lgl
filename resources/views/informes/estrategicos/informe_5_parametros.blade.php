@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Comparativos de ventas entre dos meses
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Comparativos de ventas entre dos meses
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
                    <form role="form" method="post" action="{{route('estrategico.5')}}">
                        @csrf
                        <div class="box-body">
                            <h4>Meses a comparar</h4>
                            <br>
                            {{--Mes 1--}}
                            <div class="form-group">
                                <label for="fecha">Mes y año 1</label>
                                <input type="month" class="form-control" id="fecha" name="fecha">
                            </div>
                            {{--Mes 2--}}
                            <div class="form-group">
                                <label for="fecha">Mes y año 2</label>
                                <input type="month" class="form-control" id="fecha" name="fecha">
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

