 $('#tblconfigper').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			
			
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblperiodoc",
				'type':'POST',
				//'data':''
				dataSrc:''
			},

			'columns':[
			{data: 'idperiodo','sClass':'dt-body-center'},
			{data: 'fechai','sClass':'dt-body-center'},
			{data:'fechaf'},
			{data:'estado'},	
			{"orderable":true,
			render:function(data,type,row){

				return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#editar" onClick="editarperiodo(\''+row.idperiodo+'\',\''+row.fechai+'\',\''+row.fechaf+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="verdetalles(\''+row.idperiodo+'\')"><i style="color:green;" class="glyphicon glyphicon-eyes"></i> Ver detalles</a></li>' +
                      '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar('+row.idpedido+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>'
                  
                     	
                      ;


				
					}
					
					
			}


			],

 "order":[[0,"asc"]],

		});	



 verdetalles=function(idperiodo){



 	window.open(baseurl+'Cresumenprocesos/vistarecumenperiodos/'+idperiodo);




 }
 function crearperiodo(){


 var fechaie =$('#finicio').val();
 var fechafe =$('#ffin').val();
 $.ajax({
		'url':baseurl+'Cresumenprocesos/nuevoperiodo',
		'type':'POST',
		'data':{fechaie:fechaie,fechafe:fechafe},
success:function(data){
	alert(data);

			 }
	});
}


editarperiodo=function(idperiodo,fechai,fechaf){



		$('#per').val(idperiodo);
		$('#fi').val(fechai);
		$('#ff').val(fechaf);



}



function editarper(){

	var per=$('#per').val();
	var fi=	$('#fi').val();
	var ff =$('#ff').val();

/* $param['idperiodo']=$this->input->post('modper');
	 	 $param['fechai']=$this->input->post('fechaie');
		 	 $param['fechaf']=$this->input->post('fechafe');
		 	 */

$.ajax({
	url:baseurl+'Cresumenprocesos/updateperiodo',
	type:'POST',
	data:{modper:per,fechaie:fi,fechafe:ff},
	success:function(data){
alert(data);

	}


});
}



