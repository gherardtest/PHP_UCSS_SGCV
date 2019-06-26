@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Nota de Pedido</div>

                <div class="panel-body">
                    
                    {{ Form::open(array('action' => 'NotaPedidoController@store', 'method' => 'POST','id'=>'RegNotaPedido' )) }}
                                    
                    {{ csrf_field() }}
        
                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label " >Número de Documento</label>
                                  @if(Session::has('nrodoccli'))
                                    <input type="text" class="form-control textform" readonly value="{{$nrodoccliente}}" >
    
                                  @else
                                    <input type="text" class="form-control textform" readonly >
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
                              <a href="/registrarOrdenTransporte" class="btn btn-primary">
                                Solicitar Transporte
                              </a>
                            </div>
                          </div>
                          {!! Form::close() !!}

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered" id="tablaDetalle">
                                  <thead>
                                      <tr class="bg-primary">
                                      {{-- <th scope="col">Item</th> --}}
                                      <th scope="col"></th>
                                      <th scope="col">Cod. prod</th>
                                      <th scope="col" >Desc. Prod</th>
                                      <th scope="col" colspan="2">Cantidad</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Subtotal</th>

                                      </tr>
                                  </thead>
                                  <tbody>

                                
                                    @foreach ($detalleNota as $detalle)
                                   
                                    
                                      <tr>
                                          {{ Form::open(array('action' => 'DetalleNotaPedidoController@eliminarDeDetalle', 'method' => 'POST' )) }}
                                          <td>
                                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'name'=>'product_id','class' => 'btn btn-danger btn-sm','value'=>$detalle['product_id']] )  }}
                                          </td>
                                        
                                          {!! Form::close() !!}
                                          
                                      {{ Form::open(array('action' => 'DetalleNotaPedidoController@actualizarDetalle', 'method' => 'POST' )) }}
                                     
                                      <td>
                                          {{Form::text("product_id", old("product_id") ? old("product_id") : (!empty($detalle) ? $detalle['product_id']: null),
                                            [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                            }} 
                                        </td>
                                      <td   class="size">{{$detalle['product_name']}}</td>

                                      <td colspan="2">                                   
                                        <div class="row ">
                                          <div class="col-md-7">
                                                  <input type="number" min="1" maxlength="6" size="10"
                                                  onchange="calculo(this.value, {{$detalle['product_price']}},total{{$detalle['product_id']}},totalN);" 
                                                  class="form-control" 
                                                  name="cantidad"
                                                  value="{{$detalle['product_cantidad']}}" 
                                                  id="cantidad$detalle['product_id']">
                                         </div>
                                         
                                           <div class="col-md-3">
                                              {{ Form::button('<i class="glyphicon glyphicon-refresh"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
                                             
                                          </div>
                                        </div>
                                        {{-- <p class="text-danger">No se puede </p> --}}
                                      
                                      
                                      </td>
                                      <td > 
                                        <div class="">
                                        <input type="text" class="form-control precio"  maxlength="6" size="6" readonly id="precio{{$detalle['product_id']}}" value="{{$detalle['product_price']}}"/>
                                        </div>
                                      </td>
                                      <td>
                                          <div class="">
                                        <input type="text"  class="form-control subtotal" maxlength="6"  readonly size="6"  id="total{{$detalle['product_id']}}" value="{{$detalle['product_price']*$detalle['product_cantidad']}}">
                                          </div>
                                      </td>
                                      {!! Form::close() !!}
                                    </tr>   
                                    
                                    @endforeach  
 
                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td class="">Transporte</td>
                                              <td>
                                                @if ($transporte==1)
                                                
                                                  <input type="number" id="transporte" readonly size="8"  name="transporte" value="30.00">
                                                @else
                                                  <input type="number" id="transporte" readonly size="8" name="transporte" value="0.00">
                                                @endif
                                              </td>                                             
                                      </tr>
                                    
                                      <tr>
                                              <th></th>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td class="">IGV</td>
                                              <td><input type="number" readonly size="8" name="igv" id="totaligv" class="igv" value="{{$totaligv}}"></td>                                             
                                      </tr>
                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>    
                                              <td id="totalN" class="bg-info">Total</td>
                                              <td><input type="number" readonly size="8" class="total" name="total" id="totalnota" value="{{$total}}"></td>                                             
                                      </tr>

                                  </tbody>
                              </table>
                              </div>
                          </div>
                          
                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                              <button for="" type="submit" form="RegNotaPedido" class="btn btn-primary"> Registrar Nota de Pedido</button>
                                
                           </div>
                          

                         
                </div>
            </div>

            
@endsection
