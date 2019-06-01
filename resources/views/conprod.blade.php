@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Código Prod.</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Nombre Producto">
                            </div>
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
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                             Añadir
                                            </a>
                                          </td>
                                          <td align = "center" >1</td>
                                          <td>Gaseosa 1L</td>
                                          <td> 3.50</td>
                                          <td>Litros</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                          <a href="/registrarNotaPedido" class="">
                                             Añadir
                                            </a>
                                          </td>
                                          <td align = "center" >2</td>
                                          <td>Arroz 1Kg</td>
                                          <td>5.50</td>
                                          <td>Kilos</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                             Añadir
                                            </a>
                                          </td>
                                          <td align = "center" >3</td>
                                          <td>Frejoles 1Kg</td>
                                          <td>
                                            2.20
                                          </td>
                                          <td>Kilos</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                             Añadir
                                            </a>
                                          </td>
                                          <td align = "center" >4</td>
                                          <td>Galleta Soda</td>
                                          <td>
                                            1.50
                                          </td>
                                          <td>Unidades</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              
                          </div>
                      </form>
                </div>
            </div>
@endsection
