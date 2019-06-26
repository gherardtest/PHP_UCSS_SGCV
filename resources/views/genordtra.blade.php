@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Gestionar Entrega</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Id Orden Transporte -->
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label " >Orden de Transporte</label>
                              @if(Session::has('nroordentran'))
                                <input type="text" class="form-control textform"  id="ordentrans" name="nroordentran" readonly value="{{$onrordentranscli}}" >
                              
                                
                                  @else
                                  <input type="text" class="form-control textform" readonly id="street1_id" disabled="true" >
                             
                                   @endif
                                </div>

                              <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/buscarOrdenTransporte" class="btn btn-primary form-control">
                                  Buscar Orden de Transporte
                                </a>
                              </div>
                              
                          </div>

        
                          <div class="form-group col-md-12">

                          <div class="col-md-6">  <!-- Id Nota Pedido -->
                            <label for="street1_id" class="control-label ">Nro. Nota de Pedido</label>
                          @if(Session::has('nota_pedidos_id'))
                            <input type="text" class="form-control textform" disabled="true" id="nota_pedido_id" name="nota_pedidos_id" readonly value="{{$nota_pedido_id}}">
                          @else
                          <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id" disabled="true" >
                      
                           @endif
                        </div>
                       

                        
                        <div class="col-md-6">
                            <label for="street1_id" class="control-label ">Empresa Transportista</label>
                            
                            <input type="text" class="form-control textform" id="obs" name="observaciones" value="">                           
                        </div>

                        </div>


                        <div class="form-group col-md-12">
                          
                          <div class="col-md-6">
                              <label for="street1_id" class="control-label ">Encargado de Despacho</label>
                              
                              <input type="text" class="form-control textform" disabled="true" id="obs" name="observaciones" value="">                           
                          </div>

                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/buscarPersonalTra" class="btn btn-primary form-control">
                                  Buscar Personal
                                </a>
                          </div>
  
                          </div>

                          <div class="form-group col-md-12">                          
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Fecha De Despacho</label>
                                  <input class="form-control" type="date" name="fecha_envio" value="2019-06-02" id="example-datetime-local-input">
                              </div>
    
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Fecha De Despacho</label>
                                  <input class="form-control" type="time" name="fecha_envio" value="2019-06-02" id="example-datetime-local-input">
                              </div>
      
                          </div>


                          
                        <div class="form-group col-md-12">
                          <div class="col-md-6">
                              <label for="street1_id" class="control-label ">Encargado de Recepción</label>
                              
                              <input type="text" class="form-control textform" id="obs" name="observaciones" value="">                           
                          </div>
                       
                          <div class="col-md-6">
                              <label for="street1_id" class="control-label ">DNI Encargado de Recepción</label>
                              
                              <input type="text" class="form-control textform" id="obs" name="observaciones" value="">                           
                          </div>
                        </div>

                        <div class="form-group col-md-12">
                        <div class="col-md-12">
                            <label for="street1_id" class="control-label ">Observaciones</label>
                            
                            <input type="text" class="form-control textform" id="obs" name="observaciones" value="">
                           
                        </div>
                      </div>
                        
                        <div class="form-group col-md-12">
                                <div class="col-md-12">
                                  <table class="table table-bordered">
                                      <thead >
                                          <tr align = "center" class="bg-primary">
                                          <th >IdProducto</th>
                                          <th >Descripción</th>
                                          <th >Cantidad</th>                                  
                                      </thead>      
                                      
                                      <tr >                                                                   
                                            <td >1</td>    
                                            <td >Leche</td>
                                            <td >2</td>                                               
                                      </tr>   
                                      
                                  </table>
                                  </div>                               
                        </div>
 
                          <div class="form-group col-md-12"> <!-- Street 1 -->
                            <div class="col-md-6">
                              <a href="/generarOrdenTransporte" class="btn btn-primary">
                                Registrar Entrega
                              </a>
                            </div>
                            <div class="col-md-6">
                              <a href="/home" class="btn btn-primary">
                                Salir
                              </a>
                            </div>
                          </div> 

                      </form>

                </div>
            </div>

            
@endsection
