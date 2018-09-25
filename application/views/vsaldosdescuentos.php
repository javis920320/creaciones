
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



<div class="box box-primary">
<div class="box-body">	
		<div class="row">
			
		<!--</div>-->


		<!--<div class="row">-->

			<div class="col-md-12">
				
			
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