<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create-factura">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">REGISTRAR DETALLE FACTURA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    {!! Form::open(['url' => 'almacen/detallefactura', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                    {{ Form::token() }}

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Valor total:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="number" class="form-control" name="valor_total">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Fecha trabajo:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <select name="trabajo_id_trabajo" class="form-control">
                                @foreach ($trabajo as $tra)
                                    <option value="{{ $tra->id_trabajo }}">{{ $tra->fecha_inicio }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <div>Fecha factura:</div>
                        </div>
                        <div class="form-group col-sm-8">
                            <select name="factura_id_datos" class="form-control">
                                @foreach ($factura as $fac)
                                    <option value="{{ $fac->id_datos }}">{{ $fac->fecha }}</option>
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
