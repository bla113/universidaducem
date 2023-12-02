<!--=====================================
                MODAL AGREGAR CARRERA
                ======================================-->

                <div wire:ignore.self class="modal fade" id="modalAgregarCarrera">
        
                    <div class="modal-dialog">
            
                        <div class="modal-content">
            
                            <div class="modal-header">
            
                                <h4 class="modal-title">Crear nueva Carera</h4>
            
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
                                    <span aria-hidden="true">&times;</span>
            
                                </button>
            
                            </div>
            
                            <form action="{{route('carreras.store')}}" method="post">
                                @csrf
                                <div class="modal-body">
            
                                    <div class="col-md-12">
            
                                        <div class="card card-primary">
            
                                            <div class="card-header">
            
                                                <h3 class="card-title">Nueva Carrera</h3>
            
                                            </div>
            
                                            <div class="card-body">
                                   
                                                <div class="form-group">
            
                                                    <label>Codigo:</label>
            
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                       
                                                        <input type="text" class="form-control" name="codigo" />
                                                        
                                                        <div class="input-group-append">
            
                                                            <div class="input-group-text"><i class="fa fa-code"></i></div>
            
                                                        </div>
                                                      
            
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
            
                                                    <label>Estado:</label>
            
                                                    <select class="form-control" style="width: 100%;" name="estado" >
            
                                                        <option selected="selected" value="activado">Activo</option>
            
                                                        <option value="desctivado">Desctivado</option>
            
                                                    </select>
            
                                                </div>
            
            
                                            </div>
            
                                            <!-- /.card-body -->
                                        </div>
            
            
                                    </div>
                                </div>
            
                                <div class="modal-footer justify-content-between">
            
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                   
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
            
                                </div>
            
                            </form>
            
                        </div>
                       
                    </div>
                   
                </div>


             