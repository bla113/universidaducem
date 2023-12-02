@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Estudiantes</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Estudiantes</li>
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
          <div class="card-header">
            <a href="{{route('estudiante.create')}}" class="btn btn-primary">Crear</a>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered table-hover tablas">
              <thead>
              <tr>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Estado</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($estudiantes as $estudiante )
                    
               
              <tr>
                <td>{{$estudiante->identificacion}}</td>
                <td>{{$estudiante->nombre. ' '.$estudiante->apllidos}}</td>
                <td>(+506){{$estudiante->celular}}</td>
                <td>{{$estudiante->user->email}}</td>
                <td> <button type="button" class="btn btn-block btn-outline-danger">{{$estudiante->estado}}</button></td>

              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
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
  <script> console.log('Hi!'); </script>
  @section('plugins.Datatables', true)

  <script>
    $(document).ready( function () {
  $('.tablas').DataTable(
    {
      "language":{
        "search": "Buscar",
        "lengthMenu":"Mostrar _MENU_ registros por página",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "paginate":{
          "previous":"Anterior",
          "next":"Siguiente",
          "first": "Primero",
          "last": "Último"
        }
      }
    }
  );
} );
  </script>
@stop
