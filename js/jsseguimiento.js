
$('#pi').on('click',function(){
	
		$('#p1').addClass('active');
	$('#p2').removeClass('active');
	
	$('#a1').removeClass('hide');
});

$('#pii').on('click',function(){
	$('#a1').addClass('hide');
	
	$('#p2').addClass('active');
	$('#p1').removeClass('active');
}
);

	$('#tblincompletos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cadmin/verincompletos",


				'type':'POST',
				
			},

			'columns':[
			{data: 'idpedido'},
			{data: 'facultad'},
			{data: 'factura'},
			{data:'cantidad'},
			{data:'procesado'},
			{data:'descripcion'},
			//{data:'precio'},

			{data:'fecha_ingreso'},

			{"orderable":true,
			render:function(data,type,row){



return '<span ></span>' 
                      
                     	
                      ;


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	





