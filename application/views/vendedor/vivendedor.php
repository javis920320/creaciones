<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos Creaciones</title>


</head>
<body>
	<style type="text/css">
	.loader{
	display: none;
	margin-left: 200px;
	margin-top: -45px;
	position: absolute;
		}

	</style>
	<h2><strong>Configurando  Vista...</strong></h2>

	<strong><?php echo$nombres;?></strong>


	<div class="container">
	 

	 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	   Ingresar 
	 </button>
	 
	 <!-- Modal -->
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	   <div class="modal-dialog" role="document">
	     <div class="modal-content">
	       <div class="modal-header">
	         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	         <h4 class="modal-title" id="myModalLabel">Datos personales</h4>
	       </div>
	       <div class="modal-body">
	       	<div class="row">

	 	<input type='text' class='form-control' id='txtbuscarcliente'>
	 	<button id='btnbuscar'>Presione</button>
	 	<div class='contenedor_json'></div>

	 	<div class='hide' id='msn'><span class='text-primary'>Cliente Ingresado correctamente</span></div>

	 	<div class="hide" id='formcliente'>
	 		
	 		<form id='insertcliente'>
	 		<div class="form-body">

				<div class="form-group">
					
				</div>
	 			<input type="text" id='identidad' class="hide" name='identidad'>
	 			<input type="text" placeholder="Ingresa tu nombre" class="form-control" id='nombres' name='nombres'>
	 			<input type="text"  placeholder="Celular" class="form-control" name='celular'>

	 			<input type="submit" value="Ingresar Cliente" title="Presionar">
	 			
	 		</div>

	 			
	 		</form>
	 	</div>
	 	

	 </div>


	 
	        
	       </div>
	       <div class="modal-footer">
	         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	         <button type="button" class="btn btn-primary">Save changes</button>
	       </div>
	     </div>

	   </div>
	 </div>
<!-- /.box-header -->
        
        <div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista Clientes</h3><br><br>
              

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table  id='tblclientes' class="table table-hover">
                <thead class="bg-primary">
                <tr>
                  <th>Identificacion</th>
                  <th>Nombres</th>
                   <th>Telefono</th>

                  <th>Accion</th>
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>



    
        
        <!-- Modal -->
        <div class="modal fade" id="modalEditPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

	</div>
</body>
</html>