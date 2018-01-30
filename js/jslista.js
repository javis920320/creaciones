	

imprimir();

 function imprimir(){

 	$.ajax({
 		'url':baseurl+'Cproductosen/lista',
 		'type':'POST',
 		'data':'',
 		success:function(data){

 			var obj=JSON.parse(data);

 			var html='';
 		$.each(obj,function(i,item){
 			html+='<div id="l" class="l">'+item.factura+'|'+item.nomtipoprod+'|<br>'+item.descripcion+'<br>|CANT('+item.cantidad+')|'+item.facultad+'|<br>TALLa('+item.talla+')|'+item.nombres+'|<br><strong>'+item.fecha_ingreso+'</strong><strong>Fecha Entrega:'+item.fentrega+'</strong></div>';
 			

 		});
 		$('#rsp').html(html);
 		}

 	});





 }