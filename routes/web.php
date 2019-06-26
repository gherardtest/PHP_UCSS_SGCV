<?php
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//---------1. COMPRAS----------------------------------

//JEFE DE VENTAS
////CUS01 Registrar Requerimientos
Route::get('/registrarRequerimientos', function () { return view('regreq'); });
////CUS01.01 Buscar Producto (Este será de Requerimiento)
Route::get('/buscarProductoReq', function () { return view('busprodreq'); });
////CUS01.02 Buscar Personal (Este será de Requerimiento)
Route::get('/buscarPersonalReq', function () { return view('busperreq'); });

//JEFE DE COMPRAS
////CUS02 Registrar Proveedor
Route::get('/registrarProveedor', function () { return view('regprov'); });
////CUS03 Evaluar Requerimientos
Route::get('/evaluarRequerimiento', function () { return view('evareq'); });
////CUS03.01 Buscar Requerimiento
Route::get('/buscarRequerimiento', function () { return view('busreq'); });

//AUXILIAR DE COMPRAS
////CUS04 Registrar Solicitud de Proforma
Route::get('/registrarSolicitudProforma', function () { return view('regsolpro'); });
////CUS04.01 Buscar Proveedor
Route::get('/buscarProveedor', function () { return view('busprov'); });

//RECEPCIONISTA
////CUS05 Asignar cotización a solicitud de proforma
Route::get('/asignarCotizacion', function () { return view('asigcot'); });
////CUS05.01 Buscar Solicitud de Proforma
Route::get('/buscarSolicitudProforma', function () { return view('bussolpro'); });

//AUXILIAR DE COMPRAS
////CUS06 Registrar Orden de Compra
Route::get('/registrarOrdenCompra', function () { return view('regordcom'); });


//-----------2. VENTAS-----------------------------------

//EJECUTIVO DE VENTAS
////CUS07 Registrar Nota de Pedido
Route::get('/registrarNotaPedido','NotaPedidoController@index' ); 
Route::post('/insertarNotaPedido','NotaPedidoController@store' );
////CUS01.01 Buscar Producto (Este será de Nota de Pedido)
Route::get('/consultarProducto', 'ProductoController@index');
Route::bind('Producto', function($slug){
    return App\Producto::where('slug',$slug)->first();
}); 
//Agregar producto a detalle Nota pedido
Route::post('/addItem','DetalleNotaPedidoController@agregarProducto');
Route::post('/updItem','DetalleNotaPedidoController@actualizarDetalle');
Route::post('/delItem','DetalleNotaPedidoController@eliminarDeDetalle');
// function () { return view('regnotped');}
////CUS07.01 Buscar Cliente
Route::get('/consultarCliente', 'CustomerController@index');
Route::post('/consultarCliente', 'CustomerController@show');
Route::post('/selectcli','CustomerController@seleccionarCliente');
////CUS07.01.01 Registrar Cliente
Route::get('/registrarCliente', 'CustomerController@create');
Route::post('/registrarCliente', 'CustomerController@store');
//Route::post('/registrarCliente', function () { return view('regcli'); });
Route::get('/clientes','CustomerController@index');
Route::post('/clientes','CustomerController@store');
////CUS07.02 Registrar Orden de Transporte
Route::get('/registrarOrdenTransporte', function () { return view('regsoltra'); });
Route::post('/insertarOrdenTransporte', 'OrdenTransporteController@store');

//CAJERO
////CUS08 Registrar Comprobante de Pago
Route::get('/registrarComprobantePago', 'ComprobantePagoController@index');
Route::post('/registrarComprobantePago', 'ComprobantePagoController@show');
Route::post('/registrarCP', 'ComprobantePagoController@store');
////CUS08.01 Buscar Nota de Pedido
Route::get('/consultarNotaPedido', function () { return view('connotped'); });
Route::get('/consultarNotaPedido', 'NotaPedidoController@buscar');
Route::post('/consultarNotaPedido', 'NotaPedidoController@show' );
Route::post('/select', 'NotaPedidoController@seleccionarNotaPedido' );

//EJECUTIVO DE VENTAS
////CUS09 Buscar Estado Envío
Route::get('/buscarEstadoEnvio','OrdenTransporteController@index');
//Buscar orden de transporte
Route::post('/buscarEstadoEnvio', 'OrdenTransporteController@buscarOrdenTransporte');


//------------3. TRANSPORTES--------------------------------

//ENCARGADO DE TRANSPORTE
////CUS10 Gestionar Entrega
Route::get('/generarOrdenTransporte', function () { return view('genordtra'); });
////CUS10.01 Buscar Orden de Transporte
Route::get('/buscarOrdenTransporte', 'OrdenTransporteController@show');
//Seleccionar orden de transporte
Route::post('/buscarOrdenTransporte', 'OrdenTransporteController@seleccionarOrdenTransporte');
////CUS01.02 Buscar Personal (Este será de Entregar)
Route::get('/buscarPersonalTra', function () { return view('buspertra'); });
 
////CUS11 Cerrar Orden Transporte
Route::get('/registrarEstadoEnvio', 'OrdenTransporteController@indexBuscarOrdenTrans');
Route::post('/updEstadoEnvio', 'OrdenTransporteController@actualizarEstadoEnvio');



