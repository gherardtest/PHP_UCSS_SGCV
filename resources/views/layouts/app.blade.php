<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mayorista S.A.C.') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="//bootswatch.com/3/flatly/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script>
            function calculo(cantidad,precio,inputtext,totaltext){
	
                /* Parametros:
                cantidad - entero con la cantidad
                precio - entero con el precio
                inputtotal - nombre del elemento del formulario donde ira el total
                */
                
                // Calculo del subtotal
                
                subtotal = precio*cantidad;
                inputtext.value=subtotal;
                console.log('precio'+precio);
                console.log('cantidad'+cantidad);
                console.log('subtotal'+subtotal);
                totalN.value =  subtotal;



               
                //Actualizar el total
                // Utilizamos el eval. Ya que el valor es un texto y si lo tratamos como tal
                // es como si estuviesemos manipulando una cadena.
               // total = eval(totaltext.value);
               //totaltext.value =  subtotal;
            }
            $(document).ready(function() {
                $(function() {    
                    $("#tablaDetalle").on("change", "input", function(){
                    var row = $(this).closest("tr");
                    var cantidad = parseFloat(row.find("input:eq(2)").val());
                    var precio = parseFloat(row.find("input:eq(3)").val());
                    var subtotal = parseInt(cantidad, 10) * parseFloat(precio);
                    row.find("input:eq(4)").val(isNaN(subtotal) ? "" : subtotal.toFixed(2));
                    console.log('cargo ');
                    var total = 0;
                    var igv =0;
                        $(".subtotal").each(function () {
                            var stval = parseFloat($(this).val());
                            total += isNaN(stval) ? 0 : stval;
                        
                        });
                        var stval = parseFloat(total);
                        igv = 0.18 * isNaN(stval) ? 0 : stval;;
                        $('.total').val(total.toFixed(2));
                        $('.igv').val((igv*0.18).toFixed(2));
                    });  
                    $("#tablaDetalle").on("onload", "input", function(){
                        console.log('cargo ');
                        var row = $(this).closest("tr");
                        var cantidad = parseFloat(row.find("input:eq(2)").val());
                        var precio = parseFloat(row.find("input:eq(3)").val());
                        var subtotal = parseInt(cantidad, 10) * parseFloat(precio);
                        row.find("input:eq(4)").val(isNaN(subtotal) ? "" : subtotal.toFixed(2));
                
                        var total = 0;
                        var igv =0;
                        $(".subtotal").each(function () {
                            var stval = parseFloat($(this).val());
                            total += isNaN(stval) ? 0 : stval;
                            
                        });
                        var stval = parseFloat(total);
                        igv = 0.18 * isNaN(stval) ? 0 : stval;;
                        $('.total').val(total.toFixed(2));
                        $('.igv').val((igv*0.18).toFixed(2));
                    });  
                    // mueve el código del .delete-row fuera del controlador del input
                    // y hazlo delegado (esto creo que es necesario, aunque no estoy seguro)
                    $("#tablaDetalle").on("click", '.delete-row', function(){
                        // aquí tendrás que volver a leer los valores de las variables usadas (p.e. total)
                        var total = $('.total').val();
                        var $fila = $(this).parents('tr');
                        var valsub = parseFloat($fila.find('input:eq(4)').val());
                        new Promise(function(done){
                            total -= isNaN(valsub) ? 0 : valsub;
                            $('.total').val(total.toFixed(2));
                            done();
                        })
                        .then(function(){
                            var id0 = parseFloat($fila.find('#id_detalleventa-0-subtotal').val(0));
                        })
                    });
                });
            });
            function vuelto(total,totalpagado){
	
                /* Parametros:
                cantidad - entero con la cantidad
                precio - entero con el precio
                inputtotal - nombre del elemento del formulario donde ira el total
                */
                
                // Calculo del subtotal
                
                var totalvuelto=0;
                totalvuelto = totalpagado - total;

                vuelto.value=totalvuelto;
               

            }
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->

                    <a href="{{ url('/home') }}">
                      <img src="img/Icono.png" alt="Mayorista S.A.C." height="50" width="50">
                    </a>

                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Mayorista S.A.C.') }}
                    </a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                          <!--  <li><a href="{{ url('/login') }}"></a></li>
                            <li><a href="{{ url('/register') }}"></a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
              <div class="col-md-3">
                  @include('includes.menu')
              </div>
              <div class="col-md-9">
                    @include('partials.sucess')
                    @include('partials.error')
                  @yield('content')
              </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
