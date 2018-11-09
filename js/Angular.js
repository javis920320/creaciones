/*angular.module("myapp", [])
 .controller("fisrtcontroller", function($scope, $http) {
 $http({
  method: 'GET',
       url: 'http://jsonplaceholder.typicode.com/posts'
    }).then(function (data){
     console.log(data);
    },function (error){

    })
});﻿*/
angular
.module("myapp",[])
.controller("fisrtcontroller",function($scope,$http){
	console.log('success');

	$http.post('http://localhost/creaciones/Cpedidomultiple/dependencia/')
	.then(function(mydata){
		console.log(mydata);

	})

});

