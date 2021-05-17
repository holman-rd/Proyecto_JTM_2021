@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 id="titleuser">Bienvenido {{ Auth::user()->name }}</h2>
                    </div>

                    <div class="panel-body">
                        @if (count($sugerencia)>0)
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-condensed table-hover">
                                            <caption>
                                                <h3>Sugerencias de Usuario</h3>
                                            </caption>
                                            <thead>
                                                <th>NOMBRE</th>
                                                <th>CORREO</th>
                                                <th>TELEFONO</th>
                                                <th>SUGERENCIA</th>
                                                <th>OPCION</th>
                                            </thead>
                                            @foreach ($sugerencia as $su)
                                                <tr>
                                                    <td>{{ $su->nombre }}</td>
                                                    <td>{{ $su->correo }}</td>
                                                    <td>{{ $su->telefono }}</td>
                                                    <td>{{ $su->sugerencia }}</td>
                                                    <td>
                                                        <a href="" data-target="#modal-delete-{{ $su->id_sugerencia }}"
                                                            data-toggle="modal"><button
                                                                class="btn btn-danger">Eliminar</button></a>

                                                    </td>
                                                </tr>
                                                @include('homedelete')
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
                        @else
                            <h4 id="titleuser">No hay sugerencias</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
