@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">Estado del procesos de Mantenimiento</div>
@stop
@section ('contenido')

    <!--Info de Contacto -->
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-subheading text-muted">Consulta del estado</h3>
            <br>
            <section class="page-section" id="contact">
                <div class="container">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="form-group">
                            <input class="form-control" id="cedula" type="text" placeholder="Cedula *" required="required" data-validation-required-message="Por favor ingrese su cedula para verificar los equipos a su nombre." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <div id="success"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </section>
            <div class="row row-50">
                @foreach ($empresa as $emp)
                <!-- Telefono -->
                <div class="col-md-5 col-lg-3">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                        <div class="box-icon-caption">
                            <h4>Telefono de la empresa</h4>
                        </div>
                    </div>
                </div>
                <!-- correo -->
                <div class="col-md-5 col-lg-3">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                        <div class="box-icon-caption">
                            <h4>Correo de la empresa</h4>
                        </div>
                    </div>
                </div>
                <!-- Direccion -->
                <div class="col-md-5 col-lg-3">
                    <div class="box-icon-classic">
                        <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                        <div class="box-icon-caption">
                            <h4>Dirección</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </section>

@stop