<html>
<head>
	<title></title>
</head>
<body>
  <!-- Button trigger modal -->
 
  
  <!-- Modal -->
  <div class="modal fade" id="acionesmod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Ajustes de pedido</h4>
        </div>
        <div class="modal-body">
         <input type="hidden" id="datoproceso">
          <input type="hidden" id="cantidad">
         <label for="lisprod">PRODUCTOS</label>
         <div id="lisprod"></div>
         <label for="tr">TRABAJADOR</label>
         <select id="tr" class="form-control" onchange="vertipo();"></select>

         <div id="tppago"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="updateproceso();">Guardar Datos</button>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Modal -->
  <div class="modal fade" id="ediper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nuevo Periodo</h4>
        </div>
        <div class="modal-body">
         <form  id='nuevoper'>
          <label for=''>Fecha inicio</label>
          <input type='hidden' id='modper' name='modper' class='form-comtrol'>
		  
          <input type='date' id='fechaie' name='fechaie' class='form-comtrol' >
          <label for='fechafe'>Fecha Final</label>
           <input type='date' id='fechafe' name='fechafe' class='form-comtrol' >
		   <input type='submit' value='Nuevo Periodo'>

         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>
<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header box-primary">

            	<span class='text text-success'><strong>RESUMEN TRABAJOS CREACIONES GORETTI</strong></span>


            	
            </div>
            <div class="box-body">

            	<fieldset class="scheduler-border">
    			<legend class="scheduler-border"><span class="text text-primary"> <strong>   CREACIONES GORETTI</strong> </span></legend>
    			
				
            <div class='hide'><div class="col-xs-5 col-md-5"><label for="fechai"><strong class="text text-primary">FECHA INICIO</strong></label><input type="date" name="fechai" id='fechai' class="form-control"></div>

            <div class="col-xs-5 col-md-5"><label for="fechaf"><strong class="text text-primary">FECHA FIN</strong></label><input type="date" name="fechaf" id='fechaf' class="form-control"></div></fieldset>
			</div>
<br><br>
             <div class="col-xs-10 col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading">RESUMEN VALORES</div>
             <div class="panel-body">

			 <table id="tblperiodo" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th style="width: 5%;background-color: #006699; color: white;">#</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha Inicio</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha FIn</th>
					   <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
					   
   
                    </tr>
                </thead>
                <tbody></tbody>
              </table>
             <span class='text text-success'><strong>PRECIO PRODUCTOS:<div id='prep'></div></strong></span><br><br>
             <span class='text text-success'><strong>PRECIO BORDADOS:<div id='preb'></div></strong></span><br><br>
             <span class='text text-success'><strong>PRODUCCION TOTAL:<div style='color:black'id='pret'></div></strong></span><br><br>
               
            </div>
            </div>
            </div>

                       <div class="col-xs-2 col-md-2"> <div class='hide'><button class="btn  btn-danger form-control" id='btnfl' onclick='resfiltrar();'>Filtrar</button></div>
                       <!--<a href='<?php echo base_url();?>Cresumenprocesos/resumen' id='btnexportar'class='btn btn-success form-control'>Exportar Excel</a>-->

                      <a href='<?php echo base_url();?>Creporte/?fechai="2017-10-20"&fechaf="2017-11-21"?>' id='o'class='btn btn-success form-control'>Exportar Excel</a>
                      <button  id='pdfreport'class='btn bnt-danger btn-lg form-control'><span class='glyphicon glyphicon-download-alt'></span>  Generar Pdf</button>
                       </div>
            <br><br>

                <table id="tbltrabajos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th style="width: 5%;background-color: #006699; color: white;">#</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
					   <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
					      <th style="width: 10%;background-color: #006699; color: white;">Talla</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Producto</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Precio prenda</th>
                      <th style="width: 10%;background-color: #006699; color: white;">N°bordados</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Precio bordados</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha</th>
                        <th style="width: 2%;background-color: #006699; color: white;">Id</th>
                      <th style="width: 10%;background-color: #006699; color: white;">operario</th>

              <th style="width: 10%;background-color: #006699; color: white;">Acción</th>
                    </tr>
                </thead>
                <tbody></tbody>
              </table>



                </fieldset>
                


            </div>
           </div>	
 </div>          

</div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
</body>
</html>