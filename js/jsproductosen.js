$('#tblproductosen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cproductosen/lista",
				'data':{factura:''},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'factura','sClass':'dt-body-center'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-success  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a>';
					}


					
			}


			],

 "order":[[0,"asc"]],

		});	