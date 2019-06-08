@extends('layouts.app')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar Cliente</div>

                <div class="panel-body">

                      <form action="" method="POST">
                        {{ csrf_field() }}

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label ">DNI / RUC</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="nrodoc"  placeholder="Numero de documento del cliente">
                              </div>

                          </div>

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Cliente</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="nameCustomer"  placeholder="Nombres del Cliente">
                              </div>

                          </div>


                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Email</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="email"  placeholder="Email del cliente">
                              </div>
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control textform" id="street1_id" name="phone"  placeholder="Telefono de referéncia cliente">
                              </div>
                          </div>

                          <div class="form-group col-md-12"> <!-- Street 1 -->

                            <div class="col-md-6">
                                    <button for="" type="submit" class="btn btn-primary">Registrar Cliente</button>
                            </div>

                          </div>

                      </form>

                </div>
            </div>
@endsection
