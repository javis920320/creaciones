<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  
</head>
<body>
  <style type="text/css">
  .responsive-input{
  width: 100%;
}


 #aumentar{
      width: 80% !important;
    }
  </style>

<div class="col-xs-17"> <strong align='center'>Creaciones Goretti</strong></div>

			  
  
  
 <!-- Modal -->



<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'> SATELITES CREACIONES </h3><br><br>

			  
              

<div class='btn-group-group'><select name="trabajador" id="trabajador" class="form-control" required></select></div><div class='btn-group'><button class='btn btn-success' onclick='cambioestado();'>Ver reporte</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Cambio lista
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cambio de lista</h4>
      </div>
      <div class="modal-body">
       <select name="ctra" id="ctra" class="form-control"></select>
	   <button class='btn btn-primary' onclick='cambiolista();'>Cargar</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
             <table  id='tblsatelite' class="table table-hover table-responsive table-bordered">
                <thead class="bg-info">
                <tr>
				 <th>Codigo</th>
                  <th>Factura</th>
                  <th>Producto</th>
                  <th>Facultad</th>
                   <th>Cantidad</th>
                   <th>Talla</th>
                   <th>Descripcion</th>
                  
                  <th>Fecha ingreso</th>
                  <th>Estados</th>
				  <th>Satelite</th>
				   <th>V Bordado</th>
                  <th>Saldo</th>
				 
				  
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>
  
</body>
</html>