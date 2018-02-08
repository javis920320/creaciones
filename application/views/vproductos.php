<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>
  <style>
    #aumentar{
      width: 80% !important;
    }
  </style>




<!-- Modal -->
<div class="modal fade" id="tpprodv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">TIPO PRODUCTO</h4>
      </div>
      <div class="modal-body">
      <form id='frmtp'>
	  <div class='form-group'>
	  <label for='tipo_prod'>Tipo Producto</label>
	  <input type='text' name='tipo_prod' id='tipo_prod' placeholder='tipo producto' class='form-control'/>	
	  <input type='submit' value='Crear'/>
	  
		</div>
	  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="precios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajustar Precios</h4>
      </div>
      <div class="modal-body">
      <form action="" id='ajustpre'>
         <input type="hidden"  name='idprodprecios' id='idprodprecios'>
      <label for="precioj">Precio</label>
         <input type="text"  name='precioj' id='precioj' class="form-control">

         <br>
         <label for="precioob">Precio obrero</label>
         <input type="text" id='precioob' name="precioob" class="form-control">

         <br><br>

         <input type="submit" value="Ajustar" class="btn btn-danger">


      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="asgbordados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" id='aumentar'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lista de Bordados</h4>
      </div>

<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalbor">
  Asignar bordado
</button>

<!-- Modal -->
<div class="modal fade" id="modalbor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignar Bordado</h4>
      </div>
      <div class="modal-body">
        <input type='hidden' id='valoridprod'>
		<div id='lstbord'></div>
		
		<label for='cant'>Cantidad</label>
		<input type='number' value='0' min='0' id='cant' class='form-control'>
		<br><br>
		<button id='asginarbordado' onclick='asginarbordado();'>Asignar</button>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



      <div class="modal-body">
         <div class="box-body table-responsive no-padding">
              <table  id='bord-prod' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Codigo</th>
                  <th>Bordado</th>
                  <th>cantidad</th>
                     
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>


<!-- modal editar precio -->
<div class="modal fade" id="editarprecio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDITAR NOMBRES</h4>
      </div>
      <div class="modal-body">
       <form action="" id='editarprod'>
       	<div class='form-group'>
       		<input type='hidden' class='bandera' name='estado' value=0>
       		<input type='hidden' id='idproductoedit' name='idproductoedit'>
       		<label for="Tipoprode">TIPO DE PRODUCTO</label>
			<!--<div class="prodtp"></div>-->

       	</div>
       <div class='form-group'>
       		<label for="nomprodedit">Nombre producto</label>
       		<input type="text" id='nomprodedit' name='nomprodedit' class="form-control">
       		

       	</div>




       	 <input type='submit' value='Editar ' id='btnedit' class='btn btn-success'>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>


	
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Productos</h4>
	      </div>
	      <div class="modal-body">
	         <form class='form' id='formprod'>

	         	 <div class='form-group'>
              <!--<label id='id_prod'>Codigo</label>
              <input type='number' id='id_prod' name='id_prod' class='form-control'>-->
	         	 	<label for='nomprod'>Nombre</label>
	         	 	<input type=' text' placeholder='Nombre del Producto' name='nomprod' id='nomprod' class="form-control" required>
	         	 	<label for='precio'>Precio</label>

	         	 	<input type='number' name='precio' id='precio' required class='form-control'>
	         	 	<label for='subprecio'>Precio para Operario</label>
                <input type='number' name='precio' id='precio' required class='form-control'>
              <label for='preciosatelite'>Precio para satelite</label>

	         	 	<input type='number' name='preciosatelite' id='preciosatelite' required class='form-control'>


	         	 </div>
	         	 <div id='tpprod'></div>

	         	  <input type='submit' value='Ingresar Producto' id='btningresar'>
	         </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>

<div class="col-xs-11 col-md-11">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>Productos</h3><br><br>
			  <div class='form-group'>
			  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tpprodv">
			Agregar tipo producto
			</button>
			
			<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal" onclick="cargarproductos()">
	 Ingresar Producto
	</button>
	<button id='pdf' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span>  Productos</button>
			  </div>
              

            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
              <table  id='tblproductos' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Codigo</th>
                  <th>Tipo Producto</th>
                  <th>Nombre Producto</th>
                   <th>Valor</th>
                   <th>Subvalor</th>
                    <th>valor satelite</th>
		   <th>N bordados</th>
		   <th>valor bordados</th>

                  <th>Accion</th>
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
	
</body>
</html>