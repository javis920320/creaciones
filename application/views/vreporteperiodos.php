<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>
	<style type="text/css">
	.responsive-input{
  width: 100%;
}
	</style>
	
	<div class="box box-primary">
		<div class="box-body">
		
		<div id='res'>
			<div  id='per'name='name'>
			<label for='periodo'><strong>Periodos</strong></label>
			<select  class='per form-control'id='periodo' required>
			
			</select>
			</div>
	
		</div>
	           <input id='trabajador' name='trabajador' hidden value="<?php echo$idpersona;?>">
		<br><br><br>
		<table id="tblresperiodos" class="table table-bordered table-striped">
			    <thead>
				    <tr>
				      <th style="width: 5%;background-color: #006699; color: white;">#</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Producto</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
				      <th style="width: 10%;background-color: #006699; color: white;">cantidad</th>
				      <th style="width: 10%;background-color: #006699; color: white;" id='v'>Precio</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Fecha</th>
              <th style="width: 10%;background-color: #006699; color: white;">Acción</th>
				    </tr>
			    </thead>
			   <tfoot>
					<tr>
						<th colspan="8" style="text-align:right">Total:</th>
						<th></th>
					</tr>
				</tfoot>
				<tboby> </tbody>
			  </table>
		
		
		</div>
	</div>
	


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

 
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
	
</body>
</html>