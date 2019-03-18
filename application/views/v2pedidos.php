<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		

.radiov{
 
  margin-right: 150px;

}
/*#panel2{
	height: 150px;
}*/

	</style>
<br>




<!-- Modal -->
<div class="modal fade" id="ejemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



		<!-- Button trigger modal -->




<!-- Modal -->
<div class="modal fade" id="modempre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Configuracion Entidades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button id='formentidad' class=" btn btn-default">Nueva entidad</button><button id="formdep" class=" btn btn-default">Agreagar dependencia</button>
        <br><br>

       
        <div id="contend" class="hide">
        	 <label><strong>Nombre:</strong></label>
        <input type="text" name="nentidad" id="nentidad" class="form-control">
        <input type="hidden" name="tipoent" id="tipoent">
        <button class="btn btn-success" onclick="creaentidad();">Guardar</button>
        </div>

        
        <div id="lstdepe" class="hide">
        	<label>Entidad</label>
        	<div id='x1'></div>
        <label>Nombre:</label>	
        <input type="text" name="ndepe" id="ndepe" class="form-control">
        <br>
        <button class="btn btn-success" onclick="creadependencia();">Guardar</button>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	


<div class="box box-primary">
	


<div class="box-body">


				<div class="panel panel-primary">
					<div class="panel-heading"><strong>Datos de Cliente</strong></div>
				  	<div class="panel-body">

				  	<div class="col-lg-12">
				  		<strong class="bg bg-danger" id='msj'></strong>

					<div class="col-lg-3">
						
					
				  	
				 	<label for="idcliente"><strong>Identificacion  :</strong></label><input type="number" name="" class="form-control" id="idcliente">
				 </div>
						<div class="col-lg-3">
						
					
				 	<label for="nomcli"> <strong>Nombres</strong></label> <input type="text" name="" placeholder="Nombre cliente" class="form-control" id="nomcli">
				 	</div>
				 	<div class="col-lg-3">
				 	<label for="telcli">Tel-cel</label> <input type="number" name="" class="form-control"  id="telcli"><br>
				 	</div>
				 	<button class="btn btn-primary" id="btnnuevocli" name="btnnuevocli" onclick="newcliente();">Nuevo cliente</button>

				   </div>
				  </div>
				  <div class="panel-footer"></div>
				</div>

				<div class="panel panel-primary" id="panel2">
					<div class="panel-heading"><strong>Tipo cliente</strong></div>
				  <div class="panel-body">

				  	<div class="row">
				  		
				  		<div class="col-md-4">
				  			<label>PARTICULAR</label><input class="form-check-input radiov" name='tpentidad' type="radio" id="pa"  value="P" checked="true">
				      <label>EMPRESA</label><input class="form-check-input radiov" name='tpentidad'type="radio" id="em"  value="E">
				      <label>UNIVERSIDAD</label><input class="form-check-input radiov" name='tpentidad'type="radio" id="un"  value="U">
				      <label>COLEGIO</label><input class="form-check-input radiov" name='tpentidad'type="radio" id="co"  value="C">
				  		</div>
				  		<div class="col-md-4">
				  			
				  		</div>
				  		<div class="col-md-4">
				  			<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <strong> Mas configuraciones</strong> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#"  data-toggle="modal" data-target="#modempre" onclick="parametros('E');">Empresas</a>


    </li>
    <li><a href="#" data-toggle="modal" data-target="#modempre"onclick="parametros('C');">Colegios</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modempre"onclick="parametros('U');">Universidades</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
				  		</div>
				  	</div>
				      

				      <div id="" class="col-lg-12">
				      	<div id="" class="col-lg-4">
				      	
				<select id="cont_tpcli" name="cont_tpcli" class=" pr form-control"  required="true"></select> <label>Mas</label>
			</div>

				     
				     
				        <div id="" class="col-lg-4">
				      	<select  id='dep' class="form-control"></select> 


				      </div>
				       </div>

				      
				   
				  </div>
				  <div class="panel-footer"></div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading"><strong>Detalles de pedido</strong></div>
				  <div class="panel-body">
				  	<!--INICIO-->
				  	<div class="col-md-12">

				  		<div class="col-lg-10">

				  			<div class="col-lg-2"><label><strong>Factura</strong></label><input class="form-control" type="number" id='faccli'></div>
				     <div class="col-lg-2"> <label><strong>Fecha Entrega</strong></label><input class="form-control" type="date" id="fecentre"></div>
				    <div class="col-lg-3">  <label for="tpprod" >Tipo Producto:</label>

					<div id='tpprod'></div></div>

					<div class="col-lg-2">
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
					<div class="col-lg-2"><label for="lblcn"><strong>Cantidad</strong></label> <input class="form-control" type="numer" name="" id="lblcn" min="1" value="1"></div>
				  		</div>
				  		
				  	


				      

					
		
				
				  
			
			<div class="col-lg-10"><label for="lbldesc"><strong>Descripcion</strong></label> <textarea cols="30" rows="2" class='form-control 'id='lbldesc' ></textarea></div>


			</div>
			<!--FIN-->
				   
				  </div>
				  <div class="panel-footer">
				  	
				  	<button class="btn btn-primary" onclick="creapedido();"><strong>Crear pedido</strong></button>


				  	
				</div>



</div>



<div class="panel panel-success">
					<div class="panel-heading"><strong>Detalles de pedido</strong></div>
				  <div class="panel-body">
				  		
				  		<table class=" table table-striped">
				  			<thead>
				  			<th>Factura</th><th class=''>codent</th><th class=''>codep</th><th>Facultad-Entidad</th><th>Fecha Entrega</th><th>#</th><th>Tipo prod</th><th>Talla</th><th>Cantidad</th><th>Descripcion</th><th>Acciones</th>
				  			</thead>
				  			<tbody id='resumen'>
				  				
				  			</tbody>

				  		</table>
				  	</div>
				  <div class="panel-footer">
				  	
				  	<a href="<?php echo base_url(); ?>/Cproductosen">Productos enviados</a>

				  	
				</div>
</div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>