<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="box">
		
<h2 class="text-primary"><strong>CONFIGURACIÓN PERIODOS</strong></h2>


<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          

          <input type="hidden" name="per" id='per'>
          <label for='fi'>Fecha Inicio </label>
          <input type="date" name="fi" id='fi' class='form-control'>
          <label for='ff'>Fecha Fin</label>
          <input type="date" name="ff" id='ff' class='form-control'>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="editarper();">Editar</button>
      </div>
    </div>
  </div>
</div>



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
        <h4 class="modal-title" id="myModalLabel">NUEVO PERIODO</h4>
      </div>
      <div class="modal-body">
        <label for='finicio' ><strong>Fecha Inicio</strong></label>
       <input type="date" name='finicio' id='finicio' class="form-control">
        <label for='ffin' ><strong>Fecha Fin</strong></label>
       <input type="date" name='ffin' id='ffin' class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id='crearperiodo' onclick="crearperiodo();">Nuevo</button>
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