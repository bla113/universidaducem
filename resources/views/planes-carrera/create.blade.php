@extends('adminlte::page')
@section('title', 'Crear Plan de Estudios')
@section('content_header')
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
     

  
      <div class="row">
        <div class="col-md-4">
           
        </div>
        
        <div class="col-md-4">
            <form action="{{route('plancarrera.store')}}" method="post">
           
                @csrf
                
                
                    <div class="modal-body">

                        <div class="col-md-12">

                            <div class="card card-primary">

                                <div class="card-header">

                                    <h3 class="card-title">Crear nuevo Plan de Carera</h3>

                                </div>

                                <div class="card-body">
                       
                                    <div class="form-group">

                                        <label>Codigo:</label>

                                        <div class="input-group date" >
                                           
                                            <input type="text" class="form-control" name="codigo" />
                                            
                                            <div class="input-group-append">

                                                <div class="input-group-text"><i class="fa fa-code"></i></div>

                                            </div>
                                          

                                        </div>
                                        @error('codigo')
                                          <div class="alert alert-danger"> <p>Campo requerido</p></div>
                                          @enderror

                                    </div>

                                    <div class="form-group">

                                        <label>Nombre:</label>

                                        <div class="input-group date" id="reservationdatetime">

                                            <input type="text" class="form-control" name="nombre"/>
                                            
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('nombre')
                                    <div class="alert alert-danger"> <p>Campo nombre requerido</p></div>
                                    @enderror

                                    <div class="form-group">

                                        <label>Creditos:</label>

                                        <div class="input-group date" id="reservationdatetime">

                                            <input type="number" class="form-control" name="creditos"/>
                                            
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('creditos')
                                          <div class="alert alert-danger"> <p>Campo creditos requerido</p></div>
                                          @enderror
                                    <div class="form-group">

                                        <label>Periodos:</label>

                                        <div class="input-group date" id="reservationdatetime">

                                            <input type="number" class="form-control" name="periodos"/>
                                            
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('periodos')
                                          <div class="alert alert-danger"> <p>Campo Periodos requerido</p></div>
                                          @enderror
                                    <div class="form-group">

                                        <label>Carrera:</label>

                                        <select class="form-control" style="width: 100%;" name="carrera" >
                                            @foreach ($carreras as $carrera )
                                            <option selected="selected" value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                                            @endforeach

                                        </select>

                                    </div>

                                    @error('estado')
                                    <div class="alert alert-danger"> <p>Debe selecionar una opcion</p></div>
                                    @enderror

                                    <div class="form-group">
            
                                        <label>Estado:</label>

                                        <select class="form-control" style="width: 100%;" name="estado" >

                                            <option selected="selected" value="Activado">Activo</option>

                                            <option value="desctivado">Desctivado</option>

                                        </select>

                                    </div>
                                </div>

                                <!-- /.card-body -->
                            </div>


                        </div>
                    </div>

                    <div class=" justify-content-between">

                        <a href="{{route('plancarrera.index')}}" class="btn btn-primary" >Regresar</a>
                       
                        <button type="submit" class="btn btn-danger">Guardar</button>
    
                    </div>

                </form>

                

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
  text: "Registro creado",
  icon: "success"
 
});
  
</script>
@endif

@stop
