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
            <div class="col-md-12">

                {{--Seccion de informe de Resumen de cuentas por cobrar por cliente--}}
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. -- Informe de cuentas por cobrar por
                                cliente
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                            <b>Generado por:</b> <br>
                            ################# <br>
                            <b>Fecha y hora de creacion:</b> <br>
                            ################# <br>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            <b>Cliente:</b> <br>
                            #################
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
                                        <th style="width: 20%;">Nº de documento</th>
                                        <th style="width: 20%;">Tipo de Documento</th>
                                        <th style="width: 15%;">fecha</th>
                                        <th style="width: 15%;">Saldo pendiente</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>####</td>
                                        <td><span class="label label-default">CCF</span></td>
                                        <td>##/##/####</td>
                                        <td>$ ###.##</td>

                                    </tr>
                                    <tr>
                                        <td>####</td>
                                        <td><span class="label label-default">CCF</span></td>
                                        <td>##/##/####</td>
                                        <td>$ ###.##</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="3"><b>MONTO TOTAL</b></td>
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
                            <button class="btn btn-lg btn-default" onclick="window.print();"><i class="fa fa-print"></i>
                                Imprimir
                            </button>
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


