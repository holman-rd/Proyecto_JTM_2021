@extends('layouts.app')

@section('content')
    <div class="container">
        @include('almacen.categoria.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="section-heading text-uppercase">Categorias</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Categoria</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
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