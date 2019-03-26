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


   <!-- Modal -->
 <div class="modal fade" id="editarcorte" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header bg-success">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">EDITAR PEDIDO</h4>
       </div>
       <div class="modal-body">
  
    
    
     <form id='form-edit'>
     <label for='editarfac'>Factura</label>
    <input type='number' class='form-control' name='facturaedit'id='editarfac'>
    <label for='editarfacul'>Facultad</label>
    <input type='text' class='form-control' name='facultadedit'id='editarfacul'>
    <label for='editarcant'>Cantidad</label>
  
    <input type='number' class='form-control' name='editcantidad'id='editarcant'>

<label for="etprod">Tipo Producto</label>
    <br>
     <select name="etprod" id="etprod" required="" class="form-control"></select>

    <label for='editartalla'>Talla</label>
        <select name="tallaedit" id="editartalla" class="form-control ">
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
    <label for='editardesc'>Descripcion</label>
    <textarea class='form-control' name='descripcion_edit'id='editardesc' rows='10' cols='20'></textarea>
    <label for='editarfentrega'>Fecha entrega</label>
    <input type='date' name='fentregae'id='editarfentrega' class='form-control'>
    <input name='idpersonaedit' id='editarpedido' type='hidden'>
    <input type='submit' value='Editar' class='btn btn-default'>
    </form>
    
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
       </div>
     </div>
   </div>
 </div>
  


  
  
  <!-- Modal -->
  <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="col-xs-17"> <strong align='center'>PEDIDOS CREACIONES </strong></div>



  
  <!-- cambio estado en confeccion -->
  <span></span>


<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>PRODUCTOS EN PROCESO</h3><br><br>
              
<!--<button id='pdf' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span>  Crear Pdf</button>-->


<a href="https://creacionescrea.com.co/Clistasatel/listaresumen"> Cantidad Prendas en Satelites</a>
<!--<button id='lista' class='btn btn-danger'><span class='glyphicon glyphicon-print'></span> Vista preliminar</button>-->
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