@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
                <div class="panel-heading">Registrar Solicitud de Transporte</div>

                <div class="panel-body">

                      <form>

                          <div class="form-group col-md-12"> <!-- Tipo documento -->
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label " >Fecha Orden De transporte</label>
                                  <input type="text" class="form-control textform" disabled="true" id="street1_id" name="street1"   value="{{ date('d/m/Y H:i:s') }} " >
                             </div>
                             <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Nro Pedido</label>
                                  <input type="text" disabled="true"  class="form-control textform" id="street1_id" name="street1" value= "10">
                              </div>
                          </div>


                          <div class="form-group col-md-12"> <!-- Street 1 -->

                             <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Nombres del Vendedor</label>
                                  <input type="text" disabled="true"  class="form-control textform" id="street1_id" name="street1" value= "{{ Auth::user()->name }}"">
                              </div>
                          </div>


                          <div class="form-group col-md-12"> <!-- Street 1 -->

                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Fecha De Envío</label>
                                  <input class="form-control" type="date" value="2019-06-02" id="example-datetime-local-input">
                              </div>
                              <div class="col-md-6">
                                  <label for="street1_id" class="control-label">Horario de Envio</label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                    <option>8:00 am - 12:00 am</option>
                                    <option>1:00 pm - 5:00 pm</option>
                                    <option>5:00 pm - 7:00 pm</option>
                                    
                                  </select>
                              </div>
                          </div>
                          <div class="form-group col-md-12"> <!-- Street 1 -->

                            <div class="col-md-6">
                                <label for="street1_id" class="control-label">Dirección de Envío</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1" placeholder="Direcccion de entrega" value= "">
                            </div>
                        </div>
                        <div class="form-group col-md-12"> <!-- Street 1 -->

                            <div class="col-md-6">
                                <label for="street1_id" class="control-label">Nombre de Contacto</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1" placeholder="Contacto" value= "">
                            </div>
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label">Teléfono de Contacto</label>
                                <input type="text" class="form-control textform" id="street1_id" name="street1" placeholder="Teléfono" value= "">
                            </div>
                        </div>
                        <div class="form-group col-md-12"> <!-- Street 1 -->
                            <div class="col-md-6">
                                <label for="street1_id" class="control-label">Precio</label>
                                <input type="text" disabled="true2" class="form-control textform" id="street1_id" name="street1"  value= "S/. 30.00">
                            </div>
                        
                        </div>

                     
                          
                          <div class="col-md-6">
                              <label for="" class="control-label ">&nbsp;</label>
                                <a href="/registrarNotaPedido" class="btn btn-primary form-control">
                                  Registrar Orden de Transporte
                                </a>
                           </div>
                          

                      </form>

                </div>
            </div>
@endsection
