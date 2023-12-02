@extends('adminlte::page')

@section('title', 'Universidad')

@section('content_header')
    <h1>Universidad UCEM</h1>
@stop

@section('content')





    <h1>Dashboard</h1>




    @stop @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')



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
 