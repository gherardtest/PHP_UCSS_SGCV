@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">Cerrar Orden de transporte</div>

  <div class="panel-body">

      {{ Form::open(array('action' => 'OrdenTransporteController@actualizarEstadoEnvio', 'method' => 'POST' )) }}

      <div class="form-group col-md-12"> <!-- Id Orden Transporte -->
        <div class="col-md-6">
          <label for="street1_id" class="control-label " >Orden de Transporte</label>
          @if(Session::has('orden_transporte_id'))
          <input type="text" class="form-control textform"  id="ordentrans" name="orden_transporte_id" readonly value="{{Session::get('orden_transporte_id')}}" >

          @else
          <input type="text" class="form-control textform" name="orden_transporte_id" readonly id="street1_id" disabled="true" >

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
        <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id" readonly value="{{Session::get('nota_pedidos_id')}}">
        @else
        <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedidos_id" readonly value="" >
        @endif
      </div>

      <div class="col-md-6">
          <label for="street1_id" class="control-label ">Cliente</label>
          @if(Session::has('nombre_cliente'))
          <input type="text" class="form-control textform" id="clientes" name="nombreCliente" readonly value="{{Session::get('nombre_cliente')}}">
          @else
          <input type="text" class="form-control textform" id="clientes" name="nombreCliente" readonly value="">
          @endif
      </div>
    </div>
    <div class="form-group col-md-12">
      <div class="col-md-6">
        <label for="street1_id" class="control-label ">Estado</label>
        <select class="form-control" id="estado" name="estado_ord_trans_id">
          <option value="4">Entregado</option>
          <option value="5">Anulado</option>
          <option value="6">Siniestrado</option>
        </select>
      </div>
      <div class="col-md-6">
          <label for="street1_id" class="control-label ">Observaciones</label>
          
          <input type="text" class="form-control textform" id="obs" name="observaciones" value="">
         
      </div>
    </div>

    <div class="form-group col-md-12"> <!-- Street 1 -->
      <div class="col-md-6">
          <button for="" type="submit" class="btn btn-primary">Registrar Cierre</button>
        
      </div>
      <div class="col-md-6">
        <a href="/home" class="btn btn-primary">
        Salir
        </a>
      </div>
    </div> 

   
   {!! Form::close() !!}
   
  </div>
</div>

            
@endsection
