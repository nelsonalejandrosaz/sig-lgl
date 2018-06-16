@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Resumen de cuentas por cobrar por cliente
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
   Resumen de cuentas por cobrar por cliente
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
                    <form role="form" method="post" action="{{route('tactico.5')}}">
                        @csrf
                        <div class="box-body">
							{{-- cuentas por cobrar por cliente--}}
                             <div class="form-group">
                                <label for="Proveedor">Cliente</label>
                               <select class="form-control">
                                        <option value="Cliente1">Cliente 1</option>
                                        <option value="Cliente2">Cliente 2</option>
                                        <option value="Cliente3">Cliente 3</option>
                                        <option value="Cliente4">Cliente 4</option>
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


