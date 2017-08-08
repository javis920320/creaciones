<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prestamos  libros</title>


</head>
<body>
	<style type="text/css">
	.loader{
	display: none;
	margin-left: 200px;
	margin-top: -45px;
	position: absolute;
		}

	</style>
	<h2><strong>Configurando  Vista...</strong></h2>

	<strong><?php echo$nombres;?></strong>


	<div class="container">
	 <div class="row">

	 	<input type='text' class='form-control' id='txtbuscarcliente'>
	 	<button id='btnbuscar'>Presione</button>

	 	<div class="hide" id='formcliente'>
	 		
	 		<form id='insertcliente'>

	 			<input type="text" id='identidad' class="hide" name='identidad'>
	 			<input type="text" placeholder="Apellidos" class="form-control" name='apellidos'>
	 			<input type="text" placeholder="Nombres" class="form-control" id='nombres' name='nombres'>
	 			<input type="radio" name="genero" value="M" checked> Masculino<br>
  				<input type="radio" name="genero" value="F"> Femenino<br>
	 			<input type="date" class="form-control" name='fecha_nac'>

	 			<input type="text"  placeholder="Celular" class="form-control" name='celular'>

	 			<input type="submit" value="Ingresar Cliente" title="Presionar">
	 		</form>
	 	</div>
	 	

	 </div>

	 <div class='' id='respuesta'></div>

	</div>
</body>
</html>