@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">ESTADO DE TRABAJO</div>
@stop
@section ('contenido')

 <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Estado de trabajo</h2>
                <h3 class="section-subheading text-muted">Estados de los trabajos en la linea de seguimiento...</h3>


                <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-info">Registrar Estado</button></a>
                @include('almacen.estadotrabajo.create')

            </div> <br>   
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed table-hover">
							<thead>
								<th>NOMBRE</th>
								<th>DESCRIPCI&Oacute;N</th>
								<th>OPCIONES</th>
							</thead>
			               @foreach ($estadotrabajo as $et)
							<tr>
								<td>{{ $et->nombre}}</td>
								<td>{{ $et->descripcion}}</td>
								<td>
									
			                        <a href="" data-target="#modal-edit-{{$et->id_estado}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>

			                        <a href="" data-target="#modal-delete-{{$et->id_estado}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
			                        
								</td>
								
							</tr>
							@include('almacen.estadotrabajo.edit')
							@include('almacen.estadotrabajo.delete')
							@endforeach
						</table>
					</div>
					{{$estadotrabajo->render()}}
				</div>
			</div>

        </div>
    </section>

@stop
