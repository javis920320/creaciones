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
	<h2><strong>Campo Atencion al Cliente...</strong></h2>



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
	       		<div class='col-xs-7 form-inline'>
		       	<div class='form-group'>
		       		<label for='txtbuscarcliente'>Documento de identidad</label>
		       	<input type='text' class='form-control' id='txtbuscarcliente' placeholder='Inspeccionar identificacion'>
		 		<button id='btnbuscar' class='btn btn-defaul btn-large'>Presione</button>
	       		</div>
	       		</div>
	 	
	 			<div class='contenedor_json'></div>

	 			<div class='hide' id='msn'><span class='text-primary'>Cliente Ingresado correctamente</span></div>

	 			<div class="hide" id='formcliente'>
	 		
	 		<form id='insertcliente'>
	 		
	 			
	 		
	 		<div class="form-body">
	 			<div class='col-xs-8'>
	 				<div class="form-group">
					<input type="text" id='identidad' class="hide" name='identidad'>
					</div>
	 			</div>
				
	 			<div class='col-xs-8'>
	 			<div classs='form-group'>
	 				<label for='nombres'>Nombres y Apellidos </label>
	 			<input type="text" placeholder="Ingresa tu nombre" class="form-control" id='nombres' name='nombres'>
	 			</div>
	 			</div>
	 			<br>
	 			<br>


	 			<div class='col-xs-8'>	
	 			 <div class='form-group'>
	 			 	<label for='celular'>Celular o telefono </label>
	 			 <input type="text"  placeholder="Celular" class="form-control" name='celular'>
	 			 </div>
	 			</div>
	 			
	 			<div class='col-xs-8'>	
	 			 <div class='form-group'>
	 			 <input type="submit" value="Ingresar Cliente" title="Presionar" class='btn btn-success'>
	 			 </div>

	 			</div>
	 			
	 			
	 		</div>

	 			
	 		</form>
	 	</div>
	 	

	 </div>


	 
	        
	       </div>
	       <div class="modal-footer">
	         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	       </div>
	     </div>

	   </div>
	 </div>
<!-- /.box-header -->
        
        <div class="col-xs-10 col-md-10">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>Listado Clientes Creaciones Goretti Pasto</h3><br><br>
              

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
                <h4 class="modal-title" id="myModalLabel"><strong>EDITAR CLIENTE</strong></h4>
              </div>
              <div class="modal-body">
              <form action="" id='formedit'>
              <div class="form-body">
              	<div class="col-xs-8">
              			<div class="form-group" >
              			<label for="upidpersona">Identificacion</label>
              			<input class="form-control" type="text" id='upidpersona' name='upidpersona' required="">            		
              			</div>
              	</div>
              
				<div class="col-xs-8">
	              	<div class="form-group" >
	              	<label for="upname">Nombre completo</label>
	              	<input class="form-control" type="text" id='upname' name='upname'required>
	              	</div>
              	</div>

				<div class="col-xs-8">
	              	<div class="form-group" >
	              	<label for="uptelefono">Telefono o celular</label>
	              	<input  class='form-control'type="text" id='uptelefono' name='uptelefono' required="">
	              	</div>
              	</div>

              	<div class='col-xs-8'>	
		 			 <div class='form-group'>
		 			 <input type="submit" value="Editar Cliente" title="Presionar" class='btn btn-success'>
		 			 </div>

	 			</div>


				</div>	

              </form>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>

	</div>
</body>
</html>