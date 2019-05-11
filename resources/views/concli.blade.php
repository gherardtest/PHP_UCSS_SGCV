@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Cliente</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Número de Documento</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Numero de documento del cliente">
                            </div>
                                <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Buscar Cliente</button>
                              </div>
                          </div>

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead >
                                      <tr align = "center" class="bg-primary">
                                      <th scope="col" >Check</th>
                                      <th scope="col">Código</th>
                                      <th scope="col">Cliente</th>
                                      <th scope="col">Teléfono</th>
                                      <th scope="col">Dirección</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >1</td>
                                          <td>Gherard Chipana</td>
                                          <td>987376717</td>
                                          <td>Los Olivos</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >2</td>
                                          <td>Junior Linares</td>
                                          <td>985632145</td>
                                          <td>Comas</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >3</td>
                                          <td>Edgar Flores</td>
                                          <td>985475632</td>
                                          <td>Puente Piedra</td>
                                      </tr>
                                      <tr>
                                          <td align = "center"><input type="checkbox"></td>
                                          <td align = "center" >4</td>
                                          <td>Deysi Rios</td>                                          
                                          <td>985632789</td>
                                          <td>San Martín de Porres</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              <div class="col-md-6">
                                  <a href="/registrarNotaPedido" class="btn btn-primary">
                                    Cargar Cliente
                                  </a>
                             </div></br>
                             <div class="col-md-6">
                                 <a href="/registrarCliente" class="btn btn-primary">
                                   Registrar Cliente
                                 </a>
                            </div>
                          </div>
                      </form>
                </div>
            </div>
@endsection
