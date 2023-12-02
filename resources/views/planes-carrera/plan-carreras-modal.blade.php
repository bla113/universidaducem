<!--=====================================
                MODAL AGREGAR CARRERA
                ======================================-->

                <div  class="modal fade" id="modalAgregarPlanCarrera">
        
                    <div class="modal-dialog">
            
                        <div class="modal-content">
            
                            <div class="modal-header">
            
                                <h4 class="modal-title">Crear nuevo Plan de Carera</h4>
            
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
                                    <span aria-hidden="true">&times;</span>
            
                                </button>
            
                            </div>
                           
                            <form action="" method="post">
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
                                                      @error('codigo')
                                                      <div class="alert alert-danger alert-dismissible">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <h5><i class="icon fas fa-ban"></i> {{$message}}!</h5>
                                                        
                                                      </div>
                                                      @enderror
            
                                                    </div>
            
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
            
            
                                                <div class="form-group">
            
                                                    <label>Creditos:</label>
            
                                                    <div class="input-group date" id="reservationdatetime">
            
                                                        <input type="number" class="form-control" name="creditos"/>
                                                        
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
            
                                                    <label>Periodos:</label>
            
                                                    <div class="input-group date" id="reservationdatetime">
            
                                                        <input type="number" class="form-control" name="periodos"/>
                                                        
                                                        <div class="input-group-append">
                                                            <div class="input-group-text"><i class="fa fa-pen"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
            
                                                    <label>Carrera:</label>
            
                                                    <select class="form-control" style="width: 100%;" name="estado" >
                                                        @foreach ($carreras as $carrera )
                                                        <option selected="selected" value="activado">{{$carrera->nombre}}</option>
                                                        @endforeach
            
                                                    </select>
            
                                                </div>
            
            
                                            </div>
            
                                            <!-- /.card-body -->
                                        </div>
            
            
                                    </div>
                                </div>
            
                                <div class="modal-footer justify-content-between">
            
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                   
                                    <button type="submit" class="btn btn-primary">Crear Plan</button>
            
                                </div>
            
                            </form>
            
                        </div>
                       
                    </div>
                   
                </div>


             