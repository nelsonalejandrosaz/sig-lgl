@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Margen de Ganancias por Producto
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
      Margen de Ganancias por Producto
@endsection

@section('contentheader_description')
    {{--Aqui va la descripcion de la vista OPCIONAL --}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                {{--Seccion de informe de margen de ganancias por producto--}}
                <section class="invoice">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> LGL S.A. de C.V. <br>
                                 Informe de Margen de Ganancias por Producto
                            </h2>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-6 invoice-col">
                            <b>Generado por:</b> <br>
                            ################# <br>
                            <b>Desde:</b> <br>
                            ################# <br>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 invoice-col">
                            <b>Fecha y hora de creacion:</b> <br>
                            ################
                           
                        </div>
                         <div class="col-sm-6 invoice-col">
                            <b>Hasta:</b> <br>
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
                                        <th style="width: 20%;">Tipo de producto</th>
                                        <th style="width: 20%;">producto</th>
                                        <th style="width: 20%;">Ganancia</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Lacteos</td>
                                        <td>Leche</td>
                                        <td>$ 400.40</td>
                                        
                                    </tr>
                                    <tr>
                                         <td>Esencias</td>
                                        <td>Vainilla</td>
                                        <td>$ 100.50</td>
                                    </tr>
                                    </tbody>
                                    <tbody>
                                    <tr>
                                        <td colspan="2"><b>GANANCIA TOTAL</b></td>
                                        <td><b>$ 500.90</b></td>
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


