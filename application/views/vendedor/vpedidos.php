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
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Crear pedido
</button>

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
					<option value="A">A</option>
					<option value="A">A</option>
					<option value="A">A</option>
					<option value="A">A</option>

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


<div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>PEDIDOS</h3><br><br>
              

            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
              <table  id='tblpedidos' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
                  <th>Factura</th>
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
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	
</body>
</html>