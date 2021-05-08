<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$tbj->id_trabajo}}">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <h5 class="modal-title">EDITAR ESTADO DE TRABAJO</h5>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
               
			</div>
			<div class="modal-body">

				{!!Form::model($tbj,['method'=>'PATCH','route'=>['almacen.trabajo.update',$tbj->id_trabajo]])!!}
                {{Form::token()}}

					<!-- descripcion -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Descripcion: </div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="descripcion" value="{{$tbj->descripcion}}">
						</div>
					</div>

					<!-- fecha de inicio -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Fecha de inicio:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="date" class="form-control" name="fecha_inicio" value="{{$tbj->fecha_inicio}}">
						</div>
					</div>

					<!-- costo -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Costo del trabajo:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="number" class="form-control" name="costo_trabajo" value="{{$tbj->costo_trabajo}}">
						</div>
					</div>

					<!-- dispositivos -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Lista de dispositivos:</div>
						</div>
						<div class="form-group col-sm-8">

							<select class="custom-select" name="dispositivo_serial" required>
								@foreach ($dispositivo as $disp)
									<option value="{{$disp->serial}}">{{$disp->serial}} - {{$disp->marca}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<!-- estado -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Estado:</div>
						</div>
						<div class="form-group col-sm-8">

							<select class="custom-select" name="estado_trabajo_id_estado" required>
								@foreach ($estadotrabajo as $et)
									<option value="{{$et->id_estado}}">{{$et->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<!-- boton guardar -->
					<div class="form-row" align="center">
						<div class="form-group col-sm-12" align="center">
							<button class="btn btn-info" type="submit">Guardar</button>
						</div>
					</div>

				{!!Form::close()!!}		
            
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
	

</div>