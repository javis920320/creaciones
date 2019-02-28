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

<div class="col-xs-17"> <strong align='center'>PEDIDOS CREACIONES </strong></div>



  
  <!-- cambio estado en confeccion -->
  <span></span>


<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>PRODUCTOS EN PROCESO</h3><br><br>
              
<!--<button id='pdf' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span>  Crear Pdf</button>-->



<button id='lista' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span> Vista preliminar</button>
            </div>
            <!-- /.box-header -->
            
<a href="">Busqueda Avanzada</a>
<div class=" panel panel-primary">
  <div class="panel-heading">
   BUSQUEDA AVANZADA
    
  </div>
  <div class="panel-body">

    <input type="text" id="busfact" placeholder="factura">
<!--<input type="text" id="busproducto" placeholder="Producto">--> 
<!--<input type="text" id="busfacultad" placeholder="Facultad"> -->
<input type="number"  id="buscantidad" placeholder="Cantidad">
<input type="text" id="bustalla" placeholder="Talla">
<label for="fingreso">fecha Ingreso</label>
<input type="date" id="fingreso" placeholder=" fecha Ingreso">
<label for="fingreso">fecha Entrega</label>
<input type="date" id="fentrega" placeholder=" fecha Ingreso">
<!--<input type="text" id="busdescripcion" placeholder="Descripcion">-->
<!--<input type="text"  id="buscliente" placeholder="Cliente">-->
 <button  onclick="eventClick();"> Buscar</button>
    
  </div>
  
</div>


            <div class="box-body table-responsive no-padding">
              <table  id='tblproductosen' class="table table-hover table-responsive">
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
				  <th>Fecha Entrega</th>
                  <th ">Estados</th>
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