@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1>Crear Estudiante</h1>
@stop
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
    integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')


    <section class="content">
        <div class="container-fluid">


            <!-- /.card -->

            <div class="row">
                <div class="col-12 col-sm-1">
                </div>
                <div class="col-12 col-sm-10">
                    <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                        aria-selected="true">Información General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-one-profile" role="tab"
                                        aria-controls="custom-tabs-one-profile" aria-selected="false">Datos Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-one-diretion" role="tab"
                                        aria-controls="custom-tabs-one-messages" aria-selected="false">Dirección</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-one-messages" role="tab"
                                        aria-controls="custom-tabs-one-messages" aria-selected="false">Académico</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                        href="#custom-tabs-one-settings" role="tab"
                                        aria-controls="custom-tabs-one-settings" aria-selected="false">Carrera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                        href="#custom-tabs-one-attchment" role="tab"
                                        aria-controls="custom-tabs-one-settings" aria-selected="false">Adjuntos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">

                                            <div class="card card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">Datos Personales</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Tipo de Identificación</label>
                                                        <select class="custom-select rounded-0">
                                                            <option value="Nacional TSE">Nacional TSE</option>
                                                            <option value="Cédula Residencia">Cédula Residencia</option>
                                                            <option value="Número de Pasaporte">Número de Pasaporte</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Identificación</label>

                                                        <div class="input-group my-colorpicker2">
                                                            <input type="text" class="form-control">

                                                            <div class="input-group-append">
                   
                                                                <span class="input-group-text" id="btnValidar"><i
                                                                        class="fa fa-search"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nombre Completo:</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-id-card"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                    </div>

                                                    <label>Apellidos:</label>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-id-card"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <!-- /.input group -->
                                                    </div>
                                                    <!-- /.form group -->




                                                </div>

                                            </div>




                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>



                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-diretion" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">

                                            <div class="card card-warning">
                                                <div class="card-header">
                                                    <h3 class="card-title">Datos Dirección</h3>
                                                </div>
                                                <div class="card-body">


                                                    <!-- phone mask -->
                                                    <div class="form-group">
                                                        <label>Provincia</label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-home"></i></span>
                                                            </div>
                                                            <select class="form-control" name="provincia" id="slt-provincias">
                                                                <option value="">Seleccione provincia</option>
                                                            </select>
                                                             
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cantón</label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-home"></i></span>
                                                            </div>
                                                            <select class="form-control" name="provincia" id="slt-cantones"></select>

                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Distrito</label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-home"></i></span>
                                                            </div>
                                                            <select class="form-control" name="provincia" id="slt-distritos"></select>

                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Otras Señas</label>

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-home"></i></span>
                                                            </div>
                                                            <textarea name="" class="form-control" id="" cols="10" rows="5"></textarea>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">

                                            <div class="card card-warning">
                                                <div class="card-header">
                                                    <h3 class="card-title">Datos Contacto</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Telefono Fijo</label>

                                                        <div class="input-group">
                                                            <input type="number" class="form-control">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-phone"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telefono Celular</label>

                                                        <div class="input-group">
                                                            <input type="number" class="form-control">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-phone"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Correo Electrónico</label>

                                                        <div class="input-group">
                                                            <input type="mail" class="form-control">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-envelope"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Fecha de Nacimiento</label>

                                                        <div class="input-group">
                                                            <input type="date" class="form-control">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Estado Civil</label>
                                                        <select class="custom-select rounded-0">
                                                            <option value="">Seleeccione estado civil</option>
                                                            <option value="Soltero">Soltero</option>
                                                            <option value="Casado">Casado</option>
                                                            <option value="Union Libre">Union Libre</option>
                                                            <option value="Divorciado">Divorciado</option>
                                                            <option value="Viudo">Viudo</option>
                                                            <option value="Otro">Otro</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Selccione si posee
                                                            empleo</label>
                                                        <select class="custom-select rounded-0">
                                                            <option value="">¿Trabaja actualmente?</option>
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre Contacto de Emergencia</label>

                                                        <div class="input-group my-colorpicker2">
                                                            <input type="text" class="form-control">

                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i
                                                                        class="fa fa-user"></i></span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label>Teléfono Emergencia</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fa  fa-phone"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>




                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-messages-tab">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">

                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Académico</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Seleccione procendencia</label>
                                                        <select class="custom-select rounded-0">
                                                            <option value="Adémico">Adémico</option>
                                                            <option value="Ténico por Maduréz">Ténico por Maduréz</option>
                                                            <option value="Suficiencia">Suficiencia</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Seleccione turno de
                                                            intrés</label>
                                                        <select class="custom-select rounded-0">
                                                            <option value="Diurno">Diurno</option>
                                                            <option value="Nocturno">Nocturno</option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-settings-tab">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-8">

                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Carrera</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Seleccione Carrera</label>
                                                        <select class="custom-select rounded-0">
                                                            @foreach ( $carreras as $carrera )
                                                            <option value="">{{$carrera->nombre}}</option>
                                                            @endforeach
                                                            

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleSelectRounded0">Seleccione Plan de
                                                            Carrera</label>
                                                        <select class="custom-select rounded-0">
                                                            @foreach ( $planes as $plan )
                                                            <option value="">{{$plan->nombre}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-info btn-lg">Crear nuevo
                                                            estudiante</button>

                                                    </div>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-attchment" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-settings-tab">
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-8">

                                          <div class="card card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">Adjuntos</h3>
                                            </div>
                                            <div class="card-body">
                                               
                                               

                                              <div class="form-group">
                                                <label for="exampleSelectRounded0">Subir Titulos</label>
                                                <form action="{{ route('carreras.store') }}" class="dropzone"
                                                    id="my-awesome-dropzone"></form>

                                            </div>





                                            </div>

                                        </div>


                                           



                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-12 col-sm-1">
                </div>
            </div>


        </div>

    </section>



    @stop @section('css')
   
@stop



@section('js')

    <script>
        $('#select2123').select2({
            theme: 'bootstrap-5'
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
        integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        Dropzone.options.myAwesomeDropzone = {
            maxFilesize: 1, // MB
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            dictDefaultMessage: "Arrastre el archivo para subirlo al servidor",
            acceptedFiles: ".pdf",
            maxFiles: 1,

        };
    </script>
    <script src="/js/api.js"></script>
    <script src="/js/distribucion-cr.js"></script>
    <script src="/js/formulario.js"></script>
    

@stop
