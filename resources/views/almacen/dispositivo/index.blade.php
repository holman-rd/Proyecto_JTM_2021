@extends('layouts.app')

@section('content')
    <div class="container">
        @include('almacen.dispositivo.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="section-heading text-uppercase">DISPOSITIVOS</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Dispositivo</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
								<table class="table table-striped table-bordered table-condensed table-hover">
									<thead>
										<th>SERIAL</th>
										<th>MARCA</th>
										<th>CLIENTE</th>
										<th>CATEGORÍA</th>
										<th>OPCIONES</th>
									</thead>
									@foreach ($dispositivo as $disp)
										<tr>
											<td>{{ $disp->serial}}</td>
											<td>{{ $disp->marca}}</td>
											<td>{{ $disp->cliente_id_cliente}}</td>
											<td>{{ $disp->categoria_id_categoria}}</td>
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