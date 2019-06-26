@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Registrar Solicitud de Proforma</div>

    <div class="panel-body">

          {{--  <form action="" method="POST">  --}}
        {{ Form::open(array('action' => 'ComprobantePagoController@store', 'method' => 'POST' )) }}
                                    
            {{ csrf_field() }}

              <div class="form-group col-md-12"> <!-- Street 1 -->

                  <div class="col-md-6">
                      <label for="street1_id" class="control-label ">Nro. Requerimiento</label>
                    @if(Session::has('nota_pedidos_id'))
                      <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id">
                    @else
                    <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id" disabled="true" >
                
                     @endif
                  </div>
                  
                  <div class="col-md-6">
                        <label for="" class="control-label ">&nbsp;</label>
                          <a href="/buscarRequerimiento" class="btn btn-primary form-control">
                            Buscar Requerimiento de Producto
                          </a>
                  </div>
              </div>

              <div class="form-group col-md-12"> <!-- Street 1 -->

                <div class="col-md-6">
                    <label for="street1_id" class="control-label">Solicitante</label>
                    <input type="text" class="form-control textform" id="nameCustomer" name="nameCustomer" disabled="true">
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>

            <div class="form-group col-md-12"> <!-- Street 1 -->

              <div class="col-md-6">
                  <label for="street1_id" class="control-label ">Proveedor</label>
                @if(Session::has('nota_pedidos_id'))
                  <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id">
                @else
                <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id" disabled="true" >
            
                 @endif
              </div>
              
              <div class="col-md-6">
                    <label for="" class="control-label ">&nbsp;</label>
                      <a href="/buscarProveedor" class="btn btn-primary form-control">
                        Buscar Proveedor
                      </a>
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
                                <th scope="col">Cantidad Solicitada</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tr >                          
                                  <td >1</td>    
                                  <td >Leche</td>
                                  <td >50</td> 
                                  <td >1.50</td>       
                                  <td >75.00</td>                                         
                            </tr>   

                        </table>
                      </div>
                      
                     
                  </div>
       
                
              <div class="form-group col-md-12"> <!-- Street 1 -->

                <div class="col-md-6">
                        <button for="" type="submit" class="btn btn-primary">Registrar Solicitud de Proforma</button>
                </div>

              </div>
              


          {{--  </form>  --}}
          {!! Form::close() !!}
    </div>
</div>

           
@endsection
