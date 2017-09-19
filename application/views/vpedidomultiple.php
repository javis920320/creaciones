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

				 <input type="text" placeholder="Buscar cliente" id="idcliente" class="form-control" id='idcliente'  required value=1085298221>
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

			</div>	
			<div class="col-sm-4">
				<div class="form-group">
					<label for="cantidad">Cantidad</label>

					<input type="number" id="cantidad" class="form-control">	
				

				</div>



			</div>	
			<div class="col-sm-4">
				<div class="form-group">
					<label for="facultad">Tipo Producto:</label>

				


				</div>

			</div>	








			<div class="col-sm-12">
			<label for="descripcion">Descripcion:</label>

			<div class='form-group'>

				<textarea name="" id="" cols="30" rows="5" class='form-control 'id='descripcion' ></textarea>
			</div>
			</div>

			<div class="col-sm-8">
				<div class="form-group">
					<div class="col-sm-4">
					<button class='btn btn-primary' id='agregarprod'>Agregar</button>
					</div>
					<div class="col-sm-4">	
					<button class='btn btn-default'>Limpiar</button>
					</div>
					<div>
					<button class='btn btn-danger'>Cancelar</button>
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