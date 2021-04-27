@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">USUARIOS</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>CORREO</th>
                                        <th>CONTRASEÑA</th>
                                    </thead>
                                   @foreach ($usuario as $us)
                                    <tr>
                                        <td>{{ $us->id}}</td>
                                        <td>{{ $us->name}}</td>
                                        <td>{{ $us->email}}</td>
                                        <td>{{ $us->password}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection