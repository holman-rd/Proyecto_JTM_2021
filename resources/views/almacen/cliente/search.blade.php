<!--Este es el archivo para la búsqueda de registros-->
{!! Form::open(array('url'=>'almacen/cliente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<!--Formulario para establecer los filtros de búsqueda-->
<div class="container">
	<div class="form-group">	
		<div class="form-row col-sm-12">
			

			<div class="form-row col-sm-12" align="center">
				<div class="form-group col-sm-3"></div>
				<div class="form-group col-sm-1">
					<label>Nombre:</label>
				</div>
				<div class="form-group col-sm-4">
					<input id="cli1" type="text" class="form-control" name="searchText0" placeholder="Buscar..." value="{{$searchText0}}">
				</div>
				<div class="form-group col-sm-1">
					<button id="btnBuscar" type="submit"  class="btn btn-info">Buscar</button>
				</div>
			</div>

		</div>
	</div>
</div>
{{Form::close()}}