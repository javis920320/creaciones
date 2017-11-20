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
			{data: 'idbordados','sClass':'dt-body-center'},
			{data: 'nombre','sClass':'dt-body-center'},
			{data:'precio'},
			
			{"orderable":true,
			render:function(data,type,row){



				
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#editarbordados" onClick="editarbor(\''+row.idbordados+'\',\''+row.nombre+'\',\''+row.precio+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#eliminar"  onClick="eliminar(\''+row.idbordados+'\')"><i style="color:green;" class="glyphicon glyphicon-trash"></i> Eliminar</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


$('#frmbordados').submit( function(){

	$.ajax({
		'url':baseurl+'Cbordados/ingresarbordado',
		'type':'POST',
		'data':$(this).serialize(),
		success:function(data){

			alert(data);

		}


	});

});


editarbor= function(idbordados,nombre,precio){
	

	$('#eidbordaos').val(idbordados);
	$('#enombre').val(nombre);
	$('#eprecio').val(precio);



}

eliminar=function(idbordados){
$('#delb').val(idbordados);

};


$('#editbordados').submit(function(){

	$.ajax({

		'url':baseurl+'Cbordados/editarbordados',
		'type':'POST',
		'data':$(this).serialize(),
		success:function(data){
				alert(data);
		}


	});

});


$('#eliminarb').submit( function(){
	
	$.ajax({
		'url':baseurl+'Cbordados/eliminarb',
		'type':'POST',
		'data':$(this).serialize(),
		success:function(data){
			alert(data);

		}


	});


});




