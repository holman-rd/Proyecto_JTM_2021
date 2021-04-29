<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-edit-{{ $cat->id_categoria }}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDITAR CATEGORÍA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

            </div>
            <div class="modal-body">
                
                {!! Form::model($cat, ['method' => 'PATCH', 'route' => ['almacen.categoria.update', $cat->id_categoria]]) !!}
                {{ Form::token() }}

                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <div>Nombre:</div>
                    </div>
                    <div class="form-group col-sm-8">
                        <input type="text" class="form-control" name="nombre" value="{{ $cat->nombre }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <div>Descripción:</div>
                    </div>
                    <div class="form-group col-sm-8">
                        <input type="text" class="form-control" name="descripcion" value="{{ $cat->descripcion }}">
                    </div>
                </div>

                <div class="form-row" align="center">
                    <div class="form-group col-sm-12" align="center">
                        <button class="btn btn-info" type="submit">Guardar</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>

        </div>
    </div>


</div>
