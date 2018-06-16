@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Nuevo usuario
@endsection

@section('CSSExtra')

@endsection

@section('contentheader_title')
    Nuevo usuario
@endsection

@section('contentheader_description')
    -- Agregar un nuevo usuario
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="email" class="form-control" name="name" placeholder="Ingrese el nombre">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Ingrese el email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Ingrese el password">
                            </div>
                            <div class="form-group">
                                <label>Tipo de usario</label>
                                <select name="rol_id" class="form-control select2">
                                    <option value="">Seleccione una opcion</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <a href="{{route('usuario.index')}}" class="btn btn-lg btn-default"><i class="fa fa-close"></i> Cancelar</a>
                            <button type="submit" class="btn btn-lg btn-success pull-right"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JSExtra')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}", 'Ups!');
            </script>
        @endforeach
    @endif

    <script>
        // $(document).ready(boot());

        // function boot() {
        //     $('.btn-store').click(storeCategoria);
        // }
        //
        // function storeCategoria() {
        //     // alert('Voinas');
        //     let uri = "/categoria";
        //     let datos = {
        //         codigo: $('#codigo').val(),
        //         nombre: $('#nombre').val(),
        //         descripcion: $('#descripcion').val(),
        //     };
        //     axios.post(uri, datos).then(response => {
        //         console.log("Ok");
        //         console.log(response);
        //     }).catch(error => {
        //         console.log("Error");
        //         let errores = error.data.errors;
        //         for (let error in errores) {
        //             console.log(errores[error][0]);
        //             toastr.error(errores[error][0], 'Ups!');
        //         }
        //     });
        // }
    </script>
    {{--{!! Toastr::render() !!}--}}
@endsection