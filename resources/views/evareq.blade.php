@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Evaluar Requerimiento</div>

                <div class="panel-body">
        
                          <div class="form-group col-md-12"> 
                              <div class="col-md-6">

                                            <label for="street1_id" class="control-label">Nro Requerimiento</label>
                                            <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1" >

                                </div>

                                <div class="col-md-6">
                                        <label for="" class="control-label ">&nbsp;</label>
                                          <a href="/buscarRequerimiento" class="btn btn-primary form-control">
                                            Buscar Requerimiento
                                          </a>
                                  </div>
                          </div>


                          <div class="form-group col-md-12"> 
                                <div class="col-md-6">
  
                                              <label for="street1_id" class="control-label">Solicitante</label>
                                              <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1" >
  
                                  </div>
  


                                    <div class="col-md-6">
                                        <label for="street1_id" class="control-label">Estado de Evaluación</label>
                                        <select class="form-control" id="tipoComprobante" name="tipoComprobante">
                                          <option value="1">Aprobado</option>
                                          <option value="2">Desaprobado</option>
                                        </select>
                                    </div>

                            </div>



                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered" id="tablaDetalle">
                                  <thead>
                                      <tr class="bg-primary">
                                      {{-- <th scope="col">Item</th> --}} 
                                      <th scope="col">Cod. prod</th>
                                      <th scope="col" >Desc. Prod</th>
                                      <th scope="col">Stock Actual</th>
                                      <th scope="col">Cantidad a Solicitar (Editable)</th>
                                      <th scope="col">Precio</th>
                                      </tr>
                                  </thead>
                                  <tr >                                                    

                                        <td >1</td>    
                                        <td >Leche</td>
                                        <td >5</td> 
                                        <td >50</td>       
                                        <td >1.50</td>                                         
                                  </tr>   

                              </table>
                              </div>
                          </div>
                          
                          <div class="form-group col-md-12">
                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                              <button for="" type="submit" form="xxx" class="btn btn-primary"> Registrar Evaluación</button>
                                
                           </div>
                        </div>
                         
                </div>
            </div>

            
@endsection
