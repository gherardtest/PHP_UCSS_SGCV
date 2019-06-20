@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">Buscar Nota de Pedido</div>

  <div class="panel-body">
    @if (session('notification'))
    <div class="alert alert-success">
      {{ session('notification') }}
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    {{-- {!! Form::open(['route'=>'','method'=>'GET',]) !!} --}}


    {{-- {!! Form::close() !!}
       --}}
    <!--Buscador-->
    {{ Form::open(array('action' => 'NotaPedidoController@show', 'method' => 'POST' )) }}
    <div class="form-group col-md-12">
      <div class="col-md-3">
        <label for="street1_id" class="control-label ">Número Nota Pedido</label>
        <input type="text" class="form-control textform" id="nota_pedido_id" name="nota_pedido_id"
          placeholder="Número de pedido">
      </div>
      <div class="col-md-3">
        <label for="street1_id" class="control-label ">Cliente</label>
        <input type="text" class="form-control textform" id="cliente" name="cliente" placeholder="Nombre del cliente">
      </div>
      <div class="col-md-3">
        <label for="street1_id" class="control-label ">Vendedor</label>
        <input type="text" class="form-control textform" id="vendedor" name="vendedor"
          placeholder="Nombre del vendedor">
      </div>
      <div class="col-md-3">
        <label for="street1_id" class="control-label ">Estado</label>
        <select class="form-control" id="estado" name="estado">
          <option value="1">Pendiente de pago</option>
          <option value="2">Cancelado</option>
          <option value="3">Anulado</option>
        </select>
      </div>
      <div class="col-md-6">
        </br>
        <button for="" type="submit" class="btn btn-primary">Buscar Nota de pedido</button>

      </div>

    </div>
    {!! Form::close() !!}


    <div class="form-group col-md-12">
      <div class="col-md-12">
        <table class="table table-bordered">
          <thead>

            <tr align="center" class="bg-primary">
              <th scope="col">&nbsp;</th>
              <th>N. Pedido</th>
              <th scope="col">Cliente</th>
              <th scope="col">Vendedor</th>
              <th scope="col">Estado</th>
              <th scope="col">Total</th>

            </tr>
          </thead>
          <tbody>
            @if(count($notapedidos)>0)
            @foreach ($notapedidos as $notapedido)
            <tr>
              {{ Form::open(array('action' => 'NotaPedidoController@seleccionarNotaPedido', 'method' => 'POST' )) }}
              <td align="center">

                <button for="" type="submit" name="nota_pedido_id" value="{{$notapedido->id}}"
                  class="btn btn-primary btn-sm">Seleccionar</button>

                {{--  {{ route ('registrarNotaPedido',[$notapedido->dni])}} --}}


              </td>
              <td align="center">{{$notapedido->id}}</td>
              <td>

                {{Form::text("nameCustomer", 
                                      old("nameCustomer") ? old("nameCustomer") : (!empty($notapedido) ? $notapedido->nameCustomer: null),
                                      [
                                         "class" => "control-label",
                                         "readonly" =>"true",
                                         "style"=>"
                                         outline: none;
                                         background-color: #ffff;
                                         border: 0;",
                                         "placeholder" => "Username",
                                      ])
                         }}
                {{--  {{$notapedido->nameCustomer}}</td> --}}
              <td>{{$notapedido->name}}</td>
              <td>
                @if($notapedido->estadoNotaPedido==1)
                Pendiente de Pago
                @elseif ($notapedido->estadoNotaPedido==2)
                Cancelado
                @endif
              </td>
              <td>{{$notapedido->total}}</td>

              {!! Form::close() !!}
            </tr>
            @endforeach

            @endif


          </tbody>
        </table>
      </div>


    </div>

  </div>
</div>
@endsection
