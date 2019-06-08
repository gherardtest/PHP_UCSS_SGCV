@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> 
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Nombre Producto</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Nombre Producto">
                            </div>
                                <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Buscar Producto</button>
                              </div>
                          </div>

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead >
                                      <tr align = "center" class="bg-primary">
                                      <th scope="col" >&nbsp;</th>
                                      <th scope="col">Código</th>
                                      <th scope="col">Producto</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Unidad Medida</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($products as $producto)
                                    <tr>
                                        <td align = "center">
                                          <a href="/registrarNotaPedido" class="">
                                           Añadir
                                          </a>
                                        </td>
                                        <td align = "center" >{{$producto->id}}</td>
                                        <td>{{$producto->descripcion}}</td>
                                        <td> {{$producto->precio}}</td>
                                        <td>{{$producto->unidadMedida}}</td>
                                    </tr>
                                    @endforeach
                                     
                                  </tbody>
                              </table>
                              </div>
                              
                          </div>
                      </form>
                </div>
            </div>
@endsection
