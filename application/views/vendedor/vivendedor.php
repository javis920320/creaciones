<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prestamos  libros</title>


</head>
<body>
	<h2><strong>Configurando  Vista...</strong></h2>

	<strong><?php echo$nombres;?></strong>


	<div class="container">
	 <div class="row">
	 	<div class="content-wraper">

	 		<div>
	 			<h1><strong class='text-danger'>Informacion del Cliente</strong></h1>
	 		</div>
	 	       <form class='form-inline' name='formcliente'  action='<?php echo base_url();?>cajax/buscarcliente'id='formulario_ajax' method="post">
	 			<div class="form-group">
	 			<label for="exampleInputName2">*</label>
	 				<input  class='form-control'type='text' placeholder='ID/Cedula' name='txtcedulabus'id='txtcedulabus' required='true'>

	 			</div>

	 		

	 			<input type="submit" value="Enviar mensaje" title="Enviar mensaje">
	 		</form>
			
		</div>

	 </div>
	</div>
</body>
</html>