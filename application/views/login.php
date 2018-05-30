<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo  base_url();?>/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo  base_url();?>/assets/plugins/iCheck/square/blue.css">


</head>
<body class="hold-transition login-page">
<div class="navbar-wrapper">
      <div class="">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="">CreacionesCrea</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
               <!-- <li><a href="">About</a></li>-->
                <li><a href="">Contact  :<img src="<?php  echo base_url();?>assets/img/wp.png"><span style="color: white; padding-bottom: 2px;" aling='center'>:  3175462685-7232202</span></a></li><li></li>



              </ul>

              <ul class="nav pull-right">
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Login <b class="caret"></b></a>
  <ul class="dropdown-menu login-form">
      <li>
        <form method="post" action="" id="formLogin" name="formLogin">
          <fieldset id="datosAcceso">
            <label class="control-label usuario" for="usr_email">Correo Electrónico</label>
            <span></span>
            <input type="text" id="usr_email" name="usr_email" required placeholder="correo@electronico.com" class="{required:true,email:true}"/>
            <label class="control-label usuario" for="usr_pass">Clave de acceso</label>
            <span></span>
            <input type="password" id="usr_pass" name="usr_pass" required class="{required:true,rangelength: [10, 10]}"/>
          </fieldset>
          <fieldset id="responseAjax" style="text-align:center;">
            <img alt="" src="images/ajax-loader.gif" id="ajaxLoader" class="hide">
            <div class="alert alert-error font-small hide" id="loginError"><strong>Usuario o clave incorrectos</strong></div>
          </fieldset>
          <fieldset id="botonera">
            <button class="btn btn-small btn-info" type="submit" id="btnLogin">Iniciar sesión</button>
          </fieldset>
          <div class="divider"></div>
          <a href="" class="btn btn-link" id="recPass">¿Olvidaste tu contraseña?</a><br>
        </form>
      </li>
    </ul>
</li>
</ul>
            </div>

              
        </nav>

      </div>
    </div>



    <div class="col-lg-12">  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php  echo base_url();?>assets/img/slide_12.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>CONFECCION.</h1>

              <p><h3>Confeccionamos Tus Diseños Con Acabados Profesionales</h3></p>
              <!--<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        
        <div class="item">
          <img class="third-slide" src="<?php  echo base_url();?>assets/img/slide_7.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>DISEÑO.</h1>
              <P><h2><code>Te asesoramos y diseñamos tus Colecciones</code></h2></P>
              <!--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
         <div class="item">
          <img class="third-slide" src="<?php  echo base_url();?>assets/img/slide_13.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>PATRONAJE:</h1>
              <P><h2>Digitalizamos Y Escalamos  Tus Patrones</h2></P>
              <!--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="<?php  echo base_url();?>assets/img/slide_1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>NOSOTROS.</h1>
              <p><h3>Tranquilidad, seguridad, diseño, calidad, comodidad, 
        funcionalidad y la experiencia de más de 7 años en la industria, aquí encontrarás más que calidad.</h3></p>
              <p><a class="btn btn-lg btn-primary" href="" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="https://getbootstrap.com/docs/3.3/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<br><br><br>


</div>





<nav class="navbar navbar-dark bg-default">
  <!-- Navbar content -->
</nav>
  </div>

<div class="row jumbotron">
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="<?php  echo base_url();?>assets/img/slide_13.jpg" alt="...">
      <p style="font-family:fantasy"><h3 class="" style="color: #F94D00;"><strong>CreacionesCrea</strong></h3>Es una compañía especializada en soluciones de dotación para medianas y grandes empresas con calidad, diseño y distinción.
       Fortalecemos la identidad de marca a través de nuestras prendas, al tiempo que brindamos comodidad y protección a todo el equipo de trabajo.</p>
      
      <div class="caption">
        
        <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="<?php  echo base_url();?>assets/img/slide_18.jpeg" alt="...">
      <p style="font-family:fantasy"><h3 class="" style="color: #0BC47E;"><strong>LOGISTICA</strong></h3>Hemos desarrollado un modelo logístico de entrega oportuna que nos permite entregar nuestros servicios donde más los necesitas.</p>
      
      <div class="caption">
        
        <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="<?php  echo base_url();?>assets/img/slide_17.jpg" alt="PRUEBA">
      <p style="font-family:fantasy"><h3 class="" style="color: #563d7c;"><strong>SERVICIOS</strong></h3>Con nuestro servicio de acompañamiento guiamos durante el proceso de toma de decisiones para que los materiales, diseños y estilos sean los más adecuados a las necesidades de cada sector de la industria.</p>
      
      <div class="caption">
        
        <!--<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
      </div>
    </div>
  </div>
  </div>

    <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
      <h1 align="center">!!    PAGINA EN CONSRTUCCION ¡¡¡¡</h1>
          <img src="<?php  echo base_url();?>assets/img/slide_0.jpg" alt="PRUEBA">
    </div>
  </div>


<footer id='pie' style="color: white;" align='center'  class="navbar-fixed-bottom  navbar-inverse">
          Powered by Javier  Alexander  Lopez || 2018  <a href="">javis9203@gmail.com</a>
          <br>
          
    </footer>


<script src="<?php echo  base_url();?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo  base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo  base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>
</body>
</html>
