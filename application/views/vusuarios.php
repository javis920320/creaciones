<div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>USUARIOS CREACIONES </h3><br><br>
              

            </div>
            <!-- /.box-header -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newusr">
              Nuevo Usuario
            </button>
           <div class="modal fade" id="modaleli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">USUARIO</h4>
               </div>

               <div class="modal-body">
                <span class='text text-danger'>Deseaas elimnar este registro ?</span>
                <form id='frmdusr'>
                    <input type ='text' name='eliminarc' id='eliminarc'class='hide'>

                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary" disabled>Eliminar</button>
                </form>
               
               </div>
               <div class="modal-footer">
                 
               </div>
             </div>
           </div>
         </div>
            
            <!-- Modal -->
            <div class="modal fade" id="modalEditPersona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar Datos de Usuario</h4>
                  </div>
                  <div class="modal-body">

                    <form id='editper'>

                        <input type='text' id='eidpersona' name='eidpersona'>
                        <label for='ecedula'>Cedula</label>
                        <input type='text' id='ecedula' name='ecedula' class='form-control'required>
                        <label for='enombres'>Nombres</label>
                        <input type='text' id='enombres' name='enombres' class='form-control'required>
                        <label for='etelefono'>Telefono</label>
                         <input type='text' id='etelefono' name='etelefono' class='form-control'required>
                         <br><br>
                         <input type='submit' value='Guardar' class='btn btn-success'> 



                    </form> 
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="newusr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">DATOS DE USUARIO</h4>
                  </div>
                  <div class="modal-body">
                    <form id='formusr'>
                            <label for='cedula'>Cedula:</label>
                            <input type='text' id='cedula' name='cedula' class='form-control' required>
                             <label for='nombres'>Nombres:</label>
                            <input type='text' id='nombres' name='nombres' class='form-control' required>
                            <label for='telefono'>Telefono:</label>
                            <input type='text' id='telefono' name='telefono' class='form-control' required>
                            <label for='name'>Usuario:</label>
                            <input type='text' id='name' name='name' class='form-control' required>
                            <label for='pass'>Password:</label>
                            <input type='password' id='pass' name='pass' class='form-control' required>
                            <label for='tipo'>Tipo Usuario:</label>
                            <select id='tipo' name='tipo'  class='form-control' required>
                            <option value=''>Selecciona Una opcion</option>
                              <option value='0'>VENTAS</option>
                                <option value='1'>CORTES</option>
                                  <option value='2'>OPERARIO OBRA</option>
                                    <option value='3'>ADMINISTRADOR</option>
                                      <option value='4'>SATELITE</option>
                                       <option value='5'>ADM PROCESOS</option>

                      </select>
                      <br><br>
                      <input type='submit' value='Crear Usuario' class='btn btn-success'>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                  </div>
                </div>
              </div>
            </div>
             
            <div class="box-body table-responsive no-padding">
            
              <table  id='tblusuarios' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
               
                <th>Cedula</th>
                  <th>Nombres</th>
                  <th>telefono</th>
                  <th>tipo</th>
                  <th>Estado</th>
                  <th>Accion</th>

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
