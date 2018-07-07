<html ng-app="miapp">
<head>
	<title></title>
</head>
<body ng-controller="scontroller">
<h1></h1>


		<div class="box box-primary">
	


		<div class="box-body">
			{{"Hola"+nombre}}

			<input type="text" name="" ng-model="nombre">
		<!--<h1 align='center'>**********************************************************</h1>
		
		<h1 align='center'>BIENVENIDOS A CREACIONES GORETTI  </h1>
		<h2 class='text-success' align='center'><?php echo$nombres;?></h2>
		<h1 align='center'>**********************************************************</h1>-->
		<!--<div ng-controller="scontroller">-->
		<h3>PRUEBA COMENTARIOS</h3>
		<ul>
			<li ng-repeat="comentario in comentarios">
				{{comentario.comentario}}<strong>{{" "+comentario.autor}}</strong>
			</li>
			
		</ul>

		<input type="" name="" ng-model="nuevoComentario.autor"><br>
		<input type="" name="" ng-model="nuevoComentario.comentario"><br>
		<button ng-click="newitem()">Nuevo Item</button>
		


		<table>
			<thead>
				<th ng-repeat="post in posts">{{post.title}}</th>
			</thead>
			
		</table>
		
		</div>
		
		</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>

</body>
</html>