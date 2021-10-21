$('#tblusuarios').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cusuarios/usuarios",
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'cedula','sClass':'dt-body-center'},
			{data: 'nombres','sClass':'dt-body-center'},
			{data:'telefono'},
			{data:'tipo'},
			{data:'estado'},
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
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                     // '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#modaleli"  onClick="eliminar(\''+row.idpersona+'\')"><i style="color:green;" class="glyphicon glyphicon-ban-circle"></i> Desactivar </a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';

					}

					
			}


			],

 "order":[[0,"asc"]],

		});	


$('#formusr').submit(function(){
//alert();
	$.ajax({
			'url':baseurl+'Cusuarios/inser_user',
			'type':'POST',
			'async':false,
			'data':$(this).serialize(),
			success:function(data){
				alert(data);

			}


	});

});


selPersona= function(idpersona,cedula,nombres,telefono){
	document.getElementById("eidpersona").value = idpersona;
	document.getElementById("ecedula").value = cedula;
	document.getElementById("enombres").value = nombres;
	document.getElementById("etelefono").value = telefono;

	


}


eliminar =function(cedula){
	
	$('#eliminarc').val(cedula);
	
}



$('#btnEditar').on('click',function(){



		var eidpersona=$('#eidpersona').val();
		//alert(eidpersona);
		var ecedula=$('#ecedula').val();
		var enombres=$('#enombres').val();
		var etelefono=$('#etelefono').val();



	$.ajax({
			'url':baseurl+'Cajax/updatecliente',
			'type':'POST',
			'async':false,
			'data':{personaid:eidpersona,upidpersona:ecedula,upname:enombres,uptelefono:etelefono},
			success:function(data){
				alert(data);

			}


	});

});


$('#frmdusr').submit(function(){
	
	$.ajax({
		'url':baseurl+'Cusuarios/eliminaruser',
		'type':'POST',
		'data':$(this).serialize(),
		success:function(data){
			alert(data);
			
		}
		
	})
	
});