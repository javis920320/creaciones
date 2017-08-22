<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>

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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
			 </div>


			 <div class="col-xs-12">
			<div class="form group">
			<div class="contenedor_json"></div>
			<form action="" class="form hide" id='ingpedido'>
				<label for="factura">N.Factura</label>
				
				<input type="text" placeholder="Numero de factura" class="form-control" name='factura' id='factura'>
				<label for="seltp"></label>
				<div class="prodtp"><strong>Tipo de Proucto</strong></div>
				<label for="cantidad">Cantidad:</label>
				<input type="number" id='cantidad' class="form-control">
				<label for="talla"></label>
				<select name="talla" id="talla" class="form-control">
					<option value="A">A</option>
					<option value="A">A</option>
					<option value="A">A</option>
					<option value="A">A</option>

				</select>

				<input type="button" title="Presionar" value='Buscar' id='' class="form-control btn btn-primary">
			</form>			
			</div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	
</body>
</html>