  </div>

 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2017 <a href="http://almsaeedstudio.com"> Studio</a>.</strong> All rights
    reserved.
  </footer>

  </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo  base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo  base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo  base_url();?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo  base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo  base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo  base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo  base_url();?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo  base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo  base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo  base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo  base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo  base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo  base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo  base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo  base_url();?>assets/dist/js/demo.js"></script>
<script src="<?php echo  base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo  base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!--<script type="text/javascript" src="<?php echo base_url();?>js/fpedidos.js"></script>-->


<?php  if($this->uri->segment(1)=='Cpedidoscliente') { ?>

		<script src="<?php echo  base_url();?>js/fpedidos.js"></script>
<?php  }?>

<?php  if($this->uri->segment(1)=='Cusuarios') { ?>

    <script src="<?php echo  base_url();?>js/usuarios.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Cbordados') { ?>

    <script src="<?php echo  base_url();?>js/jsbordados.js"></script>
<?php  }?>

<?php  if($this->uri->segment(1)=='Cresumenprocesos') { ?>

    <script src="<?php echo  base_url();?>js/jsresumen.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Cprendascortadas') { ?>

    <script src="<?php echo  base_url();?>js/jsprendascortadas.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Ctaller') { ?>

    <script src="<?php echo  base_url();?>js/jstaller.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Cnomina') { ?>

    <script src="<?php echo  base_url();?>js/nomina.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Clistasatel') { ?>

    <script src="<?php echo  base_url();?>js/jslistasatelites.js"></script>
<?php  }?>
<?php  if($this->uri->segment(1)=='Cproductos') { ?>
<script src="<?php echo  base_url();?>js/jsproductos.js"></script>
<?php  }?>

<?php  if($this->uri->segment(1)=='Cpedidos' or $this->uri->segment(1)=='Cproductos' or$this->uri->segment(1)=='Cpedidomultiple' ) { ?>
<script src="<?php echo  base_url();?>js/jspedidos.js"></script>
<?php  }?>

<?php  if($this->uri->segment(1)=='Cpedidoscliente' ){ ?>
<script src="<?php echo  base_url();?>js/functions.js"></script>

<?php  }?>

<?php  if($this->uri->segment(1)=='Ctrabajos' && $this->session->userdata('tipo')==2 ){ ?>
<script src="<?php echo  base_url();?>js/jstrabajos.js"></script>
<script src="<?php echo  base_url();?>js/jsoperario.js"></script>

<?php  }?>
<?php  if($this->uri->segment(1)=='Ctrabajos' && $this->session->userdata('tipo')==3 ){ ?>
<script src="<?php echo  base_url();?>js/jstrabajos.js"></script>
<script src="<?php echo  base_url();?>js/jsadmin.js"></script>

<?php  }?>




<?php  if( $this->uri->segment(1)=='Ctaller' ){ ?>
<script src="<?php echo  base_url();?>js/jsproductosen.js"></script>

<?php  }?>
<?php  if( $this->uri->segment(2)=='valorcero' ){ ?>
<script src="<?php echo  base_url();?>js/jsvalorcero.js"></script>

<?php  }?>
<?php  if( $this->uri->segment(1)=='Cproductosen' ){ ?>
<script src="<?php echo  base_url();?>js/jsestados.js"></script>

<?php  }?>

<?php  if($this->uri->segment(1)=='Csatelite') { ?>

    <script src="<?php echo  base_url();?>js/jsatelite.js"></script>
<?php  }?>


<?php  if($this->uri->segment(1)=='Cprendas') { ?>

    <script src="<?php echo  base_url();?>js/jsprendas.js"></script>
    
<?php  }?>
<?php  if($this->uri->segment(2)=='listaperiodos') { ?>

    <script src="<?php echo  base_url();?>js/jsperiodos.js"></script>
    
<?php  }?>

</body>
</html>
