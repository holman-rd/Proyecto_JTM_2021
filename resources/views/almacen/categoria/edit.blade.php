<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-edit-{{ $cat->id_categoria }}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title">EDITAR CATEGORÍA</h5>

            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    {!!Form::model($cat, ['method' => 'PATCH', 'route' => ['almacen.categoria.update', $cat->id_categoria]])!!}
                    {{Form::token()}}

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

                    {!!Form::close()!!}
                </div>
            </div>
			<div class="modal-footer">
			</div>

        </div>
    </div>


</div>
