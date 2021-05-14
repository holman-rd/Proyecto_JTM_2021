<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JTM SISTEMAS</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
        integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

    </style>
</head>

<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top" id="nav">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                @if (!Auth::guest())
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                @endif
                <!-- Branding Image -->
                <a id="title" class="navbar-brand" href="{{ url('/') }}"><img src="{{URL::asset('assets/img/logos/jtm2.png')}}" style="height: 25px; width: 190px;"/></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        {{-- <li><a href="{{ url('/login') }}">Iniciar Sesion</a></li> --}}
                        {{-- <li><a href="{{ url('/register') }}">Registrar</a></li> --}}
                    @else
                        <li><a id="menu" href="{{ url('/home') }}"><i class=""></i><i class="fas fa-home"></i>
                                Inicio</a></li>
                        <li class="dropdown">
                            <a id="name" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fas fa-align-justify"></i> Modulos <span
                                    class="caret"></span></a>

                            <ul class="dropdown-menu" role="menu">
                              
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('ClienteController@index') }}"><i id="iconos" class="fa fa-btn fas fa-users"></i>Clientes</a></li>
                                
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('CategoriaController@index') }}"><i id="iconos" class="fas fa-project-diagram"></i> Categoría</a></li>

                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('EstadoTrabajoController@index') }}"><i id="iconos" class="fa fa-btn fas fa-history"> </i>Estado Trabajo</a></li>
                        
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('EmpresaController@index') }}"><i id="iconos" class="fas fa-building">  </i>   Empresa</a></li>

                                <li><a href="{{ action('DispositivoController@index') }}"><i id="iconos" class="fa fa-btn fas fa-laptop-medical"></i>Dispositivos</a></li>
                                <li><a href="{{ action('TrabajoController@index') }}"><i id="iconos" class="fa fa-btn fas fa-wrench"> </i>Trabajos</a></li>
                                <li><a href="{{ url('/usuario') }}"><i id="iconos" class="fa fa-btn fas fa-user-check"></i>Usuarios</a></li>
                                <li><a href="{{ action('FacturaController@index') }}"><i id="iconos" class="fas fa-file-invoice-dollar"></i> Facturas</a></li>
                                <li><a href="{{ action('DetalleFacturaController@index') }}"><i id="iconos" class="fas fa-file-alt"></i> Detalle Factura</a></li>
                                <li><a href="{{ action('ImprimirFacturaController@index') }}"><i id="iconos" class="fas fa-print"></i> Imprimir Factura</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="name" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fas fa-user-tie"></i>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar
                                        Sesion</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
