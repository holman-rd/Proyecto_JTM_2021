@extends('layouts.app')

@section('content')
    <div class="container">
        @include('almacen.factura.create')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <h2 class="section-heading text-uppercase">FACTURAS</h2>
                            </div>
                            <div class="contenedor-modal col-md-2">
                                <a href="" data-target="#modal-create-factura" data-toggle="modal"><button
                                        class="btn btn-info">Registrar Factura</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead>
                                            <th>ID FACTURA</th>
                                            <th>FECHA</th>
                                            <th>CIUDAD</th>
                                            <th>ESTADO</th>
                                            <th>DETALLE EMPRESA</th>
                                            <th>OPCIONES</th>
                                        </thead>
                                        @foreach ($factura as $fac)
                                            <tr>
                                                <td>{{ $fac->id_datos }}</td>
                                                <td>{{ $fac->fecha }}</td>
                                                <td>{{ $fac->ciudad }}</td>
                                                <td>{{ $fac->estado }}</td>
                                                <td>{{ $fac->detalle_empresa_id_detalle }}</td>
                                                <td>

                                                    <a href="" data-target="#modal-edit-{{ $fac->id_datos }}"
                                                        data-toggle="modal"><button class="btn btn-info">Editar</button></a>

                                                    <a href="" data-target="#modal-delete-{{ $fac->id_datos }}"
                                                        data-toggle="modal"><button
                                                            class="btn btn-danger">Eliminar</button></a>

                                                </td>
                                            </tr>
                                            @include('almacen.factura.edit')
                                            @include('almacen.factura.delete')
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