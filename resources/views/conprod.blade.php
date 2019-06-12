@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto</div>

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
                                        {{ Form::open(array('action' => 'DetalleNotaPedidoController@agregarProducto', 'method' => 'POST' )) }}
                                        <td align = "center">
                                         {{Form::submit('Añadir')}}
                                        </td>
                                        <td align = "center" >
                                            {{Form::text("productoid", old("productoid") ? old("productoid") : (!empty($producto) ? $producto->id: null),
                                            [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                            }} 
                                        </td>

                                      
                                        <td>
                                            {{Form::text("productoname", old("productoname") ? old("productoname") : (!empty($producto) ? $producto->descripcion: null),
                                            [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                            }} 
                                          
                                        </td>
                                        <td> 
                                            {{Form::text("productoprecio", old("productoprecio") ? old("productoprecio") : (!empty($producto) ? $producto->precio: null),
                                            [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                            }} 
                                         </td>
                                        <td>
                                            {{Form::text("productounidadmedida", old("productounidadmedida") ? old("productounidadmedida") : (!empty($producto) ? $producto->unidadMedida: null),
                                            [ "class" => "control-label inputNoBorder", "readonly" =>"true" ])
                                            }}
                                        </td>
                                        {!! Form::close() !!}
                                    </tr>
                                    @endforeach
                                     
                                  </tbody>
                              </table>
                              </div>
                              
                          </div>
                      
                </div>
            </div>
@endsection
