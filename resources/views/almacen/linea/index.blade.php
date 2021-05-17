@extends ('layouts.admin')
@section ('head')
	<div class="masthead-subheading">Estado de trabajo</div>
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
                <h2 class="section-heading text-uppercase">Estado de trabajo</h2>
                <h3 class="section-subheading text-muted">En JTM Sistemas puedes hacer el seguimiento de tu dispositivo para verificar su estado.</h3>
                @include('almacen.linea.search')
            </div>
        </div>

        <div class="container"><br>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Detalle del trabajo</h2>
                <h3 class="section-subheading text-muted">A continuación se describen los trabajos asociados al dispositivo.</h3>
            </div>
        </div>

        <div class="container"><br>
            <div class="text-center">
                 <div class="row" align="center"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                        <div class="table-responsive" align="center">
                            <table class="table table-striped table-bordered table-condensed table-hover" align="center">
                                <thead>
                                    <th>Fecha</th>
                                    <th>Serial</th>
                                    <th>Descripción</th>
                                    <th>Costo Trabajo</th>
                                </thead>
                                @foreach ($trabajo as $trab)
                                <tr>
                                    <td>{{ $trab->fecha_inicio}}</td>
                                    <td>{{ $trab->dispositivo_serial}}</td>   
                                    <td>{{ $trab->descripcion}}</td>
                                    <td>{{ $trab->costo_trabajo}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Linea de seguimiento</h2>
                <h3 class="section-subheading text-muted">A continuación se muestra la linea de seguimiento de los trabajos asociados al dispositivo.</h3>
            </div>
            <!-- servicios -->
        </div>

        <div align="center">            

            @foreach ($trabajo as $trab)
                
                @if($trab->estado_trabajo_id_estado==1)
                    <h3 class="section-subheading text-muted">Fecha de trabajo: {{ $trab->fecha_inicio}}</h3>
                    <img src="{{asset(('img/bodega.png'))}}" alt="{{$trab->id_trabajo}}" height="1200px" width="1200px" class="img-thumbnail"><br><br><br><br><br>
                @endif
                @if($trab->estado_trabajo_id_estado==2)
                    <h3 class="section-subheading text-muted">Fecha de trabajo: {{ $trab->fecha_inicio}}</h3>
                    <img src="{{asset(('img/diagnostico.png'))}}" alt="{{$trab->id_trabajo}}" height="1200px" width="1200px" class="img-thumbnail"><br><br><br><br><br>
                @endif
                @if($trab->estado_trabajo_id_estado==3)
                    <h3 class="section-subheading text-muted">Fecha de trabajo: {{ $trab->fecha_inicio}}</h3>
                    <img src="{{asset(('img/reparacion.png'))}}" alt="{{$trab->id_trabajo}}" height="1200px" width="1200px" class="img-thumbnail"><br><br><br><br><br>
                @endif
                @if($trab->estado_trabajo_id_estado==4)
                    <h3 class="section-subheading text-muted">Fecha de trabajo: {{ $trab->fecha_inicio}}</h3>
                    <img src="{{asset(('img/reparado.png'))}}" alt="{{$trab->id_trabajo}}" height="1200px" width="1200px" class="img-thumbnail"><br><br><br><br><br>
                @endif
                @if($trab->estado_trabajo_id_estado==5)
                    <h3 class="section-subheading text-muted">Fecha de trabajo: {{ $trab->fecha_inicio}}</h3>
                    <img src="{{asset(('img/entregado.png'))}}" alt="{{$trab->id_trabajo}}" height="1200px" width="1200px" class="img-thumbnail"><br><br><br><br><br>
                @endif
            @endforeach

        </div>

    </section>
    <!-- Portfolio Grid-->


   
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</body>



@stop

