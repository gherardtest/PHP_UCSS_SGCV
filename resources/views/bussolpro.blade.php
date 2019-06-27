@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto - Requerimiento</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> 
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Número Proforma</label>
                                <input type="text" class="form-control textform" id="nameprod" name="nameprod"  placeholder="Número Proforma">
                            </div>
                                <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Buscar Solicitud de Proforma</button>
                              </div>
                          </div>
                        </form>
                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                                    <table class="table table-bordered" id="tablaDetalle">
                                            <thead>
                                                <tr class="bg-primary">
                                                {{-- <th scope="col">Item</th> --}}
                                                <th scope="col"></th>
                                                <th scope="col">Número Proforma</th>
                                                <th scope="col" >Número Requerimiento</th>
                                                <th scope="col">Proveedor</th>
                                                <th scope="col">Fecha</th>
                                                </tr>
                                            </thead>
                                            <tr >         
                                                  <td >Seleccionar</td>                 
                                                  <td >1</td>    
                                                  <td >2</td>
                                                  <td >Proveedor SAC</td> 
                                                  <td >26/06/2019</td>                                                                                  
                                            </tr>   
                
                                        </table>
                              </div>
                              
                          </div>
                      
                </div>
            </div>
@endsection
