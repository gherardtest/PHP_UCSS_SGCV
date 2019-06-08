<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//---------1. COMPRAS----------------------------------

//JEFE DE COMPRAS
////Consultar Requerimientos
Route::get('/consultarRequerimiento', 'HomeController@conreq');

////Consultar Proveedor
Route::get('/consultarProveedor', function () { return view('conprov'); });
////Registrar Solicitud de Proforma
Route::get('/registroSolicitudProforma', function () { return view('regsolpro'); });

//AUXILIAR DE COMPRAS
////Consultar Solicitudes de Proforma
Route::get('/consultarSolicitudProforma', function () { return view('consolpro'); });
////Registrar Orden de Compra
Route::get('/registrarOrdenCompra', function () { return view('regordcom'); });

//AUXILIAR DE ALMACEN
////Consultar Nota de Pedido
Route::get('/consultarNotaPedido', function () { return view('connotped'); });
////Registrar Kardex
Route::get('/registrarKardex', function () { return view('regkar'); });

//-----------2. VENTAS-----------------------------------

//JEFE DE VENTAS
////Registrar Requerimientos
Route::get('/registrarRequerimientos', function () { return view('regreq'); });

//EJECUTIVO DE VENTAS

////Registrar Cliente
Route::get('/registrarCliente', 'CustomerController@create');

Route::post('/registrarCliente', 'CustomerController@store');
//Route::post('/registrarCliente', function () { return view('regcli'); });

Route::get('/clientes','CustomerController@index');
Route::post('/clientes','CustomerController@store');


////Consultar Cliente
Route::get('/consultarCliente', 'CustomerController@index');
////Consultar Cliente
Route::post('/consultarCliente', 'CustomerController@show');


////Consultar Producto
Route::get('/consultarProducto', 'ProductoController@index');
////Registrar Nota de Pedido
Route::get('/registrarNotaPedido','NotaPedidoController@index' ); 
// function () { return view('regnotped');}
////Registrar Solicitud de Transporte
Route::get('/registrarSolicitudTransporte', function () { return view('regsoltra'); });

//CAJERO
////Registrar Comprobante de Pago
Route::get('/registrarComprobantePago', 'ComprobantePagoController@index');

Route::post('/registrarComprobantePago', 'ComprobantePagoController@show');

////Consultar Nota de Pedido
Route::get('/consultarNotaPedido', 'NotaPedidoController@buscar');
Route::post('/consultarNotaPedido', 'NotaPedidoController@show' );
Route::post('/select', 'NotaPedidoController@seleccionarNotaPedido' );
//------------3. TRANSPORTES--------------------------------

//ENCARGADO DE TRANSPORTE
////Consultar Transportistas
Route::get('/consultarTransportistas', function () { return view('contrans'); });
////Consultar Solicitud de Transporte
Route::get('/consultarSolicitudTransporte', function () { return view('consoltra'); });
////Registrar Orden de Transporte
Route::get('/registrarOrdenTransporte', function () { return view('regordtra'); });
