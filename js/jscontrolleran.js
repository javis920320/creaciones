 //var app=angular.module("miapp",[]);

 /*app.controller("pcontroller",function($scope){
 	$scope.nombre=" CREACIONES GORETTI";
 });*/

 /*app.controller("scontroller",function($scope){
 	$scope.nuevoComentario={};
 	$scope.comentarios=[
 	{
 		comentario:"Realizando primera prueba",
 		autor:"Javier lopez"

	 }
,	

	{ 
 	comentario:"La prueba se ejecuto ccon exito",
 	autor:"javier"
 	}
 ];


 $scope.newitem=function(){

 	$scope.comentarios.push($scope.nuevoComentario);
 	$scope.nuevoComentario={};
 }

 });*/

 /*app.controller("scontroller",function($scope,$http){
 	$scope.posts=[];
 	$http.get("https://jsonplaceholder.typicode.com/posts")
 	.success(function(data){
 		$scope.posts=data;


 	}).error(function(err){


 	});

 });*/

angular.module("miapp",[])
 .controller("scontroller", function ($scope, $http){

 		$scope.posts=[];
   $http({
      method: 'GET',
      url: 'https://jsonplaceholder.typicode.com/posts'
   }).then(function successCallback (data){
   	console.log(data);
   		$scope.posts=data;
   },function errorCallback (error){
   	$scope.posts=error;

   });
});

 