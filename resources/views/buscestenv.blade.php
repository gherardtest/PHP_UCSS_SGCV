@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Estado de Envío</div>

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
                        {{ Form::open(array('action' => 'OrdenTransporteController@buscarOrdenTransporte', 'method' => 'POST' )) }}
                        <div class="form-group col-md-12"> <!-- Tipo documento -->
                            <div class="col-md-6">
                              <label for="street1_id" class="control-label ">Número de Documento</label>
                              <input type="text" class="form-control textform" id="nrodoc" name="nrodoccliente"  placeholder="Número de documento del cliente">                             
                            </div>


                          <div class="col-md-6">
                            </br>
                            <button  type="submit" class="btn btn-primary">Buscar</button>
                          </div>
                                        
                </div>
                {!! Form::close() !!}
                
            
                  <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <table class="table table-bordered">
                          <thead >
                              <tr align = "center" class="bg-primary">
                                  <th>Cod Ord. Trans</th> 
                                  <th >Doc Cliente</th>
                                  <th >Cliente</th>
                                  <th >Direccion Envio</th>
                                  <th >Fecha envio</th>     
                                  <th >Estado</th>   
                              </tr>
                          </thead>      
                          
                           
                            @if(count($OrdenesTransportes)>0)    
                            @foreach ($OrdenesTransportes as $item)
                            <tr >  
                              <td >{{$item->codOrdTrans}}</td>  
                              <td >{{$item->nrodoc}}</td>  
                              <td >{{$item->nameCustomer}}</td>    
                              <td >{{$item->direccion_envio}}</td>
                              <td >{{$item->fecha_envio}}</td>                                                              
                              <td scope="col">{{$item->descripcion}}</td> 
                            </tr> 
                            @endforeach  
                            @endif                                                          
                                         
                           
                          
                      </table>
                      </div>           
                     
                  </div>
             
        </div>
    </div>
@endsection
