<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create-factura">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRAR FACTURA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    {!! Form::open(['url' => 'almacen/factura', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                    {{ Form::token() }}

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Fecha:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="date" class="form-control" name="fecha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Ciudad:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="text" class="form-control" name="ciudad">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Estado:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="number" class="form-control" name="estado">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Empresa:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <select name="detalle_empresa_id_detalle" class="form-control">
                                @foreach ($detalle as $det)
                                    <option value="{{ $det->id_detalle }}">{{ $det->nombre_empresa }}</option>
                                @endforeach
                            </select>
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
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
