@extends ('layouts.admin')
@section ('head')
    <div class="masthead-subheading">CATEGORIA DE DISPOSITIVOS</div>
@stop
@section ('contenido')

 <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Categoría De Dispositivos</h2>
                <h3 class="section-subheading text-muted">Categorías de los dispositivos</h3>


                <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-info">Registrar Categoría</button></a>
                @include('almacen.categoria.create')

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
			               @foreach ($categoria as $cat)
							<tr>
								<td>{{ $cat->nombre}}</td>
								<td>{{ $cat->descripcion}}</td>
								<td>
									
			                        <a href="" data-target="#modal-edit-{{$cat->id_categoria}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>

			                        <a href="" data-target="#modal-delete-{{$cat->id_categoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
			                        
								</td>
								
							</tr>
							@include('almacen.categoria.edit')
							@include('almacen.categoria.delete')
							@endforeach
						</table>
					</div>
					{{$categoria->render()}}
				</div>
			</div>

        </div>
    </section>

@stop
