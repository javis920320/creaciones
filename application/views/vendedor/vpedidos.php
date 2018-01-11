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

<div class="col-xs-17"> <strong align='center'>PEDIDOS CREACIONES GORETTI</strong></div>


		<!-- Button trigger modal -->
    <div class='hide'>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
  <span class='glyphicon glyphicon-plus'></span>Crear pedido
</button>
      
    </div>
 <!-- Modal -->
  <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">CREACIONES</h4>
        </div>
        <div class="modal-body">
          <form>

            <label for='idpedidod'>Deseas eliminar este registro</label>
            <input type='hidden' id='idpedidod'>
            <input type='button' class='btn btn-primary' data-dismiss="modal" value='Eliminar' onclick='eliminarp();'> <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

          </form>
        </div>
        <div class="modal-footer">
         
          
        </div>
      </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INFORMACION DEL PEDIDO</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12">
			<div class="form group">
			<form action="" class="form-inline">
				<input type="text" placeholder="Buscar Cliente" class="form-control" name='idcliente' id='idcliente'>
				<input type="button" title="Presionar" value='Buscar' id='btnbuscar' class="form-control btn btn-primary">
			</form>			
			</div>

			<div class="text-danger hide" id='alerta'><strong>El Cliente No esta registrado..</strong></div>
			<div id="fecha"></div>
			 </div>


			 <div class="col-xs-12">
			<div class="form group">
			<div class="contenedor_json"></div>
			<form action="" class="form hide" id='ingpedido'>
				<label for="factura">N.Factura</label>
				
				<input type="text" placeholder="Numero de factura" class="form-control" name='factura' id='factura'>
				<label for="facultad">Facultad</label>
				<input type="text" class="form-control"  id ='facultad' placeholder="Facultad" name="facultad">
				<label for="seltp"></label>
				<div class="prodtp"><strong>Tipo de Proucto</strong></div>
				<label for="cantidad">Cantidad:</label>
				<input type="number" id='cantidad' class="form-control" name="cantidad">
				<label for="talla">Talla</label>
				<select name="talla" id="talla" class="form-control">
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
				<label for="descripcion:">Descripcion:</label>
				<div class='col-xs-12'>
						<textarea name="descripcion" id="descripcion" cols="120" rows="10"  class='form-control'>
					
						</textarea>
				</div>
			
				<input type="hidden" class="idpersona" id='idpersona' name="idpersona">
				<input type="hidden" class="fecha" id='fecha' name="fecha">

				<input type="submit" title="Presionar" value='Ingresar Pedido' id='' class="form-control btn btn-primary">
			</form>			
			</div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalEditPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDITAR PEDIDO</h4>
      </div>
      <div class="modal-body">

        <form id='form-edit'>

          <div class='form-group'>
            <label for='Facturaedit'>Factura</label>
            <input type='text' placeholder='Facturaedit' id='facturaedit' name='facturaedit' class='form-control' required>
          </div>
            <div class='form-group'>
            <label for='facultadedit'>Factura</label>
            <input type='text' placeholder='Facturaedit' id='facultadedit' name='facultadedit' class='form-control' required>
          </div>

        <div class='form-group'>
          <label for='editcantidad'>Cantidad</label>
          <input type='number' placeholder='' id='editcantidad' name='editcantidad' class='form-control'required>

        </div>
         <div class='form-group'>
          <label for='tallaedit'>Talla</label>
          <input type='text' placeholder='talla' id='tallaedit' name='tallaedit' class='form-control' required>
        </div>


        <label for="descripcion:">Descripcion:</label>
        <div class='col-xs-12'>
            <textarea name="descripcion_edit" id="descripcion_edit" cols="120" rows="10"  class='form-control' required='true'>
          
            </textarea>
        </div>
      
        <input type="hidden" class="idpersonaedit" id='idpersonaedit' name="idpersonaedit">
        <input type="hidden" class="fechaedit" id='fecha' name="fechaedit">

        <input type="submit" title="Presionar" value='Editar Pedido' id='' class="form-control btn btn-primary">




        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="estado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Proceso de envio</h4>
      </div>
      <div class="modal-body">

      <form id="cambioestado">
      <strong class="text-success">Estas seguro de Enviar el pedido...?</strong>
      	<input type="hidden" id='idpedido' name="idpedido">  
      		<input type="hidden" id='enviar' name="enviar">
      	<div class="form-group">
      	<input type="button" title="Presionar" value="Enviar" data-dismiss="modal" class="btn btn-success" onclick='cambioestado();'>
      	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      		
      	</div>
      	

      </form>
            </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>



          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>RESUMEN PEDIDOS</h3><br><br>
              
<a href="<?php echo base_url()?>Cpedidomultiple" class='btn btn-primary'> Agregar Pedido</a>
            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
            <label for="chk">Enviar lista</label>
            <input type='checkbox' name='chk' id='chk' value=1>
            
            <form action="" id='camestado'>
              <table  id='tblpedidos' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Factura</th>
                  <th>Producto</th>
                  <th>Facultad</th>
                   <th>Cantidad</th>
                   <th>Talla</th>
                   <th>Descripcion</th>
                   <th>Cliente</th>
                  <th>Fecha ingreso</th>
                  <th>Accion</th>

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
              <input type="submit" value='enviarlista'>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
	
</body>
</html>