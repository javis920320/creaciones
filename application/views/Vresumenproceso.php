<html>
<head>
	<title></title>
</head>
<body>
<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header box-primary">

            	<span class='text text-success'><strong>RESUMEN TRABAJOS CREACIONES GORETTI</strong></span>


            	
            </div>
            <div class="box-body">

            	<fieldset class="scheduler-border">
    			<legend class="scheduler-border"><span class="text text-primary"> <strong>   CREACIONES GORETTI</strong> </span></legend>
    			
				
            <div class="col-xs-5 col-md-5"><label for="fechai"><strong class="text text-primary">FECHA INICIO</strong></label><input type="date" name="fechai" id='fechai' class="form-control"></div>

            <div class="col-xs-5 col-md-5"><label for="fechaf"><strong class="text text-primary">FECHA FIN</strong></label><input type="date" name="fechaf" id='fechaf' class="form-control"></div></fieldset>
<br><br>
             <div class="col-xs-10 col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading">RESUMEN VALORES</div>
             <div class="panel-body">


             <span class='text text-success'><strong>PRECIO PRODUCTOS:<div id='prep'></div></strong></span><br><br>
             <span class='text text-success'><strong>PRECIO BORDADOS:<div id='preb'></div></strong></span><br><br>
             <span class='text text-success'><strong>PRODUCCION TOTAL:<div style='color:black'id='pret'></div></strong></span><br><br>
               
            </div>
            </div>
            </div>

                       <div class="col-xs-2 col-md-2"><button class="btn  btn-danger form-control" id='btnfl' onclick='resfiltrar();'>Filtrar</button>
                       <!--<a href='<?php echo base_url();?>Cresumenprocesos/resumen' id='btnexportar'class='btn btn-success form-control'>Exportar Excel</a>-->

                      <a href='<?php echo base_url();?>Creporte/?fechai="2017-10-20"&fechaf="2017-11-21"?>' id='o'class='btn btn-success form-control'>Exportar Excel</a>
                       </div>
            <br><br>

                <table id="tbltrabajos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th style="width: 5%;background-color: #006699; color: white;">#</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Nombre</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Precio prenda</th>
                      <th style="width: 10%;background-color: #006699; color: white;">N°bordados</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Precio bordados</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha</th>
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