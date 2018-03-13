 function enviarb(){
 	alert();

 var  factura =$("txtfac").val();

 var cantidad =$('txtcant').val();
 var descripcion=$('txtadescrip').val();


 $.ajax({
 	'url':baseurl+'Cprendas/ingresarP',
 	'type':'POST',
 	'data':{fac:factura,cant:cantidad,desc:descripcion},
 	success: function(data){
 		alert(data);


 	}


 });

}