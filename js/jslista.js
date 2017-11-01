
let fecha='';
fecha=$('#fecha').val();
$('#tblpedidos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cproductosen/lista",
				'data':{fecha:fecha},

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

//nomtipoprod
return'<span>Enviado</span>';

/*return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.idpedido+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';*/


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	

imprimir();

 function imprimir(){

 	$.ajax({
 		'url':baseurl+'Cproductosen/lista',
 		'type':'POST',
 		'data':'',
 		success:function(data){

 			var obj=JSON.parse(data);

 			var html='';
 		$.each(obj,function(i,item){
 			html+='<div id="l">'+item.factura+'|'+item.nomtipoprod+'</div>';
 			

 		});
 		$('#rsp').html(html);
 		}

 	});





 }