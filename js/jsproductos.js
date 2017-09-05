
//
//alert();
$('#tblproductos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{
				"url":"http://localhost/creaciones/cproductos/lista",
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'nomtipoprod','sClass':'dt-body-center'},
			{data:'nomprod'},
			{data:'valor'},
			{data:'subvalor'},
			
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	