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

