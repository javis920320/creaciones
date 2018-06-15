
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


 var persona=$('#trabajador').val();
 // alert(persona);


lstprocesosatelite(persona);


function lstprocesosatelite(persona){
	
	//alert(persona);
	
	
	
	 $('#tblincompletos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cadmin/verincompletos",
				'data':{idpersona:persona},
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpedido'},
			{data: 'facultad'},
			{data: 'factura'},
			{data:'cantidad'},
			{data:'procesado'},
			{data:'descripcion'},
			{data:'fecha_ingreso'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right"> $ ' +
									//'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
									row.precio
									
									
                       +
                      '</span>';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],
			

 "order":[[0]],

		});	
	
}





	/*$('#tblincompletos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cadmin/verincompletos",


				'type':'POST',
				'data':''
				
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

		});	*/
		
	
		$('#tblseguimi').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cproductosen/consultaseguimiento",
				'type':'POST',
				'data':'',
				dataSrc:''
			},

			'columns':[
			{data: 'idpedido','sClass':'dt-body-center'},
			{data: 'nomtipoprod','sClass':'dt-body-center'},
			{data:'factura'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'fecha_ingreso'},
			{data:'nombres'},
			
			
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





