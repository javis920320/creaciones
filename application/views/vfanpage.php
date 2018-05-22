<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<title>Creaciones</title>
</head>
<body>

<!--<div class="container">
	<br>



	<div class="col-lg-12">
	<div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>



			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php  echo base_url();?>assets/img/slide_4.png" alt="..."  >
						<div class="carousel-caption">
							...
					</div>
    </div>
	
    <div class="item">
      <img  class='imagenes' src="<?php  echo base_url();?>assets/img/slide_1.jpg" alt="Inovacion">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	 <div class="item">
      <img  class='imagenes' src="<?php  echo base_url();?>assets/img/slide_3.jpg" alt="" >
      <div class="carousel-caption">
        ...
      </div>
    </div>
				
			</div>
			


		</div>

	</div>
	</div>
</div>-->

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
              <a class="navbar-brand" href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Home</a></li>
                <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#about">About</a></li>
                <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="https://getbootstrap.com/docs/3.3/examples/carousel/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Action</a></li>
                    <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Another action</a></li>
                    <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">Separated link</a></li>
                    <li><a href="https://getbootstrap.com/docs/3.3/examples/carousel/#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
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
          <img class="first-slide" src="<?php  echo base_url();?>assets/img/slide_4.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php  echo base_url();?>assets/img/slide_1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>NOSOTROS.</h1>
              <p>Tranquilidad, seguridad, diseño, calidad, comodidad, 
				funcionalidad y la experiencia de más de 20 años en la industria, aquí encontrarás más que calidad.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php  echo base_url();?>assets/img/slide_7.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/3.3/examples/carousel/#" role="button">Browse gallery</a></p>
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

<div class="container">
	
<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">CREACIONES GORETTI <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">es una compañía especializada en soluciones de dotación para medianas y grandes empresas con calidad, diseño y distinción.
       Fortalecemos la identidad de marca a través de nuestras prendas, al tiempo que brindamos comodidad y protección a todo el equipo de trabajo. <br>
         En <strong>CREACIONES GORETTI</strong>® hemos desarrollado un modelo logístico de entrega oportuna que nos permite entregar nuestros servicios donde más los necesitas.
     Con nuestro servicio de acompañamiento guiamos durante el proceso de toma de decisiones para que los materiales, diseños y estilos sean los más adecuados a las necesidades de cada sector de la industria.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_163669bdeff%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_163669bdeff%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
		

	</div>
</div>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php  echo base_url();?>assets/img/slide_5.jpg" alt="...">
      <div class="caption">
        
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>