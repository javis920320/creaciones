 
listabordados();

 function listabordados(){

 	$.ajax({
'url':baseurl+'Cbordados/lstbordados',
'type':'POST',
'data':0,
success:function(data){
	//alert(data);
	var obj=JSON.parse(data);

	$.each(obj,function(i,items){

	});

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



$('#tblprendas').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

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
            }else if (data == 3) {
              return "<span class='label label-success'>En confeccion</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>En cortes</span>";
            }
              
          }
        }
         ],

 "order":[[0,"asc"]],

		});	


detallesb =function (idprendas,nombre,precio){

//alert(idprendas);




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
			
			
			
			

			{"orderable":true,
			render:function(data,type,row){

//if(row.estado==0){


	return '<span>Enviado</span>';

//}
					}
			}


			],

 "order":[[0,"asc"]],

		});	


}