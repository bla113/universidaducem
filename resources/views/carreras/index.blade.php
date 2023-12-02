@extends('adminlte::page')
@section('title', 'Carreras')
@section('content_header')
@stop
@include('carreras.carreras-modal')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Carreras</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Carreras</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="col-sm-3">
                                <button type="button" class="btn btn-block btn-outline-success" data-toggle="modal"
                                    data-target="#modalAgregarCarrera">Nueva
                                    Carrera <i class="fa fa-plus"></i> </button>


                            </div>




                            <table class="table table-bordered table-hover  dt-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Codigo</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carreras as $carrera)
                                        <tr>
                                            <td style="width:10px">{{ $carrera->id }}</td>
                                            <td>{{ $carrera->nombre }}</td>
                                            <td>{{ $carrera->codigo }}</td>
                                            <td> <button type="button"
                                                    class="btn btn-block btn-outline-danger btn-xs">{{ $carrera->estado }}</button>
                                            </td>
                                            <td>
                                                
                                               
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-block btn-outline-success">Acciones</button>
                                                        <button type="button"
                                                            class="btn btn-default dropdown-toggle dropdown-icon"
                                                            data-toggle="dropdown">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu">
                                                            <a href="{{route('carreras.edit', $carrera->id)}}" class="dropdown-item" type="submit">Editar</a>
                                                            <button wire:click="borrar{{$carrera->id}}" class="dropdown-item btn btn-success" type="submit"><i
                                                                    class="fa fa-trash"></i></button>

                                                        </div>
                                                    </div>
                                              
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Codigo</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>

    


@endsection

@section('js')
   
@section('plugins.Datatables', true)

<script>
    $(document).ready(function() {
        $('.tablas').DataTable({
            "language": {
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first": "Primero",
                    "last": "Último"
                }
            }
        });
    });
</script>
@stop
