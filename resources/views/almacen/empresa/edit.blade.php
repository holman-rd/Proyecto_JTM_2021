<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$emp->id_detalle}}">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <h5 class="modal-title">EDITAR DATOS</h5>
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
               
			</div>
			<div class="modal-body">
				{!!Form::model($emp,['method'=>'PATCH','route'=>['almacen.empresa.update',$emp->id_detalle]])!!}
                {{Form::token()}}

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Nombre:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="nombre_empresa" value="{{$emp->nombre_empresa}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>NIT:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="nit" value="{{$emp->nit}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Direccion:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="direccion" value="{{$emp->direccion}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Telefono:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="number" class="form-control" name="telefono" value="{{$emp->telefono}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Correo:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="correo" value="{{$emp->correo}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Información:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="informacion" value="{{$emp->informacion}}">
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
	</div>
	

</div>