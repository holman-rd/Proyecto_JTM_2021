<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-edit-{{ $us->id }}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDITAR USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    {!! Form::model($us, ['method' => 'PATCH', 'route' => ['usuario.update', $us->id]]) !!}
                    {{ Form::token() }}

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Nombre:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" name="name" value="{{ $us->name }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Correo:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" name="email" value="{{ $us->email }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Contraseña:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" name="password" value="{{ $us->password }}">
                        </div>
                    </div>

                    <div class="form-row" align="center">
                        <div class="form-group col-sm-12" align="center">
                            <button class="btn btn-info" type="submit">Guardar</button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
