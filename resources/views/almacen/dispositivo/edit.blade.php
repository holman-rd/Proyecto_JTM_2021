<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$disp->serial}}">

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

				{!!Form::model($disp,['method'=>'PATCH','route'=>['almacen.dispositivo.update',$disp->serial]])!!}
                {{Form::token()}}

					<!-- serial -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Serial:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="serial" value="{{$disp->serial}}">
						</div>
					</div>

					<!-- marca -->
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Marca:</div>
						</div>
						<div class="form-group col-sm-8">
							<input type="text" class="form-control" name="marca" value="{{$disp->marca}}">
						</div>
					</div>



					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Cliente:</div>
						</div>
						<div class="form-group col-sm-8">
							<select name="cliente_id_cliente" class="form-control">
								@foreach($cliente as $cli)
								<option value="{{$cli->id_cliente}}">{{$cli->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>

					
					<div class="form-row">
						<div class="form-group col-sm-4">
							<div>Categoría:</div>
						</div>
						<div class="form-group col-sm-8">
							<select name="categoria_id_categoria" class="form-control">
								@foreach($categoria as $cat)
								<option value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
								@endforeach
							</select>
						</div>
					</div>

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