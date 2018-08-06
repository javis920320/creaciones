 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php  echo base_url();?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo$nombres;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu  de  Navegacion</li>

        <?php  if($this->session->userdata('tipo')==0 OR $this->session->userdata('tipo')==3 ) { ?>


        <li class=" treeview">
          <a href="#">
            <i class="glyphicon glyphicon-folder-open"></i> <span>Pedidos </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

           
             <li class=""><a href="<?php echo base_url();?>Cadmin"><i class="fa fa-circle-o"></i> Seguimiento</a></li>
            <li class=""><a href="<?php echo base_url();?>Cpedidomultiple/realizarpedidos"><i class="fa fa-circle-o"></i> Ingreso  Registro</a></li>
             <li class=""><a href="<?php echo base_url();?>Cproductosen"><i class="fa fa-circle-o"></i> Productos enviados</a></li>
			 <li class=""><a href="<?php echo base_url();?>Cprendas"><i class="fa fa-circle-o"></i> Envio bordados</a></li>
        <?php  if( $this->session->userdata('tipo')==3 ) { ?>
        <li class=""><a href="<?php echo base_url();?>Cprendas/cargarbordados"><i class="fa fa-circle-o"></i> Cargar bordados</a>
          <li class=""><a href="<?php echo base_url();?>Csatelite/valorcero"><i class="fa fa-circle-o"></i> Cargar Valor cero</a></li>


          <?php  }?>


        </li>
      
        
            
            <!--<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
          </ul>
        </li>
<?php  if( $this->session->userdata('tipo')==3 ) { ?>

         <li class=" treeview">
          <a href="#">
            <i class="glyphicon glyphicon-globe"></i> <span>Satelites </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url();?>Clistasatel"><i class="fa fa-circle-o"></i> Lista Satelites</a></li>
           
            
            <!--<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>-->
          </ul>
        </li>
         <?php  }?>
        <?php  }?>

         <?php  if($this->session->userdata('tipo')==0) { ?>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Cpedidoscliente/buscarcliente"><i class="fa fa-circle-o"></i> Ingresar </a></li>
            
          </ul>
        </li> 

        <?php  }?>

         <?php  if($this->session->userdata('tipo')==3) { ?>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i> <span>Productos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Cproductos/"><i class="fa fa-circle-o"></i> Ingresar </a></li>
            <li><a href="<?php echo base_url();?>Cbordados/"><i class="fa fa-circle-o"></i> Bordados </a></li>
            
          </ul>
        </li> 

       
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-stats"></i> <span>Calculo nomina</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Cnomina/"><i class="fa fa-circle-o"></i> Calcular Pago </a></li>
            <li><a href="<?php echo base_url();?>Cresumenprocesos/"><i class="fa fa-circle-o"></i> Resumen trabajos</a></li>
            <li><a href="<?php echo base_url();?>Cresumenprocesos/listaperiodos/"><i class="fa fa-circle-o"></i> Periodos Anteriores</a></li>
            
          </ul>
        </li> 
        <?php  }?>


         <?php  if($this->session->userdata('tipo')==1) { ?>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-shopping-cart"></i> <span>Lista tareas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          <li><a href="<?php echo base_url();?>Ctaller/"><i class="fa fa-circle-o"></i> enviar a confeccion </a></li>
            <li><a href="<?php echo base_url();?>Cprendascortadas/"><i class="fa fa-circle-o"></i> productos enviados</a></li>
             <li class=""><a href="<?php echo base_url();?>Cadmin"><i class="fa fa-circle-o"></i> Seguimiento</a></li>
            
            
          </ul>
        </li> 
        <?php  }?>

         <?php  if($this->session->userdata('tipo')==3 or $this->session->userdata('tipo')==2 ) { ?>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-shopping-cart"></i> <span>Mis trabajos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Ctrabajos/"><i class="fa fa-circle-o"></i> Ingresar </a></li>
                 <li><a href="<?php echo base_url();?>Ctrabajos/reporteperiodos"><i class="fa fa-circle-o"></i> Resumen periodos </a></li>
            <!--<li><a href="<?php echo base_url();?>Csatelite/"><i class="fa fa-circle-o"></i> Proceso Satelite </a></li>-->
            
          </ul>
        </li> 
        <?php  }?>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>-->
         <?php  if($this->session->userdata('tipo')==3) { ?>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Cusuarios/"><i class="fa fa-circle-o"></i> Ingresar </a></li>
            
          </ul>
        </li> 
        
        <?php  }?>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <!--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">