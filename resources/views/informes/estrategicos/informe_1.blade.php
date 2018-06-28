@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Resumen de cuentas por cobrar
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Resumen de cuentas por cobrar
@endsection

@section('contentheader_description')
    {{--Aqui va la descripcion de la vista OPCIONAL --}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                {{--Seccion de informe de cuentas por cobrar--}}
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. -- Informe de cuentas por cobrar
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                            <b>Generado por:</b> <br>
                            {{Auth::user()->name}} <br>
                            <b>Fecha y hora de generación:</b> <br>
                            {{\Carbon\Carbon::now()}} <br>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            <b>Fecha de corte:</b> <br>
                            Del {{ $fecha_inicio }} al {{ $fecha_final }}
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <table id="tblProductos" class="table table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th style="width: 10%;">Vendedor</th>
                                        <th style="width: 30%;">Cliente</th>
                                        <th style="width: 10%;">N° documento</th>
                                        <th style="width: 10%;">Tipo doc</th>
                                        <th style="width: 10%;">Fecha</th>
                                        <th style="width: 10%;">Valor doc</th>
                                        <th style="width: 10%;">Saldo pendiente</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ventas as $venta)
                                    <tr>
                                        <td>{{$venta->vendedor->name}}</td>
                                        <td>{{$venta->cliente->nombre}}</td>
                                        <td>{{$venta->numero}}</td>
                                        <td><span class="label label-default">{{$venta->tipo_documento->codigo}}</span></td>
                                        <td>{{$venta->fecha->format('d/m/Y')}}</td>
                                        <td>$ {{number_format($venta->venta_total_con_impuestos,2)}}</td>
                                        <td>$ {{number_format($venta->saldo,2)}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="6"><b>TOTAL SALDO PENDIENTE</b></td>
                                        <td><b>$ {{number_format($ventas->sum('saldo'),2)}}</b></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <button class="btn btn-lg btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>
                            <button type="button" class="btn btn-lg btn-success pull-right" style="margin-right: 5px;">
                                <i class="fa fa-file-excel-o"></i> Exportar a Excel
                            </button>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>
@endsection

@section('JSExtra')
    {{--Aqui va JS adicional para la vista--}}
@endsection

