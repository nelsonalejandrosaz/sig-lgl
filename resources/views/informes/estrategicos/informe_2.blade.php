@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Producto mas vendidos en el mes ####
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Producto mas vendidos en el mes ####
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
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. -- Informe de productos mas vendidos en el mes #####
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
                            #################
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            <b>Mes y año:</b> <br>
                            ###### de #####
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
                                        <th style="width: 10%;">#</th>
                                        <th style="width: 40%;">Producto</th>
                                        <th style="width: 20%;">Categoría</th>
                                        <th style="width: 30%;">Valor ventas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Producto ###</td>
                                        <td>Categoria ###</td>
                                        <td>$ 999.99</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Producto ###</td>
                                        <td>Categoria ###</td>
                                        <td>$ 999.99</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Producto ###</td>
                                        <td>Categoria ###</td>
                                        <td>$ 999.99</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Producto ###</td>
                                        <td>Categoria ###</td>
                                        <td>$ 999.99</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Producto ###</td>
                                        <td>Categoria ###</td>
                                        <td>$ 999.99</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="3"><b>TOTAL</b></td>
                                        <td><b>$ 999.99</b></td>
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

