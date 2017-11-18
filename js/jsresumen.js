
/*$('#btnexportar').on('click',function(){
var fecha =Array();
	
	 fecha['fechai']=$('#fechai').val();
	 fechai=$('#fechai').val();
	 
	fecha['fechaf']=$('#fechaf').val();
window.open(baseurl+'Cresumenprocesos/resumen');
	
	
	
});*/



 function resfiltrar(){



	var fechai=$('#fechai').val();
	var fechaf=$('#fechaf').val();
	 $.ajax({
	'url':baseurl+'Cresumenprocesos/resumentotal', 
	'type':'POST',
	'data':{fechai:fechai,fechaf:fechaf},
	success:function(data){
		var obj=JSON.parse(data);
		$.each(obj,function(i,item){
			$('#prep').text(item.prep);
			$('#preb').text(item.preb);
			$('#pret').text(item.pret);
			
		});
	}
 });


$('#tbltrabajos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblresumen",
				'type':'POST',
				'data':{fechai:fechai,fechaf:fechaf},
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'precio1'},
			{data:'nbordados'},
			{data:'valor bordado'},
			{data:'fecha'},
			{data:'nombres'},
			{"orderable":true,
			render:function(data,type,row){



				return'<span class="glyphicon glyphicon-check"></span>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


 }



 


