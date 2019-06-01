@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Buscar Cliente</div>

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
                      <form action="/registrarCliente" method="POST">

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Número de Documento</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Numero de documento del cliente">
                            </div>
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label ">Nombre o Razón Social</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1"  placeholder="Numero de documento del cliente">
                            </div>
                                
                          </div>
                          <div class="form-group col-md-12">
                             <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Buscar Cliente</button>
                              </div>
                              <div class="col-md-6">
                                </br>
                                <button for="street1_id" type="submit" class="btn btn-primary">Registrar Cliente</button>
                              </div>
                          </div>
                          <div class="form-group col-md-12">
                            <div class="col-md-12">
                              <table class="table table-bordered">
                                  <thead >
                                      <tr align = "center" class="bg-primary">
                                      <th scope="col" >&nbsp;</th>
                                      <th scope="col">Nro Documento</th>
                                      <th scope="col">Nombre o Razón Social</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Teléfono Referencia</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                             Seleccionar
                                            </a>
                                          </td>
                                          <td align = "center" >1</td>
                                          <td>Gherard Chipana</td>
                                          <td>gchipana@gmail.com</td>
                                          <td>987376717</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                            Seleccionar
                                            </a>
                                          </td> <td align = "center" >2</td>
                                          <td>Junior Linares</td>
                                          <td>jlinares@gmail.com</td>
                                          <td>985632145</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                            Seleccionar
                                            </a>
                                          </td>
                                          <td align = "center" >3</td>
                                          <td>Edgar Flores</td>
                                          <td>eflores@gmail.com</td>
                                          <td>985475632</td>
                                      </tr>
                                      <tr>
                                          <td align = "center">
                                            <a href="/registrarNotaPedido" class="">
                                            Seleccionar
                                            </a>
                                          </td>
                                          <td align = "center" >4</td>
                                          <td>Deysi Rios</td>
                                          <td>deysi123@gmail.com</td>
                                          <td>985632789</td>
                                          
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              
                             
                          </div>
                      </form>
                </div>
            </div>
@endsection
