@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Producto</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
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
                                      <th scope="col" >Check</th>
                                      <th scope="col">Código</th>
                                      <th scope="col">Producto</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Precio</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >1</td>
                                          <td>Gaseosa 1L</td>
                                          <td>
                                            <select class="form-control" id="cantProd">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                          </td>
                                          <td>3.50</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >2</td>
                                          <td>Arroz 1Kg</td>
                                          <td>
                                            <select class="form-control" id="cantProd">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                          </td>
                                          <td>5.50</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >3</td>
                                          <td>Frejoles 1Kg</td>
                                          <td>
                                            <select class="form-control" id="cantProd">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                          </td>
                                          <td>2.20</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >4</td>
                                          <td>Galleta Soda</td>
                                          <td>
                                            <select class="form-control" id="cantProd">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                          </td>
                                          <td>1.50</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">Cargar Producto</button>
                             </div></br>
                          </div>
                      </form>
                </div>
            </div>
@endsection
