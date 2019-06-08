@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Nota de Pedido</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label " >Número de Documento</label>
                              @if(Session::has('nrodoccli'))
                                <input type="text" class="form-control textform" id="nrodoc" name="nrodoccli" readonly value="{{$nrodoccliente}}" >
                              
                                
                                  @else
                                  <input type="text" class="form-control textform" readonly id="street1_id" >
                             
                                   @endif
                                </div>
                              <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/consultarCliente" class="btn btn-primary form-control">
                                  Buscar Cliente
                                </a>
                              </div>
                          </div>

        

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Nombres del Cliente</label>
                                  <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1"  readonly value="{{$nameCustomer}}">
                              </div>
                          </div>


                          {{-- <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Apellido Paterno</label>
                                  <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1"  placeholder="Direccion del cliente">
                              </div>
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Apellido Materno</label>
                                  <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1"  placeholder="Telefono del cliente">
                              </div>
                          </div> --}}

                          <div class="form-group col-md-12"> <!-- Street 1 -->
                            <div class="col-md-6">
                              <a href="/consultarProducto" class="btn btn-primary">
                                Añadir Producto
                              </a>
                            </div>
                            <div class="col-md-6">
                              <a href="/registrarSolicitudTransporte" class="btn btn-primary">
                                Solicitar Transporte
                              </a>
                            </div>
                          </div>

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead>
                                      <tr class="bg-primary">
                                      <th scope="col">Nro Pedido</th>
                                      <th scope="col">Desc. Prod</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Subtotal</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>Gaseosa 1L</td>
                                          <td width="5">
                                          
                                          <input type="number" class="input-group input-group-sm mb-3 " value="2" id="cantidad" name="cantidad"  placeholder="0">
                                        
                                          </td>
                                          <td id="precio">3.50</td>
                                          <td id="total">7.00</td>
                                      </tr>

                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td class="">Transporte</td>
                                              <td>30.00</td>                                             
                                      </tr>
                                    
                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td class="">IGV</td>
                                              <td>1.26</td>                                             
                                      </tr>
                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td class="bg-info">Total</td>
                                              <td>7.00</td>                                             
                                      </tr>

                                  </tbody>
                              </table>
                              </div>
                          </div>
                          
                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/registrarNotaPedido" class="btn btn-primary form-control">
                                  Registrar Nota de Pedido
                                </a>
                           </div>
                          

                      </form>

                </div>
            </div>

            
@endsection
