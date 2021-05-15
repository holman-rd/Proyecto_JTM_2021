<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-edit-{{$tbj->id_cliente}}">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
					aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
				 <h5 class="modal-title">FACTURACIÓN</h5>               
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div id="page_pdf">
						<table id="factura_head">
							<tr>
								<td class="logo_factura">
									<div>
										<img src="{{URL::asset('assets/img/logos/jtm.png')}}" style="height: 40px; width: 230px;">
									</div>
								</td>
								<!-- solo es un espacio -->
								<td>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
									<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
								</td>											

								<td class="info_empresa">
									@foreach ($empresa as $emp)
										<span class="h3">{{ $emp->nombre_empresa}}</span><br><br>
										<p>NIT: {{ $emp->nit}}</p>
										<p>Direcci&oacute;n: {{ $emp->direccion}}</p>
										<p>Telefono: {{ $emp->telefono}}</p>
										<p>Correo: {{ $emp->correo}}</p>
										<p>{{ $emp->informacion}}</p>
									@endforeach
								</td>
							</tr>
						</table>
						<table id="factura_cliente">
							<tr>
								<td class="info_cliente">
									<div class="round">
										<span class="h3">Cliente</span><br><br>
										<table class="datos_cliente">
											<tr>
												<td>
													<label>Nombre:</label><p>{{ $tbj->nombre }}</p>
												</td>

												<!-- solo es un espacio -->
												<td>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												</td>

												<td>
													<label>Documento:</label> <p>{{ $tbj->no_documento}}</p>
												</td>
											</tr>
											<tr>
												<td>
													<label>Telefono:</label> <p>{{ $tbj->telefono }}</p>
												</td>

												<!-- solo es un espacio -->
												<td>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
													<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												</td>

												<td>
													<label>Correo:</label> <p>{{ $tbj->correo }}</p>
												</td>
											</tr>
										</table>
									</div>
								</td>

							</tr>
						</table>

						<table id="factura_detalle">
								<thead>
									<tr>
										<th width="50px">Serial</th>
										<th class="textleft">Marca</th>
										<th>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</th>

										<th class="textright" width="150px">Descripcion del trabajo</th>
										<th>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</th>

										<th class="textright" width="150px"> Costo</th>
									</tr>
								</thead>
								<tbody id="detalle_productos">
								<!-- {{$total=0}} -->
								@foreach ($trabajo_costo as $tc)
									@if($tc->id_cliente == $tbj->id_cliente)
										<tr>
											<td class="textcenter">{{$tc->serial}}</td>
											<td>{{$tc->marca}}</td>
											<td>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											</td>

											<td class="textright">{{$tc->descripcion}}</td>
											<td>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
												<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											</td>

											<td class="textright">{{$tc->costo_trabajo}}</td>
										</tr>
										<!-- {{$total=$total+$tc->costo_trabajo}} -->
									@endif
								@endforeach
								</tbody>
								<tfoot id="detalle_totales">
									<tr>
										<td>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</td>
										<td>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</td>
									</tr>
									<tr>

										<td colspan="3" class="textright" width="150px"><label>TOTAL.</label></td>
										<td>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</td>
										<td>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
											<span style='display:inline; white-space:pre;'> </span><span style='display:inline; white-space:pre;'> </span>
										</td>

										<td class="textright" width="150px"><label>{{$total}}</label></td>
									</tr>
							</tfoot>
						</table>
						<div>
							<p class="nota">Si usted tiene preguntas sobre esta factura, <br>pongase en contacto a traves de las lineas de comunicación ofrecidas. </p>
							<h4 class="label_gracias">¡Gracias por su visita!</h4>
						</div>

					</div>
				</div>           
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
	

</div>