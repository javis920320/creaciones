<html>
<head>
	<title></title>
</head>
<body>
<br>
 <div id="midial"></div>
		<!-- Button trigger modal -->


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
<div class="modal fade" id="editarp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Pedido</h4>
      </div>
      <div class="modal-body">
       <form action="" id="formedp">
       <input type="hidden" id='idpedidoed'>

       <div class="form-group">
       	<label for="faced">Factura</label>

       	<input type="text" id='faced' class="form-control"  required="true">
       </div>


       <div class="form-group">
       	<label for="facued">Facultad</label>

       	<input type="text" id='facued' class="form-control" required="true">
       </div>
         <div class="form-group">
       	<label for="fentregax">Fecha entrega</label>

       	<input type="date" id='fentregax' class="form-control" required="true">
       </div>

       <div class="form-group">
       	<label for="canted">Cantidad</label>

       	<input type="number" id='canted' class="form-control" required="true">
       </div>

       <div class="form-group">
       	<label for="talled">Talla</label>

       	<input type="text" id='talled' class="form-control" required="true">
       </div>

       <div class="form-group">
       	<label for="desced">Descripcion</label>

       	<!--<input type="text" id='desced' class="form-control">-->

       	<textarea id='desced' class="form-control" rows="10" cols="120">
       		
       	</textarea>
       </div>
       	
		<input  type='button' value='EDITAR'  data-dismiss="modal" id='btneditarp' onclick="editarpedido();">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>


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


			<div class="col-sm-4 " >
				<div class="form-group ">
					<label for="factura">Factura:</label>
					  <div class="text-danger hide" id='alerta2'><strong>Este dato es requerido.</strong></div>


				 <input type="text" placeholder="N Factura" id="factura" class="  form-control">
				

			</div>

			</div>	


			<div class="col-sm-4">
				<div class="form-group ">
					<label for="facultad" class=''>Facultad:</label>

				 <input type="text" placeholder="Ingresar facultad" id="facultad" class="form-control ">
				  <div class="text-danger hide" id='alerta3'><strong>Este dato es requerido.</strong></div>

				</div>

			</div>	


			<div class="col-sm-4">
				<div class="form-group ">
					<label for="fentrega" class=''>Fecha entrega:</label>

				 <input type="date" placeholder="" id="fentrega" class="form-control ">
				  <div class="text-danger hide" id='alerta4'><strong>Este dato es requerido.</strong></div>

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

		<div class="form-control">
				<label class="col-md-3 control-label" for="button1id">Accion</label>
				  <div class="col-md-8">
				  	<button  id=''  class="btn btn-primary " data-toggle="modal" data-target="#myModal">Agregar</button>
				  	<a class='btn btn-default ' href='<?php echo base_url()?>Cpedidomultiple'>Limpiar</a>
				  	<a class='btn btn-danger ' href='<?php echo base_url()?>Cpedidos'>Volver a lista pedidos</a>
				  	<button id='btnenv' class='btn btn-primary'  onclick='generarenvio();'><span class='glyphicon glyphicon-resize-small'></span> Enviar seleccion</button>
<label for='mtodo'>Seleccionar todo    </label><input type='checkbox' id='mtodo' name='mtodo' class='' value='true' >


				  </div>


			</div>

		<br><br><br>	


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
                  <th>Fecha Entrega</th>
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