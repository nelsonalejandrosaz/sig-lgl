@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Ventas por cliente
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Ventas por cliente
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
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. -- Informe de ventas por cliente
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                            <b>Generado por:</b> <br>
                            ################# <br>
                            <b>Fecha y hora de generación:</b> <br>
                            ################# <br>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            <b>Rango de fecha consultado:</b> <br>
                            ###### de #### hasta ##### de ####
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
                                        <th style="width: 25%;"># Documento</th>
                                        <th style="width: 25%;">Fecha</th>
                                        <th style="width: 25%;">Tipo documento</th>
                                        <th style="width: 25%;">Monto venta</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>####</td>
                                        <td>##/##/##</td>
                                        <td>Factura</td>
                                        <td>$ ####.##</td>
                                    </tr>
                                    <tr>
                                        <td>####</td>
                                        <td>##/##/##</td>
                                        <td>CCF</td>
                                        <td>$ ####.##</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="3"><b>TOTAL VENDIDO</b></td>
                                        <td><b>$ ####.##</b></td>
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
                            <a href="#" target="_blank" class="btn btn-lg btn-default"><i class="fa fa-print"></i> Imprimir</a>
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

