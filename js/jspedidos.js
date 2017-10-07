//setTimeout('document.location=document.location',);
cargarproductos();
let factura='';


$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');



	txtide=$('#idcliente').val();
	if(txtide==''){

		$('#alerta1').removeClass('hide');
	}else{
	$('#alerta1').addClass('hide');
	




	$.post(baseurl+"Cajax/buscarcliente",


	{id : txtide},
       function(data){

       	
       
		if(data==0){
			console.log(data);
			$('#alerta').removeClass('hide');
			$('.contenedor_json').addClass('hide');

			


		}else{

			$('#factura').removeClass('hide');

			//este funcion sera anulada  ya que cargaremos  cuando cargue el archivo
			//cargarproductos();
			$('#ingpedido').removeClass('hide');
		

			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$(".contenedor_json").html('<span class="text-success"><strong><h1> Cliente:' + items.nombres+ '</h1><strong></span>');
				$('#idpersona').val(items.idpersona);
			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});
	}


});


function cargarproductos(){


	$.post(baseurl+"Ctipoprod/gettipoprod",


	{id : 1},
       function(data){
       //	alert(data);
       	 var obj=JSON.parse(data);

		console.log(obj[0].nomtipoprod);
		html='<select id="seltp" name="seltp" class="form-control">';
		$.each(obj,function(i,items){
			html+='<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>';

		//$(".prodtp").append('<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>');

       });


		html+='</select>';
		$(".prodtp").append(html);
		$("#tpprod").html(html);


});}

	$('#ingpedido').submit(function(){
		//alert($('#fecha').val());
		$.ajax({


	url:baseurl+'Cpedidos/insertpedido',

	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}
	});
	});
 

	$('#tblpedidos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cpedidos/lista",


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



return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.idpedido+'\',\''+row.descripcion+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	





$('#pdf').on('click',function(){


	window.open(baseurl+"/Pdfci/");



});

$('#lista').on('click',function(){


	window.open(baseurl+"Clista/");



});

selPersona = function(factura, facultad,cantidad,talla,idpedido,descripcion){
	$('#facturaedit').val(factura);
	$('#facultadedit').val(facultad);
	$('#editcantidad').val(cantidad);
	$('#tallaedit').val(talla);
	$('#idpersonaedit').val(idpedido);

console.log(descripcion);
	$('#descripcion_edit').text(descripcion);





  
};


/*$('#formprod').submit(function(){
	alert();

	$.ajax({
	url:baseurl+'Cproductos/ingresarprd',
	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	/*}
	});*/


//});
$('#form-edit').submit(function(){
	alert();

	$.ajax({
	url:baseurl+'Cpedidos/editar',
	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}
	});


});



//con esta funcion pasamos los paremtros a los text del modal.
estadopedido = function(idpedido, nombres, telefono){
	$('#idpedido').val(idpedido);
	$('#enviar').val(2);
	

  
};

$('#cambioestado').submit(function(){



	$.ajax({
	url:baseurl+'Cpedidos/enviarpedido',
	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}

	});



});


$('#agregarprod').on('click',function(){

	var cedula=$('#idpersona').val();

	var factura=$('#factura').val();
		//alert(factura);
	var facultad=$('#facultad').val();
	var tipoprod =$('#seltp').val();
	var cantidad =$('#cantidad').val();
	var descripcion =$('#descripcion').val();
	var talla =$('#talla').val();
	 if(factura==''){
	 	$('#alerta2').removeClass('hide');

	 }else if(facultad==''){
	 	$('#alerta3').removeClass('hide');

	 }else{

	 
	$('#alerta2').addClass('hide');
	$('#alerta3').addClass('hide');
	
	//var descripcion =$('#descripcion').val();

	$.post(baseurl+'cpedidos/insertpedido',
		//{idcliente:cedula,factura:factura,facultad:facultad,cantidad:cantidad,descripcion:descripcion,talla:talla,seltp:tipoprod},
		{idpersona:cedula,factura:factura,facultad:facultad,cantidad:cantidad,talla:talla,descripcion:descripcion,seltp:tipoprod},
		function(data){
			alert(data);


		});

 
$('#cantidad').empty();
$('#descripcion').empty();	 

$('#tblresumen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cpedidos/lista",
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



return '<span class="pull-right">' +
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
                      '</span>';


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});





}	  

});





$('#tblresumen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cpedidos/lista",
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



return '<span class="pull-right">' +
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
                      '</span>';


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});


/*function errortrap(msg,url,line){
    alert(msg);
    return true;
}
onerror=errortrap;*/