@extends('layouts.app')

@section('content')
    <div class="container">
        @include('almacen.trabajo.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">TRABAJOS</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Trabajo</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
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
											<th>Opciones</th>
										</thead>
										@foreach ($trabajo as $tbj)
										<tr>
											<td>{{ $tbj->descripcion}}</td>
											<td>{{ $tbj->fecha_inicio}}</td>
											<td>$ {{ $tbj->costo_trabajo}}</td>
											<td>{{ $tbj->dispositivo_serial}}</td>
											<td>{{ $tbj->estado_trabajo_id_estado}}</td>
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

