angular.module("myapp", [])
 .controller("fisrtcontroller", function($scope, $http) {
 $http({
  method: 'GET',
       url: 'http://jsonplaceholder.typicode.com/posts'
    }).then(function (data){
     console.log(data);
    },function (error){

    })
});﻿