<html>
<head>
	<title></title>
</head>
<body>

	<div class='box box-primary'>
	<div class='box-primary'>
	
	
			<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
	  Solicitar Bordado
	</button>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header  bg bg-primary">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title " id="myModalLabel">BORDADOS</h4>
	      </div>
	      <div class="modal-body">
	        
		<form action="">
			<label for="txtfac">factura</label>
			<input type="number"  name ='txtfac'class=" form-control" id="txtfac">
			<label for=" txtcant">Cantidad</label>
			<input type="number" class="form-control" name='txtcant' id="txtcant" min=1>

			<label for="txtadescrip">Descripcion</label>
			<textarea name="txtadescrip" id="" cols="30" rows="10" id='txtadescrip' class="form-control"></textarea>

			<input  type='submit' class="btn btn-primary btn-sm"  value='Enviar'onclick="enviarb();"></input>


		</form>

	      </div>
	      <div class="modal-footer bg bg-primary">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
	
	
	   <table  id='tblprendas' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Codigo</th>
                  <th>factura</th>
                  <th>Descripcion</th>
                   <th>Cantidad</th>
                   <th>Estado</th>
                  <th>Fecha ingreso</th>
                     <th>Fecha entrega</th>
                  

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
	
	
	</div>
	</div>

	<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>