@extends ('layouts.admin')
@section ('head')
	<div class="masthead-subheading">¡BIENVENIDO A JTM SISTEMAS!</div>
    <div class="masthead-heading text-uppercase">INICIO</div>
    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{URL::action('LineaController@index',0)}}">VER LINEA DE SEGUIMIENTO</a>
@stop

@section ('contenido')
	

<head>
	<title>Inicio</title>
</head>

<body>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">En JTM Sistemas queremos ofrecer las mejores soluciones a sus problemas tecnológicos, a continuación se describen algunos de nuestros servicios...</h3>
            </div>
            <!-- servicios -->
            <div class="row text-center">
                <!--  M. impresora-->
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                    <div class="box-icon-inner decorate-rectangle decorate-color-primary-2"><span class="icon-xl linearicons-printer icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4 class="my-3">Mantenimiento de impresoras</h4>
                            <p class="text-muted">En JTM Sistemas realizamos el diagnóstico de su impresora y le ofrecemos las soluciones adecuadas para reparar su dispositivo.</p>
                        </div>
                    </div>
                </div>
                <!-- M. equipos -->
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                    <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-desktop icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4 class="my-3">Mantenimiento de equipos</h4>
                            <p class="text-muted">En JTM Sistemas realizamos el diagnóstico de su equipo de computo le ofrecemos las soluciones adecuadas para reparar su dispositivo.</p>
                        </div>
                    </div>
                </div>
                <!-- Actualizar informacion -->
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic">
                    <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-folder-download icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4 class="my-3">Actualización de software</h4>
                            <p class="text-muted">En JTM sistemas actualizamos el software de su dispositivo para mantenerlo al día, garatizando una actualización  óptima y funcional.</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nuestro Trabajo</h2>
                <h3 class="section-subheading text-muted">En JTM Sistemas nos importa la satisfacción de nuestros clientes, estos son algunos de los trabajos que hemos realizado...</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Reparacion general de impresoras</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Mantenimiento de impresoras</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Limpieza de inyectores</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/9.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Formateo de computadores</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/7.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Recarga de toner</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Venta de tintas</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ACERCA DE</h2>
                <h3 class="section-subheading text-muted">JTM sistemas ofrece los siguientes servicios</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Mantenimiento y reparación de impresoras</h4>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Formateo, actualización, reparación y mantenimiento de computadores</h4>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Recarga de toner y cartuchos</h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Equipo Desarrollador</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/holman.jpg" alt="" />
                        <h4>Holman Rincon</h4>
                        <p></p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/holman-rd" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Holman.Rincon17" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/camilo.jpg" alt="" />
                        <h4>Camilo Triana</h4>
                        <p></p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/camilotriana" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/camiloandres.trianamarquez/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/camiloandrestrianamarquez/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/miguel.jpg" alt="" />
                        <h4>Miguel Palacios</h4>
                        <p></p>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/MiguelPalaciosC" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/andres.palacios.5895" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/epson2.png" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/hp.png" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/canon2.png" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/acer2.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</body>



@stop

