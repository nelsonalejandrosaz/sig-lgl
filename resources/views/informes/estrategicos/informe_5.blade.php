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
            <div class="col-md-12">

                {{--Seccion de informe de cuentas por cobrar--}}
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. -- Informe comparativo de ventas entre dos meses
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
                            <b>Meses comparados:</b> <br>
                            ###### de ###### <br>
                            ###### de ######
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped">
                                <table id="tblProductos" class="table table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th colspan="2">###### de #####</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 60%;">Categoria</th>
                                        <th style="width: 40%;">Compra total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Categoria 1</td>
                                        <td>$ #####.##</td>
                                    </tr>
                                    <tr>
                                        <td>Categoria 2</td>
                                        <td>$ #####.##</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td><b>TOTAL COMPRAS</b></td>
                                        <td><b>$ ####.##</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </table>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 table-responsive">
                            <table class="table table-striped">
                                <table id="tblProductos" class="table table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th colspan="2">###### de #####</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 60%;">Categoria</th>
                                        <th style="width: 40%;">Compra total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Categoria 1</td>
                                        <td>$ #####.##</td>
                                    </tr>
                                    <tr>
                                        <td>Categoria 2</td>
                                        <td>$ #####.##</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td><b>TOTAL COMPRAS</b></td>
                                        <td><b>$ ####.##</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </table>
                        </div>

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

