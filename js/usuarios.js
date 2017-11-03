$('#tblusuarios').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cusuarios/usuarios",
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'cedula','sClass':'dt-body-center'},
			{data: 'nombres','sClass':'dt-body-center'},
			{data:'telefono'},
			{data:'tipo'},
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}

					
			}


			],

 "order":[[0,"asc"]],

		});	