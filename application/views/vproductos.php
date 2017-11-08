<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>





<!-- modal editar precio -->
<div class="modal fade" id="editarprecio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDITAR PRECIO</h4>
      </div>
      <div class="modal-body">
       <form action="" id='editarprod'>
       	<div class='form-group'>
       		<input type='hidden' class='bandera' name='estado' value=0>
       		<input type='hidden' id='idproductoedit' name='idproductoedit'>
       		<label for="Tipoprode">TIPO DE PRODUCTO</label>
			<div class="prodtp"></div>

       	</div>
       <div class='form-group'>
       		<label for="nomprodedit">Nombre producto</label>
       		<input type="text" id='nomprodedit' name='nomprodedit' class="form-control">
       		

       	</div>
<div class="btn-group" role="group" aria-label="...">
  <button type="button" id='btnconfirmar' class="btn btn-default">Habilitar</button>
  <button type="button" id='btnnoconfirmar'class="btn btn-default">Desabilitar</button>
  
</div>

       	 <div class='form-group'>
       		<label for="valoredit">Precio</label>
       		<input type="number" id='valoredit' name='valoredit' class="form-control" disabled='true'>
       		

       	</div>

       	<div class='form-group'>
       		<label for="subvaloredit">Precio para operario</label>
       		<input type="number" id='subvaloredit' name='subvaloredit' class="form-control" disabled>
       		

       	</div>


       	 <input type='submit' value='Editar ' id='btnedit' class='btn btn-'>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="cargarproductos()">
	 Ingresar Producto
	</button>
	
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
	         	 	<label for='nomprod'>Nombre</label>
	         	 	<input type=' text' placeholder='Nombre del Producto' name='nomprod' id='nomprod' class="form-control" required>
	         	 	<label for='precio'>Precio</label>

	         	 	<input type='number' name='precio' id='precio' required class='form-control'>
	         	 	<label for='subprecio'>Precio para Operario</label>

	         	 	<input type='number' name='subprecio' id='subprecio' required class='form-control'>


	         	 </div>
	         	 <div id='tpprod'></div>

	         	  <input type='submit' value='Ingresar Producto' id='btningresar'>
	         </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

<div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>Productos</h3><br><br>
              
<button id='pdf' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span>  Productos</button>
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