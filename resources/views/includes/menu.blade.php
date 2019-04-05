<div class="panel panel-primary">
    <div class="panel-heading">Menú</div>

    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">

          @if (auth()->check())
          <li @if(request()->is('home')) class="active" @endif><a href="/home">Bienvenido</a></li>
          <!-- 1. COMPRAS -->
          <!-- JEFE DE COMPRAS -->
          @if (auth()->user()->role==1)
          <li @if(request()->is('consultarRequerimiento')) class="active" @endif><a href="/consultarRequerimiento">Consultar Requerimientos</a></li>
          <li @if(request()->is('consultarProveedor')) class="active" @endif><a href="/consultarProveedor">Consultar Proveedor</a></li>
          <li @if(request()->is('registroSolicitudProforma')) class="active" @endif><a href="/registroSolicitudProforma">Registrar Solicitud de Proforma</a></li>
          @endif

          @if (auth()->user()->role==2)
          <!-- AUXILIAR DE COMPRAS -->
          <li @if(request()->is('consultarSolicitudProforma')) class="active" @endif><a href="/consultarSolicitudProforma">Consultar Solicitudes de Proforma</a></li>
          <li @if(request()->is('registrarOrdenCompra')) class="active" @endif><a href="/registrarOrdenCompra">Registrar Orden de Compra</a></li>
          @endif

          @if (auth()->user()->role==3)
          <!-- AUXILIAR DE ALMACEN -->
          <li @if(request()->is('consultarNotaPedido')) class="active" @endif><a href="/consultarNotaPedido">Consultar Nota de Pedido</a></li>
          <li @if(request()->is('registrarKardex')) class="active" @endif><a href="/registrarKardex">Registrar Kardex</a></li>
          @endif

          <!-- 2. VENTAS -->
          <!-- JEFE DE VENTAS -->
          @if (auth()->user()->role==4)
          <li @if(request()->is('registrarRequerimientos')) class="active" @endif><a href="/registrarRequerimientos">Registrar Requerimientos</a></li>
          @endif

          @if (auth()->user()->role==5)
          <!-- EJECUTIVO DE VENTAS -->
          <li @if(request()->is('registrarCliente')) class="active" @endif><a href="/registrarCliente">Registrar Cliente</a></li>
          <li @if(request()->is('consultarCliente')) class="active" @endif><a href="/consultarCliente">Consultar Cliente</a></li>
          <li @if(request()->is('consultarProducto')) class="active" @endif><a href="/consultarProducto">Consultar Producto</a></li>
          <li @if(request()->is('registrarNotaPedido')) class="active" @endif><a href="/registrarNotaPedido">Registrar Nota de Pedido</a></li>
          <li @if(request()->is('registrarSolicitudTransporte')) class="active" @endif><a href="/registrarSolicitudTransporte">Registrar Solicitud de Transporte</a></li>
          @endif

          @if (auth()->user()->role==6)
          <!-- CAJERO -->
          <li @if(request()->is('registrarComprobantePago')) class="active" @endif><a href="/registrarComprobantePago">Registrar Comprobante de Pago</a></li>
          <li @if(request()->is('consultarNotaPedido')) class="active" @endif><a href="/consultarNotaPedido">Consultar Nota de Pedido</a></li>
          @endif

          <!-- 3. TRANSPORTE -->
          <!-- ENCARGADO DE TRANSPORTE -->
          @if (auth()->user()->role==7)
          <li @if(request()->is('consultarTransportistas')) class="active" @endif><a href="/consultarTransportistas">Consultar Transportistas</a></li>
          <li @if(request()->is('consultarSolicitudTransporte')) class="active" @endif><a href="/consultarSolicitudTransporte">Consultar Solicitud de Transporte</a></li>
          <li @if(request()->is('registrarOrdenTransporte')) class="active" @endif><a href="/registrarOrdenTransporte">Registrar Orden de Transporte</a></li>
          @endif

          @endif

        </ul>
    </div>
</div>
