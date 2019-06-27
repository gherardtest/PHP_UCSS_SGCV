@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Requerimiento</div>

                <div class="panel-body">
        
                          <div class="form-group col-md-12"> 
                              <div class="col-md-6">

                                            <label for="street1_id" class="control-label">Número Solicitud Proforma</label>
                                            <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1" >

                                </div>

                              <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/buscarSolicitudProforma" class="btn btn-primary form-control">
                                  Buscar Solicitud de Proforma
                                </a>
                              </div>
                          </div>

                          <div class="form-group col-md-12"> 
                                <div class="col-md-6">
  
                                        <label for="street1_id" class="control-label">Cotización</label>
                                        <input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple> 
                                        <br>
                                        <button for="" type="submit" form="RegNotaPedido" class="btn btn-primary"> Asignar Cotización</button>                                
                                  </div>

                            </div>     

                         
                </div>
            </div>

            
@endsection
