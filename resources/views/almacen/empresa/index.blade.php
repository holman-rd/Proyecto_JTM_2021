@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-9">
								<h2 class="section-heading text-uppercase">Detalle Empresa</h2>
                				<span class="section-subheading text-muted">Información principal de la empresa</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
								<table class="table table-striped table-bordered table-condensed table-hover">
									<thead>
										<th>Nombre</th>
										<th>NIT</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Informacion</th>
										<th>OPCIONES</th>
									</thead>
									@foreach ($empresa as $emp)
									<tr>
										<td>{{ $emp->nombre_empresa}}</td>
										<td>{{ $emp->nit}}</td>
										<td>{{ $emp->direccion}}</td>
										<td>{{ $emp->telefono}}</td>
										<td>{{ $emp->correo}}</td>
										<td>{{ $emp->informacion}}</td>
										<td>	
											<a href="" data-target="#modal-delete-{{$emp->id_detalle}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>
										</td>
									</tr>
									@include('almacen.empresa.edit')
									@endforeach
								</table>
								</div>
                            </div>
                        </div>
                        @if (session('info'))
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<table class="table table-striped table-bordered table-condensed table-hover">
											<thead>
												<th>NOMBRE</th>
												<th>TELÉFONO</th>
												<th>DIRECCI&Oacute;N</th>
												<th>NO. DOCUMENTO</th>
												<th>CORREO</th>
												<th>OPCIONES</th>
											</thead>
												<!-- @foreach ($dispositivo as $disp) -->
													<!-- @foreach ($trabajo as $tbj) -->
														<!-- @if({{$tbj->dispositivo_serial}} = {{$disp->serial}}) -->
															@foreach ($cliente as $cli)
																<!-- @if({{$cli->id_cliente}} = {{$disp->cliente_id_cliente}}) -->
																<tr>
																	<td>{{ $cli->nombre }}</td>
																	<td>{{ $cli->telefono }}</td>
																	<td>{{ $cli->direccion }}</td>
																	<td>{{ $cli->no_documento }}</td>
																	<td>{{ $cli->correo }}</td>
																	<td>
																		<a href="" data-target=""
																			data-toggle="modal"><button class="btn btn-info">Imprimir</button>
																		</a>
																	</td>
																</tr>

										</table>