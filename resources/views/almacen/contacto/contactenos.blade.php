@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">Contáctenos</div>
@stop
@section ('contenido')

    <!--Info de Contacto -->
    <section class="section section-lg text-center bg-default">
        <div class="container">
        <h3 class="section-subheading text-muted">Información de la empresa</h3>
          <div class="row row-50">
            @foreach ($empresa as $emp)
            <!-- Telefono -->
            <div class="col-md-5 col-lg-3">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                <div class="box-icon-caption">
                    <h4>Telefono de la empresa</h4>
                    <p class="section-subheading text-muted">{{ $emp->telefono}}</p>
                </div>
              </div>
            </div>
            <!-- correo -->
            <div class="col-md-5 col-lg-3">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                <div class="box-icon-caption">
                    <h4>Correo de la empresa</h4>
                    <p class="section-subheading text-muted">{{ $emp->correo}}</p>
                </div>
              </div>
            </div>
            <!-- Direccion -->
            <div class="col-md-5 col-lg-3">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                <div class="box-icon-caption">
                    <h4>Dirección</h4>
                    <p class="section-subheading text-muted">{{ $emp->direccion}}</p>
                </div>
              </div>
            </div>
            <!-- Mapa -->
            <div class="col-md-5 col-lg-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.6113221238293!2d-73.02291045310751!3d5.824197517657017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a3f6b69af3157%3A0x170543af546b2b3b!2sCl.%2025%20A%2C%20Duitama%2C%20Boyac%C3%A1!5e0!3m2!1ses!2sco!4v1619238604408!5m2!1ses!2sco" width="250" height="250" style="border: 20px;;" allowfullscreen="" loading="lazy"></iframe>            
            </div>
            @endforeach
          </div>
        </div>
      </section>
    <!--  Panel de Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Buzón de sugerencias</h2>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Telefono *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Sugerencia o queja *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar mensaje</button>
                </div>
            </form>
        </div>
    </section>

@stop