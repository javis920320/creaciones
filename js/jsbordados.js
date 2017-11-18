$('#tblbordados').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cbordados/lstbordados",
				'type':'POST',
				'data':'',
				dataSrc:''
			},

			'columns':[
			{data: 'idbordado','sClass':'dt-body-center'},
			{data: 'nombre','sClass':'dt-body-center'},
			{data:'precio'},
			
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