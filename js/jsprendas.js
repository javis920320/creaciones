 
listabordados();



 function finproceso(){

permiso =false;
if(permiso==false){

window.open(baseurl+'Cpdfreport/reportebordados');

window.setTimeout("llamarproceso();50000")


}

	

 }


 function llamarproceso(){

 	$.ajax({
'url':baseurl+'Cprendas/fnbordadosf',
'type':'POST',
success:function(data){
	alert(data);


}
});
 }


 function camlistacobro(){

 	var id=$('#idoculto').val();
 	$.ajax({
 		'url':baseurl+'Cprendas/camlistacobro',
 		'type':'POST',
 		'data':{id:id},
 		success:function(data){

 			alert(data);
 		}
 	});
 }

 function cargarb(){
	 
	 var id=$('#idoculto').val();
	 	 var idbordados=$('#lstbd').val();
		  var cant=$('#nmbc').val();
		  $.ajax({
			  'url':baseurl+'Cprendas/cargarb',
			  'type':'POST',
			  'data':{id:id,idbordados:idbordados,cant:cant},
			  success:function(data){
				  alert(data);
				  $('#resb').DataTable().ajax.reload();
				  
			  }
		  });
		  
		  
		  
	 
 }
 function listabordados(){

 	$.ajax({
'url':baseurl+'Cbordados/lstbordados',
'type':'POST',
'data':0,
success:function(data){
	//alert(data);
	var obj=JSON.parse(data);
	
	 var html='<option value="">Selecciona Una opcion</option>';

	$.each(obj,function(i,items){
		html+="<option value="+items.idbordados+">"+items.nombre+"</option>";

	});
	
$("#lstbd").html(html);
}
 	});
 }



 function enviarb(){
 	///alert();

 var  factura =$("#txtfac").val();

 var cantidad =$('#txtcant').val();
 var descripcion=$('#txtadescrip').val();


 $.ajax({
 	'url':baseurl+'Cprendas/ingresarP',
 	'type':'POST',
 	'data':{fac:factura,cant:cantidad,desc:descripcion},
 	success: function(data){
 		alert(data);


 	}


 });

}


$("#filtrobprendas").on('change',function(){


var f=$("#filtrobprendas").val();
//alert(f);

	$('#tblcarprendas').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cprendas/rsmprendas",
				'data':{user:f},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idprendas','sClass':'dt-body-center'},
			{data: 'factura'},
			{data:'descripcion'},
			{data: 'cantidad'},
			{data:'fecha'},
			{data:'preciob'},
			{data:'cantb'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){

if(row.estado==0){


	return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}
if(row.estado==1){

 return '<span class="text-danger">Proceso Pendiente</span>';
	//return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}if(row.estado==2){

 return '<span class="text-danger">terminado</span>';
	//return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}
					}
			}


			],
				"columnDefs": [
        {
          "targets": [7], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 0) {
              return "<span class='label label-warning'>Pendiente Bordado</span>";
            }else if (data == 1) {
              return "<span class='label label-success'>En lista de cobro</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>Proceso Finalizado</span>";
            }
              
          }
        }
         ],

 "order":[[0,"asc"]],

		});	


});



$('#tblprendas').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cprendas/prendas",
				'data':{user:0},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idprendas','sClass':'dt-body-center'},
			{data: 'factura'},
			{data:'descripcion'},
			{data: 'cantidad'},
			
			{data:'fecha'},
			
			
			

			{"orderable":true,
			render:function(data,type,row){

if(row.estado==0){


	return '<span>Enviado</span>';

} else if(row.estado==1){


	return '<span class="text-danger">Aplicando bordados</span>';

}else{
	return '<span class="text-danger">Terminado</span>';

}
					}
			}


			],

 "order":[[0,"asc"]],

		});	


$('#tblcarprendas').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cprendas/rsmprendas",
				'data':{user:0},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idprendas','sClass':'dt-body-center'},
			{data: 'factura'},
			{data:'descripcion'},
			{data: 'cantidad'},
			{data:'fecha'},
			{data:'preciob'},
			{data:'cantb'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){

if(row.estado==0){


	return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}
if(row.estado==1){

 return '<span class="text-danger">Proceso Pendiente</span>';
	//return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}if(row.estado==2){

 return '<span class="text-danger">terminado</span>';
	//return '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdlcargar" onClick="detallesb(\''+row.idprendas+'\',\''+row.nombre+'\',\''+row.precio+'\')">cargar</button>';
	 
	

}
					}
			}


			],
				"columnDefs": [
        {
          "targets": [7], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 0) {
              return "<span class='label label-warning'>Pendiente Bordado</span>";
            }else if (data == 1) {
              return "<span class='label label-success'>En lista de cobro</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>Proceso Finalizado</span>";
            }
              
          }
        }
         ],

 "order":[[0,"asc"]],

		});	


detallesb =function (idprendas,nombre,precio){

//alert(idprendas);

$("#idoculto").val(idprendas);


$('#resb').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cprendas/rsmbordados",
				'data':{id:idprendas},
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idbordados','sClass':'dt-body-center'},
			{data: 'nombre'},

			{data: 'cantidad'},
			{data: 'precio'},
			
			
			
			

			{"orderable":true,
			render:function(data,type,row){

//if(row.estado==0){


	return '<button class=" btn-primary" onClick="fneliminar(\''+row.idbordados+'\',\''+row.idprendas+'\')"><span class="glyphicon glyphicon-trash"></span>Eliminar</button>';

//}
					}
			}


			],

 "order":[[0,"asc"]],

		});	


}


 fneliminar= function(idbordados,idprendas){


 	$.ajax({

 		'url':baseurl+'Cprendas/fneliminar',
 		'type':'POST',
 		'data':{idprendas:idprendas,idbordados:idbordados},
 		success:function(data){
 			alert(data);


 		}
 	});




 }