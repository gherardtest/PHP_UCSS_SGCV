@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto - Requerimiento</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> 
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Nombre Producto</label>
                                <input type="text" class="form-control textform" id="nameprod" name="nameprod"  placeholder="Nombre Producto">
                            </div>
                                <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Buscar Producto</button>
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
                                                <th scope="col">Cod. prod</th>
                                                <th scope="col" >Desc. Prod</th>
                                                <th scope="col">Stock Actual</th>
                                                <th scope="col">Cantidad a Solicitar (Editable)</th>
                                                <th scope="col">Precio</th>
                                                </tr>
                                            </thead>
                                            <tr >                                                                   
                                                  <td >Añadir</td>   
                                                  <td >1</td>    
                                                  <td >Leche</td>
                                                  <td >5</td> 
                                                  <td >50</td>       
                                                  <td >1.50</td>                                         
                                            </tr>   
          
                                        </table>
                              </div>
                              
                          </div>
                      
                </div>
            </div>
@endsection
