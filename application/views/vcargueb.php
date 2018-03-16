<html>
<head>
	<title></title>
</head>
<body>
	<style>
    #aumentar{
      width: 80% !important;
    }
  </style>

	<div class='box box-primary'>
	<div class='box-primary'>
	

	
	
	
	<!-- Modal -->
	<div class="modal fade" id="mdlcargar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document" id='aumentar'>
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Detalles de Asignacion</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">


	      	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
	      	  Cargar Bordado
	      	</button>
	      	
	      	<!-- Modal -->
	      	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	      	  <div class="modal-dialog" role="document">
	      	    <div class="modal-content">
	      	      <div class="modal-header">
	      	        <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
	      	        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	      	          <span aria-hidden="true">&times;</span>
	      	        </button>-->
	      	      </div>
	      	      <div class="modal-body">
				  <input type='hidden' id='idoculto'>
	      	       <label for='lstbd'><strong>Lista de Bordados:</strong></label>
				   <select id='lstbd' class='form-control'>
				   
				   </select>
				   <label for='nmbc'><strong>Cantidad:</strong></label>
				   <input type='number' id='nmbc' class='form-control'name='nmbc'value=1>
	      	      </div>
	      	      <div class="modal-footer">
	      	       <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
	      	        <button type="button" class="btn btn-primary" onclick='cargarb();'>Cargar</button>
	      	      </div>
	      	    </div>
	      	  </div>
	      	</div>
	      	
	      	
	        <table id='resb' class="table table-hover table-responsive">
	        	
	         <thead class="bg-primary">
                <tr>
                  <th>Codigo</th>
                  <th>Bordado</th>
                  <th>Cantidad</th>
                  <th>Accion</th>
                 

                    
                  

                </tr>
                </thead>
                <tbody></tbody>
	        </table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	
	
	
	
	   <table  id='tblcarprendas' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Codigo</th>
                  <th>factura</th>
                  <th>Descripcion</th>
                   <th>Cantidad</th>
                
                  <th>Fecha ingreso</th>
                    <th>Precio bordados</th>
                     <th>Num Bordados</th>
                    <th>Estado</th>
                     <th>Accion</th>

                    
                  

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