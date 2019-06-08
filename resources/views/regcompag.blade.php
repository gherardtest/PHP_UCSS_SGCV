@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Generar Comprobante de pago</div>

    <div class="panel-body">

          <form action="" method="POST">
            {{ csrf_field() }}

              <div class="form-group col-md-12"> <!-- Street 1 -->

                  <div class="col-md-6">
                      <label for="street1_id" class="control-label ">Nro. Nota de Pedido</label>
                    @if(Session::has('nota_pedidos_id'))
                      <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedido_id" disabled="true" value="{{$nota_pedido_id}}">
                    @else
                    <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedido_id" disabled="true" >
                
                     @endif
                                        </div>
                  <div class="col-md-6">
                        <label for="" class="control-label ">&nbsp;</label>
                          <a href="/consultarNotaPedido" class="btn btn-primary form-control">
                            Buscar Nota de Pedido
                          </a>
                  </div>
              </div>

              <div class="form-group col-md-12"> <!-- Street 1 -->

                  <div class="col-md-6">
                      <label for="street1_id" class="control-label">Cajero</label>
                      <input type="text" class="form-control textform" id="nameCajero" name="nameCajero" disabled="true" value="{{auth()->user()->name}}">
                  </div>
                  <div class="col-md-6">
                    <label for="street1_id" class="control-label" style="visibility: hidden" >Cajero</label>
                    <input style="visibility: hidden" type="text" class="form-control textform" id="idCajero" name="idCajero" disabled="true" value="{{auth()->user()->id}}">
                </div>
              </div>


              <div class="form-group col-md-12"> <!-- Street 1 -->

                  <div class="col-md-6">
                      <label for="street1_id" class="control-label">Tipo Comprobante</label>
                      <select class="form-control" id="tipoComprobante" name="tipoComprobante">
                        <option value="1">Boleta</option>
                        <option value="2">Factura</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                      
                  </div>
              </div>


              <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <table class="table table-bordered">
                          <thead >
                              <tr align = "center" class="bg-primary">
                            
                                    <th scope="col">Nro Detalle</th>
                                    <th scope="col">Desc. Prod</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Subtotal</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(count($detalle_nota_pedido)>0)
                            <?php $i = 0 ?>
                            @foreach ($detalle_nota_pedido as $detalle)
                            <?php $i++ ?>
                            <tr>
                                <td align = "center" >{{ $i}}</td>
                                <td align = "center" >{{$detalle->descripcion}}</td>
                                <td>{{$detalle->cantidad}}</td>
                                <td>{{$detalle->precio}}</td>
                                <td>{{$detalle->subtotal}}</td>
                            </tr>
                            @endforeach
                            @endif

                            @if(count($cabecera_nota_pedido)>0)
                            <tr>
                                    <th ></th>
                                    <td></td>
                                    <td></td>
                                    <td class="">Transporte</td>
                                    <td>{{$cabecera_nota_pedido[0]->transporte}}</td>                                             
                            </tr>
                          
                            <tr>
                                    <th ></th>
                                    <td></td>
                                    <td></td>
                                    <td class="">IGV</td>
                                    <td>{{$cabecera_nota_pedido[0]->igv}}</td>                                             
                            </tr>
                            <tr>
                                    <th ></th>
                                    <td></td>
                                    <td></td>
                                    <td class="bg-info">Total</td>
                                    <td>{{$cabecera_nota_pedido[0]->total}}</td>                                             
                            </tr>

                            @endif
                          </tbody>
                      </table>
                      </div>
                      
                     
                  </div>
                 
                    <div class="form-group col-md-12"> 
                        <div class="col-md-6">
                            <label for="street1_id" class="control-label">&nbsp;</label>
                            
                        </div>
                        <div class="col-md-6">
                            <label for="street1_id" class="control-label">Total Pagado</label>
                            <input type="text" class="form-control textform" id="totalPagado" name="totalPagado"  value="">
                        </div>
                    
                    </div>
                    <div class="form-group col-md-12"> <!-- Street 1 -->
                        <div class="col-md-6">
                                <label for="street1_id" class="control-label">&nbsp;</label>
                            
                            </div>
                        <div class="col-md-6">
                            <label for="street1_id" class="control-label" >Vuelto</label>
                            <input  type="text" class="form-control textform" id="vuelto" name="vuelto"  value="">
                        </div>
                    </div>
                
              <div class="form-group col-md-12"> <!-- Street 1 -->

                <div class="col-md-6">
                        <button for="" type="submit" class="btn btn-primary">Generar Comprobante de pago</button>
                </div>

              </div>
              


          </form>

    </div>
</div>

           
@endsection
