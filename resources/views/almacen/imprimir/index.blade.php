@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">Facturaci&oacute;n</h2>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<!-- parte superior de la factura -->
								<div class="modal-body" >
									<div class="container-fluid">
										<table id="factura_head">
											<tr>
												<td class="logo_factura">
													<div >
													<img src="{{URL::asset('assets/img/logos/jtm.png')}}" >
													</div>
												</td>
												<!-- solo es un espacio -->
												<td>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												</td>											
												<!-- descripcion de la empresa -->
												<td class="info_empresa">
													@foreach ($empresa as $emp)
														<span class="h3">{{ $emp->nombre_empresa}}</span><br><br>
														<p>NIT: {{ $emp->nit}}</p>
														<p>Direcci&oacute;n: {{ $emp->direccion}}</p>
														<p>Telefono: {{ $emp->telefono}}</p>
														<p>Correo: {{ $emp->correo}}</p>
														<p>{{ $emp->informacion}}</p>
													@endforeach
												</td>

												<!-- solo es un espacio -->
												<td>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												</td>											
											</tr>
										</table>
									</div>
								</div>

								<div class="table-responsive">
									<table class="table table-striped table-bordered table-condensed table-hover">
										<thead>
											<th>NOMBRE</th>
											<th># DOCUMENTO</th>
											<th>TELÉFONO</th>
											<th>FECHA DE INGRESO</th>
											<th>OPCIONES</th>
										</thead>
										@foreach ($trabajo_fecha as $tbj)
										<tr>
											<td>{{ $tbj->nombre }}</td>
											<td>{{ $tbj->no_documento}}</td>
											<td>{{ $tbj->telefono }}</td>
											<td>{{ $tbj->fecha }}</td>
											<td>

												<a href="" data-target="#modal-edit-{{$tbj->id_cliente}}-{{ $tbj->fecha }}"
													data-toggle="modal"><button class="btn btn-info">Vizualizar factura</button>
												</a>
												@include('almacen.imprimir.edit')
											</td>
										</tr>
										@endforeach
									</table>
									<!-- tabla datos cliente -->
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

