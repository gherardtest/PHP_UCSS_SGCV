@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
        <div class="panel-heading">Buscar Personal</div>

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
                  <div class="col-md-6">
                      <label for="street1_id" class="control-label ">Nombre Personal</label>
                      <input type="text" class="form-control textform" id="orden_transporte_id" name="orden_transporte_id"  placeholder="Nombre Personal">
                  </div>
                  
                  <div class="col-md-6">
                        <label for="" class="control-label ">&nbsp;</label>
                          <a href="/xxx" class="btn btn-primary form-control">
                            Buscar Personal
                          </a>
                </div>
                                        
                </div>
               
            
                  <div class="form-group col-md-12">
                    <div class="col-md-12">
                      <table class="table table-bordered">
                        <thead >
                          <tr align = "center" class="bg-primary">
                              <th></th> 
                              <th>Cod Personal</th> 
                              <th >Personal</th>
                              <th >Email</th>
                              <th >Teléfono</th>                                                                 
                          </tr>
                      </thead> 
                      
                      <tr >                                                    

                            <td >Seleccionar</td>    
                            <td >1</td>
                            <td >Gherard Chipana</td> 
                            <td >gchipana@mayorista.pe</td>       
                            <td > 987376717 </td>        <!--Aquí se deberá poner los estados por evaluar y cuando se registra la evaluación se cambiará a aprobado.-->                                    
                      </tr>   

                      </table>
                      </div>
                      
                     
                  </div>
             
        </div>
    </div>
@endsection
