

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>




<div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>SEGUIMIENTO PROCESO DE CONFECCION</h3><br><br>
              <ul class="nav nav-tabs">
			   <li role="presentation" class="active" id='p0'><a href="#" id='p00'>Consulta General</a></li>
  <li role="presentation" class="" id='p1'><a href="#" id='pi'>Procesos incompletos</a></li>
  <li role="presentation"id='p2' ><a href="#"id='pii'>Productos inactivos</a></li>

  
 

</ul>

            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding" >
            <!--<label for="chk">Enviar lista</label>
            <input type='checkbox' name='chk' id='chk' value=1>
            <input type="submit" value='enviarlista'>-->
			
			<div id='a0'>
              <table  id='tblconsulta' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Codigo</th>
              <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
              <th style="width: 10%;background-color: #006699; color: white;">Tipo</th>
              <th style="width: 10%;background-color: #006699; color: white;">Producto</th>
              <th style="width: 10%;background-color: #006699; color: white;">Talla</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
                <th style="width: 10%;background-color: #006699; color: white;">Procesado</th>
				 <th style="width: 10%;background-color: #006699; color: white;">Cliente</th>
				  <th style="width: 10%;background-color: #006699; color: white;">Trabajador</th>
              <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
                    

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
			  </div>
			
			<div id='a1'>
              <table  id='tblincompletos' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Codigo</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Factura</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Procesado</th>
              <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
              <th style="width: 10%;background-color: #006699; color: white;">Fecha Ingreso</th>
                <th style="width: 10%;background-color: #006699; color: white;">Estado</th>
                 <!-- <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>-->
                    

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
			  </div>
			  
			
			  <div id='a2'>
              <table  id='tblseguimi' class="table table-hover table-responsive">
                <thead class="bg-danger">
                <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Codigo</th>
              <th style="width: 10%;background-color: #006699; color: white;">PRODUCTO</th>
              <th style="width: 10%;background-color: #006699; color: white;">FACTURA</th>
              <th style="width: 10%;background-color: #006699; color: white;">FACULTAD</th>
              <th style="width: 10%;background-color: #006699; color: white;">CANTIDAD</th>
              <th style="width: 10%;background-color: #006699; color: white;">TALLA</th>
              <th style="width: 10%;background-color: #006699; color: white;">DESCRIPCION</th>
                <th style="width: 10%;background-color: #006699; color: white;">FECHA INGRE</th>
				  <th style="width: 10%;background-color: #006699; color: white;">NOMBRE</th>
				  
					  <th style="width: 10%;background-color: #006699; color: white;">Estado</th>
                 <!-- <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>-->
                    

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     
        <script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>



</head>
<body>
  
</body>
</html>





<!--<html>
<head>
	<title></title>
</head>
<body>
<div class="box">
	
<span>SEGUIMIENTO PROCESO DE CONFECCION</span>

<ul class="nav nav-tabs">
  <li role="presentation" class="active" id='p1'><a href="#" id='pi'>Procesos incompletos</a></li>
  <li role="presentation"id='p2' ><a href="#"id='pii'>Productos inactivos</a></li>

  
 

</ul>
<div id='a1'>



  <table id="tblincompletos" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Codigo</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Factu</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Talla</th>
              <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
            </tr>
             
          </thead>
          <tbody> </tbody>
        </table>
		
		</div>

   <div id='a2'>



  <table id="tblseguimi" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 5%;background-color: #006699; color: white;">Codigo</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Factu</th>
              <th style="width: 10%;background-color: #006699; color: white;">Facultad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Cantidad</th>
              <th style="width: 10%;background-color: #006699; color: white;">Talla</th>
              <th style="width: 10%;background-color: #006699; color: white;">Descripcion</th>
            </tr>
             
          </thead>
          <tbody></tbody>
        </table>
    
  </div>




</div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
  
</script>
</body>
</html>-->