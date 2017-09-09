//alert();

$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');

	txtide=$('#idcliente').val();


<<<<<<< HEAD

	$.post(baseurl+"cajax/buscarcliente",
=======
	$.post("http://localhost/creaciones001/cajax/buscarcliente",
>>>>>>> parent of a91af52... cambios
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
<<<<<<< HEAD

	$.post(baseurl+"ctipoprod/gettipoprod",

=======
	$.post("http://localhost/creaciones001/ctipoprod/gettipoprod",
>>>>>>> parent of a91af52... cambios
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
<<<<<<< HEAD

	url:baseurl+'cpedidos/insertpedido',
=======
	url:'http://localhost/creaciones001/cpedidos/insertpedido',
>>>>>>> parent of a91af52... cambios
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
<<<<<<< HEAD
				"url":baseurl+"cpedidos/lista",

=======
				"url":"http://localhost/creaciones001/cpedidos/lista",
>>>>>>> parent of a91af52... cambios
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



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


$('#pdf').on('click',function(){
<<<<<<< HEAD

	window.open(baseurl+"/Pdfci/");

=======
	window.open("http://localhost/creaciones001/Pdfci/");
	//alert();
>>>>>>> parent of a91af52... cambios

});


$('#formprod').submit(function(){
	alert();

	$.ajax({
	url:'http://localhost/creaciones001/cproductos/ingresarprd',
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