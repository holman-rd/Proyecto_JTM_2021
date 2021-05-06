@extends ('layouts.app')

@section('content')


    <div class="container">
        <div class="text-center">
            <h3 class="section-subheading text-muted">BUSCAR CLIENTE</h3>
            @include('almacen.cliente.search')
            @include('almacen.cliente.create')
        </div> <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">CLIENTES</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-info">Registrar
									Cliente</button></a>
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
                                            <th>TELÉFONO</th>
                                            <th>DIRECCI&Oacute;N</th>
                                            <th>NO. DOCUMENTO</th>
                                            <th>CORREO</th>
                                            <th>OPCIONES</th>
                                        </thead>
                                        @foreach ($cliente as $cli)
                                            <tr>
                                                <td>{{ $cli->nombre }}</td>
                                                <td>{{ $cli->telefono }}</td>
                                                <td>{{ $cli->direccion }}</td>
                                                <td>{{ $cli->no_documento }}</td>
                                                <td>{{ $cli->correo }}</td>
                                                <td>

                                                    <a href="" data-target="#modal-edit-{{ $cli->id_cliente }}"
                                                        data-toggle="modal"><button class="btn btn-info">Editar</button></a>

                                                    <a href="" data-target="#modal-delete-{{ $cli->id_cliente }}"
                                                        data-toggle="modal"><button
                                                            class="btn btn-danger">Eliminar</button></a>

                                                </td>
                                            </tr>
                                            @include('almacen.cliente.edit')
                                            @include('almacen.cliente.delete')
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
