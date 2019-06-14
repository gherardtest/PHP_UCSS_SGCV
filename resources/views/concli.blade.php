@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Cliente</div>

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
                        {{ Form::open(array('action' => 'CustomerController@show', 'method' => 'POST' )) }}
                        <div class="form-group col-md-12"> <!-- Tipo documento -->
                          {{-- <div class="col-md-6">
                              <label for="street1_id" class="control-label ">Número de Documento</label>


                              <input type="text" class="form-control textform" id="nrodoc" name="nrodoc"  placeholder="Número de documento del cliente">
                             
                            </div>
                         --}}
                          <div class="col-md-6"> 
                            <label for="street1_id" class="control-label ">Nombre cliente</label>
                            <input type="text" class="form-control textform" id="nameCustomer" name="nameCustomer"  placeholder="Nombre del cliente">
                        </div>
                          <div class="col-md-6">
                            </br>
                            <button for="" type="submit" class="btn btn-primary">Buscar Cliente</button>
                            <a href="/registrarCliente" class="btn btn-primary">
                              Registrar Cliente
                            </a>
                          </div>
                              
                        </div>
                        {!! Form::close() !!}
                        
                    
                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead >
                                    
                                      <tr align = "center" class="bg-primary">
                                      <th scope="col" >&nbsp;</th>
                                      <th scope="col">Nro Documento</th>
                                      <th scope="col">Nombre o Razón Social</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Teléfono Referencia</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @if(count($acustomers)>0)
                                      @foreach ($acustomers as $customer)
                                      <tr>
                                          {{ Form::open(array('action' => 'CustomerController@seleccionarCliente', 'method' => 'POST' )) }}
                                          <td align = "center">
                                              {{-- {{ route ('registrarNotaPedido',[$customer->dni])}} --}}
                                             
                                              <button for="" type="submit" name="nrodoccliente" value="{{$customer->nrodoc}}" class="btn btn-primary btn-sm">Seleccionar</button>
                                             
                                          </td>
                                          {{Form::text("customerid", old("customerid") ? old("customerid") : (!empty($customer) ? $customer->id: null),
                                              [ "class" => "control-label inputNoBorder", "readonly" =>"true","display" =>"none"  ])
                                              }}
                                          <td align = "center"  value="{{$customer->nrodoc}}">
                                            {{$customer->nrodoc}}</td>
                                          <td >
                                              {{Form::text("nameCustomer", old("nameCustomer") ? old("nameCustomer") : (!empty($customer) ? $customer->nameCustomer: null),
                                              [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                              }}
                                          </td>
                                          <td>{{$customer->email}}</td>
                                          <td>{{$customer->phone}}</td>
                                          {!! Form::close() !!}
                                      </tr>
                                      @endforeach
                                    @else
                                      <div class="alert alert-dismissable alert-warning">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <h4>Mensaje del sistema!</h4>
                                        <p>No se encuentran registros</p>
                                      </div>
                                    @endif
                                     
                                     
                                  </tbody>
                              </table>
                              </div>
                              
                             
                          </div>
                     
                </div>
            </div>
@endsection
