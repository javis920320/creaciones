
	/* $('#tblvalor').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Ctrabajos/listavalorcero",
				'data':{dato:0},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data:'facultad'},
			{data:'talla'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'prebordado'},
			{data:'fecha_ingreso'},
			{data:'fecha_ingreso'},
			{data:'nombres'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
		'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
                       +
                      '</span>';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	*/


		$('#tblvalor').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Ctrabajos/listavalorcero",
				'type':'POST',
				'data':'',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data:'facultad'},
			{data:'talla'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'prebordado'},
			{data:'precio'},
			{data:'fecha'},
			
			{"orderable":true,
			render:function(data,type,row){



				
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<span class="text-success">'+row.nombres+'<span>';
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});
