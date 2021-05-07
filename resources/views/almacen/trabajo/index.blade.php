@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">TRABAJOS</div>
@stop
@section ('contenido')

 <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">TRABAJOS</h2>
                <h3 class="section-subheading text-muted">Listado de trabajos</h3>

                <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-info">Registrar Estado</button></a>
                @include('almacen.trabajo.create')

            </div> <br>   
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed table-hover">
							<thead>
								<th>Descripcion</th>
								<th>Fecha inicio</th>
								<th>Costo del trabajo</th>
								<th>Dispositivo</th>
								<th>Estado</th>
							</thead>
			               @foreach ($trabajo as $tbj)
							<tr>
								<td>{{ $tbj->descripcion}}</td>
								<td>{{ $tbj->fecha_inicio}}</td>
								<td>$ {{ $tbj->costo_trabajo}}</td>
								@foreach ($dispositivo as $disp)
									@if ($disp->serial == $tbj->dispositivo_serial)
									<td>{{ $disp->serial}} - {{ $disp->marca}}</td>
									@endif
								@endforeach
								@foreach ($estadotrabajo as $et)
									@if ($et->id_estado == $tbj->estado_trabajo_id_estado)
									<td>{{ $et->nombre}}</td>
									@endif
								@endforeach

								<td>
									
			                        <a href="" data-target="#modal-edit-{{$tbj->id_trabajo}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>

			                        <a href="" data-target="#modal-delete-{{$tbj->id_trabajo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
			                        
								</td>
								
							</tr>
							@include('almacen.trabajo.edit')
							@include('almacen.trabajo.delete')
							@endforeach
						</table>
					</div>
					{{$trabajo->render()}}
				</div>
			</div>

        </div>
    </section>

@stop
