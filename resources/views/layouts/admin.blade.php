<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700')}}" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    

    </head>
    <body id="page-top">



        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ action('StartController@index') }}/#page-top"><img src="{{URL::asset('assets/img/logos/jtm2.png')}}" style="height: 35px; width: 220px;"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">

                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('DispositivoController@index') }}">Dispositivo</a></li> -->

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Inicio
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item js-scroll-trigger" href="{{ action('StartController@index') }}/#services">Servicios</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item js-scroll-trigger" href="{{ action('StartController@index') }}/#portfolio">Publicidad</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item js-scroll-trigger" href="{{ action('StartController@index') }}/#about">Acerca de</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item js-scroll-trigger" href="{{ action('StartController@index') }}/#team">Equipo</a>
                          </div>
                        </li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger"  href="{{URL::action('LineaController@index',0)}}">Estado</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('ContactenosController@index') }}">Cont??ctenos</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ action('HomeController@index') }}"><i class="fas fa-sign-in-alt"></i>  Login</a></li>


                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>

            <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                @yield('head')
                
            </div>
        </header>

        <div class="">
            @yield('contenido')
        </div>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright ?? Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">REPARACION GENERAL DE IMPRESORAS</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="" />
                                    <p>Podras encontrar la soluci??n a los diferentes da??os que puedan ocurrirle a tu impresora.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">MANTENIMIENTO DE IMPRESORAS</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="" />
                                    <p>Demasiado importante ralizar la limpieza y lubricacion de todas las partes de la impresora y as?? garantizar un funcionamiento correcto.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">LIMPIEZA DE INYECTORES</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="" />
                                    <p>Cuando se deja de imprimir durante un tiempo largo, los inyectores de las impresoras se tapan y para esto es necesario hacer la respectiva limpieza o el cambio de inyectores.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">FORMATEO DE COMPUTADORES</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/9.jpg" alt="" />
                                    <p>Instalacion del windows y de los programas solicitados por el cliente.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">RECARGA DE TONER</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/7.jpg" alt="" />
                                    <p>Las impresoras laser a diferencia de las de inyeccion o cartucho, utilizan un polvillo especial para imprimir.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">VENTA DE TINTAS</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="" />
                                    <p>Venta de tintas genericas para las impresoras marca epson.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JS-->
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Third party plugin JS-->
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js')}}"></script>
        <!-- Contact form JS-->
        <script src="{{asset('assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>


    </body>
</html>
