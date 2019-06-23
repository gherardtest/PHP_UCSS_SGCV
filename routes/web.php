<?php
use Illuminate\Support\Facades\App;

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

Route::post('/selectcli','CustomerController@seleccionarCliente');


////Consultar Cliente
Route::get('/consultarCliente', 'CustomerController@index');
////Consultar Cliente
Route::post('/consultarCliente', 'CustomerController@show');

Route::bind('Producto', function($slug){
    return App\Producto::where('slug',$slug)->first();
});
////Consultar Producto
Route::get('/consultarProducto', 'ProductoController@index');
////Registrar Nota de Pedido
Route::get('/registrarNotaPedido','NotaPedidoController@index' ); 
Route::post('/insertarNotaPedido','NotaPedidoController@store' ); 

//Agregar producto a detalle Nota pedido
Route::post('/addItem','DetalleNotaPedidoController@agregarProducto');
Route::post('/updItem','DetalleNotaPedidoController@actualizarDetalle');
Route::post('/delItem','DetalleNotaPedidoController@eliminarDeDetalle');
// function () { return view('regnotped');}
////Registrar Orden de Transporte
Route::get('/registrarOrdenTransporte', function () { return view('regsoltra'); });


////Buscar Estado Envío
Route::get('/buscarEstadoEnvio', function () { return view('buscestenv'); });
//Buscar orden de transporte
Route::post('/buscarOrdenTransporte', function () { return view('buscestenv'); });


//CAJERO
////Registrar Comprobante de Pago
Route::get('/registrarComprobantePago', 'ComprobantePagoController@index');

Route::post('/registrarComprobantePago', 'ComprobantePagoController@show');
Route::post('/registrarCP', 'ComprobantePagoController@store');
////Consultar Nota de Pedido
Route::get('/consultarNotaPedido', 'NotaPedidoController@buscar');
Route::post('/consultarNotaPedido', 'NotaPedidoController@show' );
Route::post('/select', 'NotaPedidoController@seleccionarNotaPedido' );

//------------3. TRANSPORTES--------------------------------

//ENCARGADO DE TRANSPORTE
////Generar Orden de Transporte
Route::get('/generarOrdenTransporte', function () { return view('genordtra'); });
////Buscar Orden de Transporte
Route::get('/buscarOrdenTransporte', function () { return view('busordtrans'); });
////Registrar Estado de Envío
Route::get('/registrarEstadoEnvio', function () { return view('regestenvio'); });

