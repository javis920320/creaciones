<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		

.radiov{
 
  margin-right: 150px;

}

	</style>
<br>

		<!-- Button trigger modal -->


	


<div class="box box-primary">
	


<div class="box-body">


				<div class="panel panel-success">
					<div class="panel-heading"><strong>Datos de Cliente</strong></div>
				  <div class="panel-body">
				  	<strong class="bg bg-danger" id='msj'></strong><br>
				 <label for="idcliente"><strong>Identificacion  :</strong></label><input type="number" name="" class="form-control" id="idcliente">
				 <label for="nomcli"> <strong>Nombres</strong></label> <input type="text" name="" placeholder="Nombre cliente" class="form-control" id="nomcli">
				 <label for="telcli">Tel-cel</label> <input type="number" name="" class="form-control"  id="telcli"><br>
				 <button class="btn btn-primary" id="btnnuevocli" name="btnnuevocli" onclick="newcliente();">Nuevo cliente</button>
				   
				  </div>
				  <div class="panel-footer"></div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading"><strong>Tipo cliente</strong></div>
				  <div class="panel-body">
				      <label>PARTICULAR</label><input class="form-check-input" name='tpentidad' type="radio" id="pa"class="radiov" value="P">
				      <label>EMPRESA</label><input class="form-check-input" name='tpentidad'type="radio" id="em"class="radiov" value="E">
				      <label>UNIVERSIDAD</label><input class="form-check-input" name='tpentidad'type="radio" id="un"class="radiov" value="U">
				      <label>COLEGIO</label><input class="form-check-input" name='tpentidad'type="radio" id="co"class="radiov" value="C">
				      <br> <br>

				      <div id="cont_tpcli"></div>
				   
				  </div>
				  <div class="panel-footer"></div>
				</div>

				<div class="panel panel-success">
					<div class="panel-heading"><strong>Detalles</strong></div>
				  <div class="panel-body">
				      <label><strong>Factura</strong></label><input class="form-control" type="number" >
				      <label><strong>Fecha Entrega</strong></label><input class="form-control" type="date" >
				      <label for="tpprod" >Tipo Producto:</label>
					<div id='tpprod' ></div>
				      <div class="form-group ">	
				<label for="talla" >Talla</label>
				<select name="talla" id="talla" class="form-control ">
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
			<label for="lblcn"><strong>Cantidad</strong></label> <input class="form-control" type="numer" name="" id="lblcn" min="1" value="1">
			<label for="lbldesc"><strong>Descripcion</strong></label> <textarea cols="30" rows="5" class='form-control 'id='lbldesc' ></textarea>
				   
				  </div>
				  <div class="panel-footer"></div>
				</div>



</div>
</div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>