<html>
<head>
	<title></title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<style type="text/css">
		

.radiov{
 
  margin-right: 150px;

}



	</style>
<br>



<!-- Modal -->
<div class="modal fade" id="ventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <i class="material-icons" align='center'style="font-size:60px;color:yellow;text-shadow:2px 2px 4px #000000;">sentiment_very_satisfied
</i><h2 class="" id="msj"><strong></strong></h2>
      </div>
      
    </div>
  </div>
</div>


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

<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-primary">
					<div class="panel-heading"><strong>Datos de Cliente</strong></div>
				  <div class="panel-body">
				  	<strong class="bg bg-danger" id='msj'></strong><br>
					
				 <label for="idcliente"><strong>Identificacion  :</strong></label><input type="number" name="" class="form-control" id="idcliente"><br><button  id='btnvalcc'class=" btn btn-primary form-control"> <span class="glyphicon glyphicon-search"></span>  Validar cedula</button>


				 <label for="nomcli"> <strong>Nombres</strong></label> <input type="text" name="" placeholder="Nombre cliente" class="form-control" id="nomcli">
				 <label for="telcli">Tel-cel</label> <input type="number" name="" class="form-control"  id="telcli"><br>
				 <button class="btn btn-primary" id="btnnuevocli" name="btnnuevocli" onclick="newcliente();">Nuevo cliente</button>


				   
				  </div>
				  <div class="panel-footer"></div>
				</div>
		
	</div>

	<div class="col-lg-6" id="pnl">

		<div class="panel panel-primary">
					<div class="panel-heading"><strong>Tipo cliente</strong></div>
				  <div class="panel-body">
				  
				  		
				  		<div class="col-md-4">
				  			<label>PARTICULAR</label><input class="form-check-input radiov" name='tpentidad' type="radio" id="pa"  value="P" checked="true"><br>
				      <label>EMPRESA</label><input class="form-check-input radiov" name='tpentidad'type="radio" id="em"  value="E"><br>
				      <label>UNIVERSIDAD</label><input class="form-check-input radiov" name='tpentidad'type="radio" id="un"  value="U"><br>
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
				      

				      <br> <br>


				      <div id="">
				      	
				<select id="cont_tpcli" name="cont_tpcli" class=" pr form-control"  required="true"></select>

				      </div>
				      <br><label>Mas</label>
				        <div id="">
				      	<select  id='dep' class="form-control"></select> 


				      </div>

				      
				   
				  </div>
				  <div class="panel-footer"></div>
				</div>
		
	</div>
	
</div>

				

				

				<div class="panel panel-primary">
					<div class="panel-heading"><strong>Detalles de pedido</strong></div>
				  <div class="panel-body">
				      <label><strong>Factura</strong></label><input class="form-control" type="number" id='faccli'>
				      <label><strong>Fecha Entrega</strong></label><input class="form-control" type="date" id="fecentre">
				      <label for="tpprod" >Tipo Producto:</label>

					<div id='tpprod'></div>

					
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
			<label for="lblcn"><strong>Cantidad</strong></label> <input class="form-control" type="numer" name="" id="lblcn" min="1" value="1">
			<label for="lbldesc"><strong>Descripcion</strong></label> <textarea cols="30" rows="5" class='form-control 'id='lbldesc' ></textarea>
				   
				  </div>
				  <div class="panel-footer">
				  	
				  	<button class="btn btn-primary" onclick="creapedido();"><strong>Crear pedido</strong></button>


				  	
				</div>



</div>



<div class="panel panel-success">
					<div class="panel-heading"><strong>Detalles de pedido</strong></div>
				  <div class="panel-body">
				  		<button class=" btn btn-info"onclick='enviart()';>Enviar Seleccion</button>
				  		<label>
        <input type="checkbox" class="filled-in"  />
        <span>Selecciona todo</span>
      </label>
				  		<table  id='tblped'class=" table table-striped">
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

 <!-- Compiled and minified CSS 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">-->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</body>
</html>