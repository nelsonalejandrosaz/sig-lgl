@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Exportación de Backup
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Exportación de Backup
@endsection

@section('contentheader_description')
    {{--Aqui va la descripcion de la vista OPCIONAL --}}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Exportar archivo backup</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            {{--<div class="form-group">--}}
                                {{--<label for="exampleInputFile">Archivo Backup</label>--}}
                                {{--<input type="file" id="exampleInputFile">--}}

                            {{--</div>--}}

                            <p class="help-block">Esto generara un archivo backup con todos los datos dentro del SIG</p>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-upload"></i>
                                Exportar backup
                            </button>
                            {{--<button type="submit" class="btn btn-lg btn-default pull-right" style="margin-right: 5px"><i--}}
                                        {{--class="fa fa-check"></i> Validar--}}
                            {{--</button>--}}
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
        </div>
    </div>
@endsection

@section('JSExtra')
    {{--Aqui va JS adicional para la vista--}}
@endsection

