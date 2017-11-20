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



    <!-- Modal -->
    <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Bordado</h4>
          </div>
          <div class="modal-body">

            <form id='eliminarb'>

              <span class='text text-success'>Estas Seguro de eliminar este registro ?</span>
              <input type='hidden' name='delb' id='delb' >
              <br>
              <input type='submit' value='Eliminar' class='btn btn-default'>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>  

            </form>
                  


          <div class="modal-footer">
            
           </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="editarbordados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Editar datos Bordado</h4>
          </div>
          <div class="modal-body">

           <form id='editbordados'>
            <div class='form-group'>
              <input  type='hidden' name='eidbordaos' id='eidbordaos'>
              <label for='editbordados'>Nombre</label>
            <input type='text' id='enombre' name='enombre' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='eprecio'>Precio</label>
                <input type='text' id='eprecio' name='eprecio' class='form-control'>
            </div>
             

            <br>
            <input type='submit' value='Editar' class="btn btn-default">


             <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
           </form>

           
          </div>
          <div class="modal-footer">
            
            
          </div>
        </div>
      </div>
    </div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      	Agregar Bordados
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
            <h4 class="modal-title" id="myModalLabel"><strong>Agregar Bordados</strong></h4>
          </div>
          <div class="modal-body">
          	<form id='frmbordados'>

              <div class='form-group'>
                <label for='nombre'>Nombre bordado:</label>
                 <input type='text' name='nombre' id='nombre' class='form-control'>


              </div>
              <div class='form-group'>
                <label for='precio'>Precio</label>
                 <input type='text' name='precio' id='precio' class='form-control'>


              </div>
               <input type='submit' value='Guardar' class="btn btn-default">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>    
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
  
</script>