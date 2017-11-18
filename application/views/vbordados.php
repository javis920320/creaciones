<style>
    #aumentar{
      width: 80% !important;
    }
  </style>
<br><br><br>
	<div class="box box-primary">
		<div class="box-body">
		<div class="col-sm-10">
		<div class="col-sm-8">
		<label for=""><h2><strong>Lista Confecciones</strong></h2></label>
		</div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      	Agregar producto
    	</button>
	    	<!-- <div class="box box-primary"> -->
	    	<table id="tblbordados" class="table table-bordered table-striped">
			    <thead>
				    <tr>
				      <th style="width: 5%;background-color: #006699; color: white;">#</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Bordado </th>
				      <th style="width: 10%;background-color: #006699; color: white;">Precio</th>
              <th style="width: 10%;background-color: #006699; color: white;">Acción</th>
				    </tr>
			    </thead>
			    <tbody></tbody>
			  </table>

			<!-- </div> -->
		</div>
		<div class="col-sm-2"><span class='label label-warning' id="spSuma"></span></div>
		</div>
	</div>
	

		<!-- Button trigger modal -->
    
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document" id="aumentar">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><strong>Agregar Producto</strong></h4>
          </div>
          <div class="modal-body">
          	<div class="form-group">
          		<input type="text" placeholder="N# Factura"  name='nfac' id='nfac' class="form-control">

          	</div>
          	<div class="form-group">
          		<button class="btn" id='btnbuscar'>Buscar factura</button>
          	</div>

			<div id="res"></div>
            
            <form id='formtrabajos'>



            <label for='tpprod'>Categoria Producto</label>
              <select id="tpprod" name="tpprod" class=" pr form-control" onchange='filtrar();' required="true"></select>
     <table id="" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 5%;background-color: #006699; color: white;">#</th>
              <th style="width: 10%;background-color: #006699; color: white;">Nombre</th>
              <th style="width: 10%;background-color: #006699; color: white;">Presio</th>
              <th style="width: 10%;background-color: #006699; color: white;">Acción</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>

              <label for='productos'>Productos</label>
              <select id="productos" name="productos" class="form-control" required="true"></select>
          

            <div class='form-group'>
            <span class="text text-danger hide" id='mensaje'> Productos disponibles: </span> <span id='numcantidad'></span><br>
            <input type='text' id='disponibles' name='disponibles' class='hide'>
            	<label for='cantidad'>Cantidad:</label>
            	<input type='number' name='cantidad' id='cantidad' min='1'  class='form-control' required="true">
            </div>
            <input id='trabajador' name='trabajador' hidden value="<?php echo$idpersona;?>">



            <input type='submit' value='Guardar'title='Presiona para Guardar' class='btn btn-primary'>	

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>    
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
  
</script>