<div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>LISTA PRODUCTOS CORTADOS </h3><br><br>
              

            </div>
            <!-- /.box-header -->
             
            <div class="box-body table-responsive no-padding">
            <label for="chk">Enviar lista</label>
            <input type='checkbox' name='chk' id='chk' value=1>
            <input type="submit" value='enviarlista'>
              <table  id='tblusuarios' class="table table-hover table-responsive">
                <thead class="bg-primary">
                <tr>
               
                <th>Cedula</th>
                  <th>Nombres</th>
                  <th>telefono</th>
                  <th>tipo</th>
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
