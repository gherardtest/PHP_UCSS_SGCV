@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Requerimiento</div>

                <div class="panel-body">
        
                          <div class="form-group col-md-12"> 
                              <div class="col-md-6">

                                            <label for="street1_id" class="control-label">Solicitante</label>
                                            <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1" >

                                </div>

                              <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/xxx" class="btn btn-primary form-control">
                                  Buscar Personal
                                </a>
                              </div>
                          </div>


                          <div class="col-md-12"> <!-- Street 1 -->
                            <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Observaciones</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1" >
                            </div>
                        </div>

                          <div class="form-group col-md-12"> 
                          <div class="col-md-6">
                                <label for="" class="control-label ">&nbsp;</label>
                                  <a href="/consultarProducto" class="btn btn-primary form-control">
                                    Buscar Producto
                                  </a>
                            </div>
                        </div>

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered" id="tablaDetalle">
                                  <thead>
                                      <tr class="bg-primary">
                                      {{-- <th scope="col">Item</th> --}}
                                      <th scope="col"></th>
                                      <th scope="col">Cod. prod</th>
                                      <th scope="col" >Desc. Prod</th>
                                      <th scope="col">Stock Actual</th>
                                      <th scope="col">Cantidad a Solicitar (Editable)</th>
                                      <th scope="col">Precio</th>
                                      </tr>
                                  </thead>
                                  <tr >                                                                   
                                        <td >Eliminar</td>   
                                        <td >1</td>    
                                        <td >Leche</td>
                                        <td >5</td> 
                                        <td >50</td>       
                                        <td >1.50</td>                                         
                                  </tr>   

                              </table>
                              </div>
                          </div>
                          
                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                              <button for="" type="submit" form="RegNotaPedido" class="btn btn-primary"> Registrar Requerimiento</button>
                                
                           </div>
                          

                         
                </div>
            </div>

            
@endsection
