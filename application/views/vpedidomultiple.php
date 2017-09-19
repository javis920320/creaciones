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

				 <input type="text" placeholder="Buscar cliente" id="cedula" class="form-control" id='idcliente'>
				 <input class="btn btn-primary" type="submit" value="Buscar cliente" id='btnbuscar'>
				 <div class="text-danger hide" id='alerta'><strong>El Cliente No esta registrado..</strong></div>

			</div>

			</div>

			<div class="col-sm-4">

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
					<label for="facultad">Tipo Producto:</label>

				<select class="form-control">
					<option>prueba</option>
					<option>prueba</option>
					<option>prueba</option>
					<option>prueba</option>	
				</select>


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

				<div class="contenedor_json"></div>


				</div>

			</div>	




			<div class="col-sm-12">
			<label for="descripcion">Descripcion:</label>

			<div class='form-group'>

				<textarea name="" id="" cols="30" rows="5" class='form-control id='descripcion'></textarea>
			</div>
			</div>

	
		
</div>
</div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>