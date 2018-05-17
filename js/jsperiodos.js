 $('#tblconfigper').DataTable({
			'paging':false,
			'info':false,
			'filter':false,
			'stateSave':false,
			
			
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblperiodo",
				'type':'POST',
				//'data':''
				dataSrc:''
			},

			'columns':[
			{data: 'idperiodo','sClass':'dt-body-center'},
			{data: 'fechai','sClass':'dt-body-center'},
			{data:'fechaf'},	
			{"orderable":true,
			render:function(data,type,row){



				//return'<span class="glyphicon glyphicon-check"></span>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#ediper"><i class=" fa fa-edit"></i></a>';
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#ediper" onClick="periodo(\''+row.idperiodo+'\',\''+row.fechai+'\',\''+row.fechaf+'\');"><i class=" fa fa-edit"></i></a>';
					}
					
					
			}


			],

 "order":[[0,"asc"]],

		});	