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
                        {{ Form::open(array('action' => 'CustomerController@show', 'method' => 'POST' )) }}
                        <div class="form-group col-md-12"> <!-- Tipo documento -->
                            <div class="col-md-6">
                              <label for="street1_id" class="control-label ">Número de Documento</label>
                              <input type="text" class="form-control textform" id="nrodoc" name="nrodoc"  placeholder="Número de documento del cliente">                             
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
                              <th >Cliente</th>
                              <th >N. Pedido</th>
                              <th >N. Transporte</th>                                                     
                              <th scope="col">Estado</th>           
                              <tr>
                          </thead>      
                          
                          <tr >                                                                   
                                <td >Gherard</td>    
                                <td >1</td>
                                <td >2</td>                                                              
                                <td scope="col">Enviado</td>           
                                <td>
                            </thead>   
                          
                      </table>
                      </div>           
                     
                  </div>
             
        </div>
    </div>
@endsection
