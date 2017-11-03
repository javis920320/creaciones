$('#btnfl').on('click',function(){


	var fechai=$('#fechai').val();
	var fechaf=$('#fechaf').val();
	alert();

filtrar(fechai,fechaf);
	

}) ;




 function filtrar(fechai,fechaf){

 	
//'pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,pr.fecha,pe.nombres

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
			{data:'fecha'},
			{data:'nombres'},
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	






 }


