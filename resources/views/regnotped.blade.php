@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Nota de Pedido</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                              <div class="col-md-6">
                                  <select class="form-control" id="tipoDoc">
                                      <option value="0">Tipo de documento</option>
                                      <option value="1">DNI</option>
                                      <option value="2">RUC</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                <a href="/consultarCliente" class="btn btn-primary">
                                  Buscar Cliente
                                </a>
                              </div>
                          </div>

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label ">Número de Documento</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Numero de documento del cliente">
                              </div>

                          </div>

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Nombre de Cliente</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Nombres del Cliente">
                              </div>

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Apellido de Cliente</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Apellidos del cliente">
                              </div>

                          </div>


                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Dirección</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Direccion del cliente">
                              </div>
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Telefono del cliente">
                              </div>
                          </div>

                          <div class="form-group col-md-12"> <!-- Street 1 -->
                            <div class="col-md-6">
                              <a href="/consultarProducto" class="btn btn-primary">
                                Nuevo Producto
                              </a>
                            </div>
                          </div>

                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead>
                                      <tr class="bg-primary">
                                      <th scope="col">Nro Pedido</th>
                                      <th scope="col">Desc. Prod</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Precio</th>
                                      <th scope="col">Subtotal</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>Gaseosa 1L</td>
                                          <td>2</td>
                                          <td>3.50</td>
                                          <td>7.00</td>
                                      </tr>

                                      <tr>
                                              <th ></th>
                                              <td></td>
                                              <td></td>
                                              <td class="bg-info">Total</td>
                                              <td>7.00</td>
                                      </tr>

                                  </tbody>
                              </table>
                              </div>
                          </div>

                      </form>

                </div>
            </div>
@endsection
