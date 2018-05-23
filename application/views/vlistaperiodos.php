<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="box">
		
<h2 class="text-primary"><strong>CONFIGURACIÓN PERIODOS</strong></h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Agregar Periodo
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
<table id='tblconfigper'>
<thead>
                    <tr>
                      <th style="width: 5%;background-color: #006699; color: white;">#</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha Inicio</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha FIn</th>
                        <th style="width: 10%;background-color: #006699; color: white;">Estado</th>
					   <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
					   
   
                    </tr>
                </thead>


                <tbody>
                	
                </tbody>
</table>


	</div>
	<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
</body>
</html>