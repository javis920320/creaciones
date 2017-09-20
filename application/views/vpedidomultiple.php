<html>
<head>
	<title></title>
</head>
<body>

<div class="box box-primary">
	


<div class="box-body">

			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="cedula">cedula:</label>

				 <input type="text" placeholder="Buscar cliente" id="idcliente" class="form-control"   required value=1085298221>
				 <input class="btn btn-primary" type="submit" value="Buscar cliente" id='btnbuscar'>
				 <div class="text-danger hide" id='alerta'><strong>El Cliente No esta registrado..</strong></div>

			</div>

			</div>

			<div class="col-sm-4">

			</div>


			<div class="col-sm-12">
				<div class="contenedor_json" align='center'>

			</div>

			</div>


			<div class="col-sm-6">
				<div class="form-group">
					<label for="factura">Factura:</label>

				 <input type="text" placeholder="N Factura" id="factura" class="form-control">

			</div>

			</div>	


			<div class="col-sm-6">
				<div class="form-group">
					<label for="facultad">Facultad:</label>

				 <input type="text" placeholder="Ingresar facultad" id="facultad" class="form-control">

				</div>

			</div>	


			

			<div class="col-sm-4">
				<div class="form-group">
					<label for="tpprod">Tipo Producto:</label>
					<div id='tpprod'></div>

			


				</div>
					<input type="hidden" class="idpersona" id='idpersona' name="idpersona">

				<label for="talla">Talla</label>
				<select name="talla" id="talla" class="form-control">
					<option value="0">0</option>
					<option value="2">2</option>
					<option value="4">4</option>
					<option value="6">6</option>
					<option value="8">8</option>
					<option value="10">10</option>
					<option value="12">12</option>
					<option value="14">14</option>
					<option value="16">16</option>
					<option value="S">S</option>
					<option value="XS">XS</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
					<option value="XXL">XXL</option>
					

				</select>

			</div>	
			<div class="col-sm-4">
				<div class="form-group">
					<label for="cantidad">Cantidad</label>

					<input type="number" id="cantidad" class="form-control">	
				

				</div>



			</div>	
			







			<div class="col-sm-12">
			<label for="descripcion">Descripcion:</label>

			<div class='form-group'>

				<textarea cols="30" rows="5" class='form-control 'id='descripcion' ></textarea>
			</div>
			</div>

			<div class="col-sm-8">
				<div class="form-group">
					<div class="col-sm-4">
					<button  id=''  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Agregar</button>
					</div>
					<div class="col-sm-4">	
					<button class='btn btn-default'>Limpiar</button>
					</div>
					<div>
					<button class='btn btn-danger'>Cancelar</button>
					</div>
					

				


				</div>

			</div>	



			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Ingresar Pedido</h4>
			      </div>
			      <div class="modal-body">

			      	<strong>Estas Seguro de ingresar el pedido?</strong>


			      	 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary" id='agregarprod'>Aceptar</button>
			        
			      </div>
			      <div class="modal-footer">
			       
			      </div>
			    </div>
			  </div>
			</div>

	
		
</div>
</div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>