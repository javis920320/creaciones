<html>
<head>
	<title></title>
</head>
<body>
<br>




<div class="box box-primary">
	


<div class="box-body">
<div id='pr'></div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="cedula">cedula:</label>
					<div class="text-danger hide" id='alerta'><strong>El Cliente No esta registrado.completa los campos .</strong></div>
				 <div class="text-danger hide" id='alerta1'><strong>Este dato es requerido.</strong></div>

				 <input type="text" placeholder="Buscar cliente" id="idcliente" class="form-control"   required >


				 <input class="btn btn-primary" type="submit" value="Buscar cliente" id='btnbuscar'>
				 <br>

				 <br>
				 <div class='hide' id='formingc'>
				 <div class="col-sm-5">
				  <label for='nombres'>Nombres:</label>
				  <input type='text' name='nombres' placeholder='Nombres'id='nombres' class='form-control'>
				  <span id='spnnombre'></span>
				  </div>
				  <div class="col-sm-5">
				  <label for='telefono'>Telefono</label>
				  <input type='text' name='telefono' placeholder='Telefono'id='telefono' class='form-control'>
				  <span id='spntel'></span>
				  </div>	
				  
				  <div class="col-sm-2">
				  <label>(*)</label>
				   <button id='btncrearcliente' class='btn btn-default' onclick='agregarcliente();';>Agregar Cliente</button>
				  </div>
				 
				 </div>
				  

			</div>

			</div>

<div class='hide'id='formularioacceso'>



			

			<div class=' col-sm-4 '>

			</div>
		
			<div class=' col-sm-12 '>
				<br>

				
			<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Para Ingresar un nuevo Pedido  el cliente debe estar registrado, si no se encuentra registrado por favor presione
  <a href="<?php echo base_url()?>Cpedidoscliente/buscarcliente">Aqui</a>
</div>

			</div>
		

			

			<div class="col-sm-12">
				<div class="contenedor_json" align='center'>

			</div>

			</div>


			<div class="col-sm-6 " >
				<div class="form-group ">
					<label for="factura">Factura:</label>
					  <div class="text-danger hide" id='alerta2'><strong>Este dato es requerido.</strong></div>


				 <input type="text" placeholder="N Factura" id="factura" class="  form-control">
				

			</div>

			</div>	


			<div class="col-sm-6">
				<div class="form-group ">
					<label for="facultad" class=''>Facultad:</label>

				 <input type="text" placeholder="Ingresar facultad" id="facultad" class="form-control ">
				  <div class="text-danger hide" id='alerta3'><strong>Este dato es requerido.</strong></div>

				</div>

			</div>	


			

			<div class="col-sm-4">
				<div class="form-group ">
					<label for="tpprod" >Tipo Producto:</label>
					<div id='tpprod' ></div>

			


				</div>
					<input type="hidden" class="idpersona" id='idpersona' name="idpersona">
				

			</div>


			<div class="col-sm-4">
				<div class="form-group ">	
				<label for="talla" >Talla</label>
				<select name="talla" id="talla" class="form-control ">
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

			</div>
			</div>


			<div class="col-sm-4">
				<div class="form-group ">
					<label for="cantidad">Cantidad</label>

					<input type="number" id="cantidad" class="form-control" value="1">	
				

				</div>



			</div>	
			




			<div class="col-sm-12">
				<div class='form-group '>
			<label for="descripcion" >Descripcion:</label>

			

				<textarea cols="30" rows="5" class='form-control 'id='descripcion' ></textarea>
			</div>
			</div>

			<div class="col-sm-8">
				<div class="form-group ">
					<div class="col-sm-4">
					<button  id=''  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Agregar</button>
					</div>
					<div class="col-sm-4">	
					<a class='btn btn-default btn-lg' href='<?php echo base_url()?>Cpedidomultiple'>Limpiar</a>
					</div>
					<div>
					<a class='btn btn-danger btn-lg' href='<?php echo base_url()?>Cpedidos'>Volver a lista pedidos</a>
					</div>
					

				


				</div>

			</div>	


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
      	<input type="submit" title="Presionar" value="Enviar" class="btn btn-success">
      	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      		
      	</div>
      	

      </form>
            </div>
      <div class="modal-footer">
        
        
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
			        <h4 class="modal-title" id="myModalLabel">Ingresar Pedido</h4>
			      </div>
			      <div class="modal-body">

			      	<strong>Estas Seguro de ingresar el pedido?</strong>


			      	 <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary" id='agregarprod' data-dismiss="modal">Aceptar</button>
			        
			      </div>
			      <div class="modal-footer">
			       
			      </div>
			    </div>
			  </div>
			</div>


	
          
     
              <table  id='tblresumen' class="table table-hover table-responsive">
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
         
            <!-- /.box-body -->
          
          <!-- /.box --> 
	
		
</div>
</div>
</div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>