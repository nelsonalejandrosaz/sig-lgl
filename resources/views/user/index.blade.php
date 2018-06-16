@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Lista de usuarios
@endsection

@section('CSSExtra')
    {{--Aqui va CSS adicional para la vista OPCIONAL --}}
@endsection

@section('contentheader_title')
    Lista de usuarios
@endsection

@section('contentheader_description')
    {{--Aqui va la descripcion de la vista OPCIONAL --}}
@endsection

@section('main-content')
    @include('partials.modal-danger')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Opciones</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="{{route('usuario.create')}}" class="btn btn-lg btn-primary"><span
                                    class="fa fa-plus"></span> Nuevo usuario</a>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="box box-default">
                    <div class="box-body table-responsive">

                        <table id="tablaDT" class="table table-hover">

                            <thead>
                            <tr>
                                <th style="width:30%">Nombre</th>
                                <th style="width:30%">Email</th>
                                <th style="width:20%">Rol</th>
                                <th style="width:20%">Acción</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->rol->nombre}}</td>
                                    <td align="center">
                                        <a href="#" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                        <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" data-id="{{$usuario->id}}" data-nombre="{{$usuario->name}}">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>
                            </tfoot>

                        </table>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>
        </div>
    </div>
@endsection

@section('JSExtra')
    <script>
        $(document).ready(boot());

        $('#modal-danger').on('show.bs.modal', function (event) {
            let button = $(event.relatedTarget); // Button that triggered the modal
            let nombre = button.data('nombre'); // Extract info from data-* attributes
            let id = button.data('id');
            let modal = $(this);
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            modal.find('#mensaje-modal-danger').text('Se eliminará: ' + nombre);
            modal.find('#btn-modal-danger').attr("data-id", id);
        });

        function boot() {
            // $('#btn-modal-danger').click(deleteProducto);
            // $('#tablaDT').dataTable();
        }

        // function deleteProducto() {
        //     let uri = "/producto/" + $(this).data('id');
        //     axios.delete(uri).then(response => {
        //         location.reload();
        //     }).catch(error => {
        //         toastr.error('Algo ha salido mal','Ups');
        //     });
        // }
    </script>
    {{--{!! Toastr::render() !!}--}}
@endsection

