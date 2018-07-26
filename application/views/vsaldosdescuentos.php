
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<!-- Modal -->
<div class="modal fade" id="modadel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignar adelanto</h4>
      </div>
      <div class="modal-body">


		<select id="tr1" class="form-control">
            
          </select>
<br><br>

     <div class="form-group">
    	<label class="sr-only" for="valor">Valor (in dollars)</label>
    		<div class="input-group">
      			<div class="input-group-addon">$</div>
      			<input type="text" class="form-control" id="valadd" placeholder="Valor">
      			<div class="input-group-addon">.00</div>
    		</div>
 	 </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="cargaradelanto();">Guardar</button>
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
        <h4 class="modal-title" id="myModalLabel"><strong>Cargar Descuentos</strong></h4>
      </div>
      <div class="modal-body">
<label for="listatrabajador"><strong>Lista Trabajadores:</strong></label>
        <div class="listatrabajador">
          <select id="tr" class="form-control">
            
          </select>
        </div>
        <br>
         <div class="form-group">
    <label class="sr-only" for="valor">Valor (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="valor" placeholder="Valor">
      <div class="input-group-addon">.00</div>
    </div>
  </div>

          <label for="concepto"><strong>Concepto:</strong></label><br>
        <textarea rows="5" cols="80" id="concepto" name="concepto" class="form-control">
          
        </textarea>

      </div>
      <div class="modal-footer">
        <button class="btn btn-success" onclick="cargardesc();">Cargar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   
      </div>
    </div>
  </div>
</div>


<div class="box box-primary">
<div class="box-body">	
		<div class="row">
			<div class="col-md-6">
				
			
			<div class="panel panel-primary">
		  		<div class="panel-heading"><strong>Lista de Descuentos</strong></div>
		  		<div class="panel-body">
		  			<button class=" btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Descuento</button><br><br>

 			<table  id='tbldec' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Nombres</th>
              <th style="width: 10%;background-color: #006699; color: white;">Concepto</th>
              <th style="width: 10%;background-color: #006699; color: white;">Valor</th>
              <th style="width: 10%;background-color: #006699; color: white;">Fecha</th>
              <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
             
                    

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>


		  		</div>
			</div>

			</div>
		<!--</div>-->


		<!--<div class="row">-->

			<div class="col-md-6">
				
			
			<div class="panel panel-primary">
		  		<div class="panel-heading"><strong>Lista Adelantos</strong></div>
		  		<div class="panel-body">
		  			<button class=" btn btn-success" data-toggle="modal" data-target="#modadel"><span class="glyphicon glyphicon-plus"></span> Adelantos</button><br><br>

 			<table  id='tbladelantos' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Nombres</th>
              <th style="width: 10%;background-color: #006699; color: white;">Valor</th>
              <th style="width: 10%;background-color: #006699; color: white;">Fecha</th>
              <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
             
                    

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>


		  		</div>
			</div>
			</div>
		</div>



	</div>
</div>
<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
  
</script>

</body>
</html>