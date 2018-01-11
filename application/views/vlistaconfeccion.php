<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>




<div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>LISTA PRODUCTOS CORTADOS </h3><br><br>
              

            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
            <label for="chk">Enviar lista</label>
            <input type='checkbox' name='chk' id='chk' value=1>
            <input type="submit" value='enviarlista'>
              <table  id='tbl_listacortados' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
               
                <th>#</th>
                  <th>Factura</th>
                  <th>Producto</th>
                  <th>Facultad</th>
                   <th>talla</th>
                   <th>descripcion</th>
                   <th>cantidad</th>
                   <th>Cliente</th>
                  <th>Fecha ingreso</th>
                  <th>Estado</th>

                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
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