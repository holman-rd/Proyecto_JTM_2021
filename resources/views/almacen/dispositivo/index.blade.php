@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">DISPOSITIVOS</div>
@stop
@section ('contenido')

 <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dispositivos</h2>
                <h3 class="section-subheading text-muted">Listado de dispositivos</h3>


                <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-info">Registrar Estado</button></a>
                @include('almacen.dispositivo.create')

            </div> <br>   
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed table-hover">
							<thead>
								<th>Serial</th>
								<th>Marca</th>
								<th>Cliente propietario</th>
								<th>Categoria del dispositivo</th>
							</thead>
			               @foreach ($dispositivo as $disp)
							<tr>
								<td>{{ $disp->serial}}</td>
								<td>{{ $disp->marca}}</td>
								@foreach ($cliente as $cli)
									@if ($disp->cliente_id_cliente == $cli->id_cliente)
										<td>{{$cli->nombre}}</td>
									@endif
								@endforeach
								@foreach ($categoria as $cat)
									@if ($disp->categoria_id_categoria == $cat->id_categoria)
										<td>{{$cat->nombre}}</td>
									@endif
								@endforeach

								<td>
									
			                        <a href="" data-target="#modal-edit-{{$disp->serial}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>

			                        <a href="" data-target="#modal-delete-{{$disp->serial}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
			                        
								</td>
								
							</tr>
							@include('almacen.dispositivo.edit')
							@include('almacen.dispositivo.delete')
							@endforeach
						</table>
					</div>
					{{$dispositivo->render()}}
				</div>
			</div>

        </div>
    </section>

@stop
