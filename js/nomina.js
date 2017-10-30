listatrabajadores();

 function listatrabajadores(){


 	$.ajax({
 		'url':baseurl+'Cnomina/listatrabajadores',
 		'type':'POST',
 		'data':'',
 		success:function(data){
 			alert(data);


 		}

 	})
 }