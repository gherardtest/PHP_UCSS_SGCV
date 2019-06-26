<div class="panel panel-primary">
    <div class="panel-heading">Menú</div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">

          @if (auth()->check())
          <!-- 1. COMPRAS -->
          <!-- JEFE DE COMPRAS -->
          @if (auth()->user()->role==1)
          <li @if(request()->is('registrarProveedor')) class="active" @endif><a href="/registrarProveedor">Registrar Proveedor</a></li>
          <li @if(request()->is('evaluarRequerimiento')) class="active" @endif><a href="/evaluarRequerimiento">Evaluar Requerimientos</a></li>
          <!--<li @if(request()->is('buscarRequerimiento')) class="active" @endif><a href="/buscarRequerimiento">Buscar Requerimientos</a></li>-->
          
          <!--<li @if(request()->is('registroSolicitudProforma')) class="active" @endif><a href="/registroSolicitudProforma">Registrar Solicitud de Proforma</a></li> -->
          @endif

          @if (auth()->user()->role==2)
          <!-- AUXILIAR DE COMPRAS -->
          <li @if(request()->is('registrarSolicitudProforma')) class="active" @endif><a href="/registrarSolicitudProforma">Registrar Solicitud de Proforma</a></li>
          <li @if(request()->is('registrarOrdenCompra')) class="active" @endif><a href="/registrarOrdenCompra">Registrar Orden de Compra</a></li>
          @endif
          
          <!-- RECEPCIONISTA -->
          @if (auth()->user()->role==8)
          <li @if(request()->is('asignarCotizacion')) class="active" @endif><a href="/asignarCotizacion">Asignar Cotización</a></li>
          @endif


          <!-- 2. VENTAS -->
          <!-- JEFE DE VENTAS -->
          @if (auth()->user()->role==4)
          <li @if(request()->is('registrarRequerimientos')) class="active" @endif><a href="/registrarRequerimientos">Registrar Requerimientos</a></li>
          @endif

          <!-- EJECUTIVO DE VENTAS -->
          @if (auth()->user()->role==5)          
          <!--<li @if(request()->is('registrarCliente')) class="active" @endif><a href="/registrarCliente">Registrar Cliente</a></li>-->
          <!--<li @if(request()->is('consultarCliente')) class="active" @endif><a href="/consultarCliente">Consultar Cliente</a></li>-->
          <!--<li @if(request()->is('consultarProducto')) class="active" @endif><a href="/consultarProducto">Consultar Producto</a></li>-->
          
          <li @if(request()->is('registrarNotaPedido')) class="active" @endif><a href="/registrarNotaPedido">Registrar Nota de Pedido</a></li>
          <li @if(request()->is('buscarEstadoEnvio')) class="active" @endif><a href="/buscarEstadoEnvio">Buscar Estado de Envío</a></li>
          <!--<li @if(request()->is('registrarSolicitudTransporte')) class="active" @endif><a href="/registrarSolicitudTransporte">Registrar Solicitud de Transporte</a></li>-->
          @endif
     

          @if (auth()->user()->role==6)
          <!-- CAJERO -->
          <li @if(request()->is('registrarComprobantePago')) class="active" @endif><a href="/registrarComprobantePago">Generar Comprobante de Pago</a></li>
          <li @if(request()->is('consultarNotaPedido')) class="active" @endif><a href="/consultarNotaPedido">Consultar Nota de Pedido</a></li>
          @endif

          <!-- 3. TRANSPORTE -->
          <!-- ENCARGADO DE TRANSPORTE -->
          @if (auth()->user()->role==7)
          <li @if(request()->is('generarOrdenTransporte')) class="active" @endif><a href="/generarOrdenTransporte">Gestionar Entrega</a></li>
          <!-- <li @if(request()->is('consultarOrdenTransporte')) class="active" @endif><a href="/consultarOrdenTransporte">Buscar Orden de Transporte</a></li>  -->
          <li @if(request()->is('registrarEstadoEnvio')) class="active" @endif><a href="/registrarEstadoEnvio">Cerrar Orden de Transporte</a></li>
          @endif

          @endif

        </ul>
    </div>
</div>
