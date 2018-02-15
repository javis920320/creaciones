<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	
</head>
<body>
	<style type="text/css">
	.responsive-input{
  width: 100%;
}


 #aumentar{
      width: 80% !important;
    }
	</style>

<div class="col-xs-17"> <strong align='center'>Creaciones Goretti</strong></div>



  
  
 <!-- Modal -->
 <div class="modal fade" id="asignar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document" id="aumentar">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">CREACIONES GORETTI</h4>
       </div>
       <div class="modal-body">
         <div class='form-group'>
          <input type='number' id='fac' name='fac' class='form-control'>
          <button class='btn btn-primary 'onclick='buscar();'>Buscar pedido</button>
         </div>

         <div id="res"></div>

  <label for='tpprod'>Categoria Producto</label>
              <select id="tpprod" name="tpprod" class=" pr form-control" onchange='filtrar();' required="true"></select>
          <table id="tblresumen" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 5%;background-color: #006699; color: white;">#</th>
              <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
              <th style="width: 10%;background-color: #006699; color: white;">Tipo producto</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Talla</th>
              <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cliente</th>
              <th style="width: 10%;background-color: #006699; color: white;">Fecha Ingreso</th>
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

<br><br>

            <input type='button' value='Asisgnar' class='btn btn-alert' onclick='registroproceso();'>
       </div>




       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
       </div>
     </div>
   </div>
 </div>


<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'> SATELITES CREACIONES </h3><br><br>
              
<button id='pdf' class='btn '  data-toggle="modal" data-target="#asignar"><span class='glyphicon glyphicon-sum'></span>  Asignar proceso</button>



            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
             <!-- <table  id='tblproductosen' class="table table-hover table-responsive">
                <thead class="bg-success">
                <tr>
                  <th>Factura</th>
                  <th>Producto</th>
                  <th>Facultad</th>
                   <th>Cantidad</th>
                   <th>Talla</th>
                   <th>Descripcion</th>
                   <th>Cliente</th>
                  <th>Fecha ingreso</th>
                  <th>Estados</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>-->
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