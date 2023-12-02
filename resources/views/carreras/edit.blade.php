@extends('adminlte::page')
@section('title', 'Carreras')
@section('content_header')
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
     

  
      <div class="row">
        <div class="col-md-4">
           
        </div>
        
        <div class="col-md-4">
            <form action="{{route('carreras.update',$carrera)}}" method="post">
                @method('put')
                @csrf
                <div class="modal-body">

                    <div class="col-md-12">

                        <div class="card card-primary">

                            <div class="card-header">

                                <h3 class="card-title">Editar Carrera</h3>

                            </div>

                            <div class="card-body">
                   
                                <div class="form-group">

                                    <label>Codigo:</label>

                                    <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                                       
                                        <input type="text" value="{{$carrera->codigo}}" class="form-control" name="codigo" />
                                        
                                        <div class="input-group-append">

                                            <div class="input-group-text"><i class="fa fa-code"></i></div>

                                        </div>
                                      

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Nombre:</label>

                                    <div class="input-group date" id="reservationdatetime">

                                        <input type="text" value="{{$carrera->nombre}}" class="form-control" name="nombre"/>
                                        
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <label>Estado:</label>

                                    <select class="form-control" style="width: 100%;" name="estado" >

                                        <option selected="selected" value="activado">{{$carrera->estado}}</option>

                                        <option value="desctivado">Desctivado</option>
                                        <option value="activado">Activado</option>

                                    </select>

                                </div>


                            </div>

                            <!-- /.card-body -->
                        </div>


                    </div>
                    <div class=" justify-content-between">

                        <a href="{{route('carreras.index')}}" class="btn btn-primary" >Regresar</a>
                       
                        <button type="submit" class="btn btn-danger">Actualizar</button>
    
                    </div>
                </div>

                

            </form>


        </div>
        <div class="col-md-4">
        </div>
 
      </div>
   
   
    </div>
   
  </section>

@endsection

@section('js')
@if (session('status'))
            
<script>

Swal.fire({
  title: "Exito!!",
  text: "Registro actualizado",
  icon: "success"
 
});
  
</script>
@endif

@stop
