//alert();

$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');

	txtide=$('#idcliente').val();




	$.post(baseurl+"cajax/buscarcliente",


	{id : txtide},
       function(data){

       	var f = new Date();
		//dat=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
		dat=f.getDate();

       	//alert();
       
		if(data==0){
			console.log(data);
			$('#alerta').removeClass('hide');
			


		}else{
			cargarproductos();
			$('#ingpedido').removeClass('hide');
			var f = new Date();
			//dat=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
			dat=f.getDate();
			dat1=f.getFullYear();
			dat2=f.getMonth() +1
			cadena=dat+'/'+dat2+'/'+dat1;

			//alert(cadena);
			$('#fecha').val(cadena);

			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$(".contenedor_json").append('<span class="text-success"><strong>Nombre del CLiente' + items.nombres+ '<strong></span>');
				$('#idpersona').val(items.idpersona);
			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});


});


function cargarproductos(){


	$.post(baseurl+"ctipoprod/gettipoprod",


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
		$("#tpprod").append(html);


});}

	$('#ingpedido').submit(function(){
		//alert($('#fecha').val());
		$.ajax({


	url:baseurl+'cpedidos/insertpedido',

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

				"url":baseurl+"cpedidos/lista",


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



<<<<<<< HEAD
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


=======
>>>>>>> ae148eb3dd448fb2b70052a416963f3fade145f3
				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


$('#pdf').on('click',function(){


	window.open(baseurl+"/Pdfci/");



});

<<<<<<< HEAD
selPersona = function(factura, facultad,cantidad,talla,idpedido){
	$('#facturaedit').val(factura);
	$('#facultadedit').val(facultad);
	$('#editcantidad').val(cantidad);
	$('#tallaedit').val(talla);
	$('#idpersonaedit').val(idpedido);


  
};

=======
>>>>>>> ae148eb3dd448fb2b70052a416963f3fade145f3

$('#formprod').submit(function(){
	alert();

	$.ajax({
	url:baseurl+'cproductos/ingresarprd',
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
	url:baseurl+'cpedidos/enviarpedido',
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