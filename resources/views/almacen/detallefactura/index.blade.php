@extends('layouts.app')

@section('content')
    <div class="container">
        @include('almacen.detallefactura.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">DETALLE FACTURAS</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create-factura" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Detalle</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                            <th>ID DETALLE</th>
                                            <th>VALOR TOTAL</th>
                                            <th>FECHA TRABAJO</th>
                                            <th>FECHA FACTURA</th>
                                            <th>OPCIONES</th>
                                        </thead>
                                        @foreach ($detallef as $det)
                                            <tr>
                                                <td>{{ $det->id_detalle }}</td>
                                                <td>{{ $det->valor_total }}</td>
                                                <td>{{ $det->trabajo_id_trabajo }}</td>
                                                <td>{{ $det->factura_id_datos }}</td>
                                                <td>

                                                    <a href="" data-target="#modal-edit-{{ $det->id_detalle }}"
                                                        data-toggle="modal"><button class="btn btn-info">Editar</button></a>

                                                    <a href="" data-target="#modal-delete-{{ $det->id_detalle }}"
                                                        data-toggle="modal"><button
                                                            class="btn btn-danger">Eliminar</button></a>

                                                </td>
                                            </tr>
                                            @include('almacen.detallefactura.edit')
                                            @include('almacen.detallefactura.delete')
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