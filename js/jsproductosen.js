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
			{data: 'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{"orderable":true,
			render:function(data,type,row){



				return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                        '    <li><a  href="#"  class="btn btn-success  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                     // '    <li><a href="#" title="Ajustar precios"  data-toggle="modal" data-target="#precios"  onClick="ajustarprecios(\''+row.id_prod+'\',\''+row.valor+'\',\''+row.subvalor+'\')"><i style="color:green;" class="glyphicon glyphicon-usd"></i> Ajustar valores</a></li>' +
                       //'    <li><a href="#" title="Asignar bordados" class="prueba" data-toggle="modal" data='+row.id_prod+' data-target="#asgbordados"  onClick="bordprod(\''+row.id_prod+'\')"><i style="color:green;" class="glyphicon glyphicon-paperclip"></i> Asignar bordados</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';

					
					//return '<a  href="#"  class="btn btn-success  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a>';
					}


					
			}


			],

 "order":[[0,"asc"]],

		});	



$('#lista').on('click',function(){


	window.open(baseurl+"Clista/");



});

/*
selpedido = function(idpedido){
	$('#producto').val(idpedido);
	

  
};




$('#envconfeccion').submit(function(){
	
$.ajax({


	url:baseurl+'Cproductosen/enviarconfeccion',


	type:'POST',
	data:$(this).val(),
	success:function(data){
		alert(data);
		

	}
	});
});*/