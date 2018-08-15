//setTimeout('document.location=document.location',);



cargarproductos();
let factura='';


$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');

$('#nombres').val('');
$('#telefono').val('');
//$('#telefono').val('');

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
			$('#formingc').removeClass('hide');
			//alert('error');

			


		}else{
			$('#formularioacceso').removeClass('hide');
			$('#factura').removeClass('hide');

			//este funcion sera anulada  ya que cargaremos  cuando cargue el archivo
			//cargarproductos();
			$('#ingpedido').removeClass('hide');
		

			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$('#nombres').val(items.nombres);
				$('#telefono').val(items.telefono);
				$(".contenedor_json").html('<span class="text-success"><strong><h1> Cliente:' + items.nombres+ '</h1><strong></span>');
				$('#idpersona').val(items.idcliente);
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
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cpedidos/lista",


				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'factura','sClass':'dt-body-center'},
			{data:'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'fentrega'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.idpedido+'\',\''+row.descripcion+'\',\''+row.fentrega+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                      '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar('+row.idpedido+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>'+
                      '<input type="checkbox" class="chk" name="chk"  value='+row.idpedido+'>'
                     	
                      ;


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	

eliminar = function(idpedido){
	$('#idpedidod').val(idpedido);

	

  
};


 function eliminarp(){

 	var idpedido=$('#idpedidod').val();
 	$.ajax({
 		'url':'Cajax/eliminarp',
 		'type':'POST',
 		'data':{idpedido:idpedido},
 		success:function(data){
 			alert(data);
 			$('#tblpedidos').DataTable().ajax.reload();
 			$('#tblresumen').DataTable().ajax.reload();
 			


 		}

 	});
 }





$('#pdf').on('click',function(){


	window.open(baseurl+"/Pdfci/");



});

$('#lista').on('click',function(){


	window.open(baseurl+"Clista/");



});

selPersona = function(factura, facultad,cantidad,talla,idpedido,descripcion,fentregae){

	$('#facturaedit').val(factura);
	$('#facultadedit').val(facultad);
	$('#fentregae').val(fentregae);
	$('#editcantidad').val(cantidad);
	$('#tallaedit').val(talla);
	$('#idpersonaedit').val(idpedido);

console.log(descripcion);
	$('#descripcion_edit').text(descripcion);





  
};



$('#form-edit').submit(function(){
	//alert($(this).serialize());

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
//estadopedido = function(idpedido, nombres, telefono){
    estadopedido = function(idpedido, nombres, telefono){
	$('#idpedido').val(idpedido);
	$('#enviar').val(2);
	

  
};





function cambioestado(){
	var idpedido=$('#idpedido').val();
	var enviar=$('#enviar').val();
	//alert(enviar);

	$.ajax({
	url:baseurl+'Cpedidos/enviarpedido',
	type:'POST',
	data:{idpedido:idpedido,enviar:enviar},
	success:function(data){
		alert(data);

		$('#tblpedidos').DataTable().ajax.reload();
 			$('#tblresumen').DataTable().ajax.reload();
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}

	});


}


 function agregarcliente(){
	var identificacion=$('#idcliente').val();
	var nombre=$('#nombres').val();
	var telefono=$('#telefono').val();
	if(nombre==''){
		$('#spnnombre').text('Este Campo es requerido');
	}else if(telefono==''){
		$('#spntel').text('Este Campo es requerido');
	} else{
		$('#spnnombre').addClass('hide');
		$('#spntel').addClass('hide');
		
		$.ajax({
			'url':baseurl+'Cajax/crearcliente',
			'type':'POST',
			'data':{nombres:nombre,celular:telefono,identidad:identificacion},
			success:function(data){
				if(data){
					alert(data);
					$(".contenedor_json").html('<span class="text-success"><strong><h1> Cliente:' + nombres+ '</h1><strong></span>');
				$('#idpersona').val(data);
					$('#formularioacceso').removeClass('hide');
					$('#pr').addClass('hide');
				}else{
					
					alert('Error');
				}
			}
			
			
		});
		
	}
	 
 }


  



$('#agregarprod').on('click',function(){

	var cedula=$('#idpersona').val();

	var factura=$('#factura').val();
		//alert(factura);
	var facultad=$('#facultad').val();
	var tipoprod =$('#seltp').val();
	var cantidad =$('#cantidad').val();
	var descripcion =$('#descripcion').val();
	var talla =$('#talla').val();

	var fentrega =$('#fentrega').val();
	 if(factura==''){
	 	$('#alerta2').removeClass('hide');

	 }else if(facultad==''){
	 	$('#alerta3').removeClass('hide');

	 }else{

	 
	$('#alerta2').addClass('hide');
	$('#alerta3').addClass('hide');
	
	//var descripcion =$('#descripcion').val();

	$.post(baseurl+'Cpedidos/insertpedido',
		//{idcliente:cedula,factura:factura,facultad:facultad,cantidad:cantidad,descripcion:descripcion,talla:talla,seltp:tipoprod},
		{idpersona:cedula,factura:factura,facultad:facultad,cantidad:cantidad,talla:talla,descripcion:descripcion,seltp:tipoprod,fentrega:fentrega},
		function(data){

			
			alert(data);


		});

 
$('#cantidad').empty();
$('#descripcion').empty();


$('#tblresumen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cpedidos/lista",
				'data':{factura:factura},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'factura','sClass':'dt-body-center'},
			{data:'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'fentrega'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#editarp" onClick="selpedido(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.descripcion+'\',\''+row.idpedido+'\',\''+row.fentrega+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                       '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar('+row.idpedido+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                       '<input type="checkbox" class="chk" name="chk"  value='+row.idpedido+'>'+	
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


 selpedido= function(factura,facultad,cantidad,talla,descripcion,idpedido,fentrega){
$('#faced').val(factura);
$('#facued').val(facultad);
$('#canted').val(cantidad);
$('#talled').val(talla);
$('#desced').val(descripcion);
$('#idpedidoed').val(idpedido);
$('#fentregax').val(fentrega);



  	
 }


 function editarpedido(){


 	 var factura =$('#faced').val();
 	 var facultad =$('#facued').val();
 	 var cantidad =$('#canted').val();
 	 var talla =$('#talled').val();
 	 var descripcion =$('#desced').val();
 	 var idpedido =$('#idpedidoed').val();
 	  var fentregax =$('#fentregax').val();

 	 $.ajax({
'url':baseurl+'Cpedidos/editar',
'type':'POST',
'data':{facturaedit:factura,facultadedit:facultad,editcantidad:cantidad,tallaedit:talla,descripcion_edit:descripcion,idpersonaedit:idpedido,fentregae:fentregax},
success:function(data){
	$('#tblresumen').DataTable().ajax.reload();
	alert(data);

}
 	 });




 }

$('#camestado').submit(function(){

	alert($('.x').attr('data'));
});




function generarenvio(){
		
		
        //console.log(selectedItems);//
		 var i=0;
		  selecciones =  new Array();
		$('.chk').each(function(){
    var chk = $(this);
    if(chk.prop('checked')){
     //alert(chk.val());
	 
	  selecciones[i]=chk.val();

	  i++;
	  
  }
  
  
  
});

console.log(selecciones);
$.ajax({
          type: "POST",
          url: baseurl+'Cproductosen/arreglo2',
          data: {'array':JSON.stringify(selecciones)},//capturo array     
          success: function(objView){
			  alert(objView);
			  $('#tblresumen').DataTable().ajax.reload();

        }
});
  
	 }


	  $('input[name="mtodo"]').on('change',function(){
		if ($('#mtodo').prop('checked') ) {
    $('.chk').prop('checked',true);
		}else{
			 $('.chk').prop('checked',false);
		}
	 });
	 
	 
	
	
	 $('#frmtp').submit(function(){
		 $.ajax({
			 
		 
		 url:baseurl+'Ctipoprod/inserttprod',
		 type:'POST',
		 data:$(this).serialize(),
		 success:function(data){
			 alert(data);
			
			 
		 }
		 
		  });
		 
	 } );



/*DESC:cambios  en panel de envios*/
$('#nomcli').prop( "disabled", true );
				$('#telcli').prop( "disabled", true );

$('#btnvalcc').on('click',function(){

	var txtide=$('#idcliente').val();


	$.post(baseurl+"Cajax/buscarcliente",
		{id : txtide},
       function(data){
      if(data==0){
      	$('#msj').text("dato no encontrado,debes registrar al cliente");
      		$('#btnnuevocli').prop( "disabled", false );
      		$('#nomcli').prop( "disabled", false );
				$('#telcli').prop( "disabled", false );
				$('#nomcli').val("");
				$('#telcli').val("");


      }else if(data!=0){
      	$('#msj').text("Cliente registrado..");

      	var x=JSON.parse(data);
      	$.each(x,function(i,items){
				$('#nomcli').val(items.nombres);
				$('#telcli').val(items.telefono);
				
			});
      
			

      	$('#btnnuevocli').prop( "disabled", true );



      }


       });


});


 function newcliente(){

var identificacion=$('#idcliente').val();
 var nombre =$('#nomcli').val();
 var telefono=$('#telcli').val();
 var longmax=10;
 var longmin=5;
 var logitud=identificacion.length;


 if(identificacion==0){
alert('identificacion requerida');
 }else if(logitud>longmax){
 	alert('identificacion no valida');

 }else if(logitud<longmin){

 	alert('la identificacion debe contener  mas de 5 digitos');
}else if(nombre==""){
alert('nombre requerido');

 }else if(telefono==0){
alert('este dato es requerido');
 }else{

//alert('EN ajax');

 	$.ajax({
			'url':baseurl+'Cajax/crearcliente',
			'type':'POST',
			'data':{nombres:nombre,celular:telefono,identidad:identificacion},
			success:function(data){
				alert('Datos guardados');
					$('#nomcli').prop( "disabled",true);
				$('#telcli').prop( "disabled",true);
			}
			
			
		});
}
 }



 $(".radiov").on('click',function(){
 var tpentidad=$('input:radio[name=tpentidad]:checked').val();
 console.log('tipo entidad:'+tpentidad);
   if(tpentidad=='P'){
 	html="<span class='text-success'><strong>ENTIDAD  SIN DESCRIPCION</strong></span>";
 	$('#cont_tpcli').html(html);
     }else{
 	 $.post(baseurl+"Cpedidomultiple/tipoentidad",
		{tipoentidad : tpentidad},
      function(data){
      	var x=JSON.parse(data);
      	html="<select class=' cont_tpcli form-control'><option value='0'>Seleccione una opcion</option>";
      	//html='':
      	$.each(x,function(i,items){
		html+="<option value="+items.identidad+">"+items.nomentidad+"</option>";		
		});
      	html+="</select>";


      	$('#cont_tpcli').html(html);
      });
 	  }
       });


 
$('#cont_tpcli').on('change',function(){
	var f=$('#cont_tpcli').val();
	//alert(f);


	$.post(baseurl+"Cpedidomultiple/dependencia",
		{dep : f},
      function(data){
      	///alert(data);

      	var x=JSON.parse(data);
      	html="<option value='0'>Seleccione una opcion</option>";
      	$.each(x,function(i,items){
		html+="<option value="+items.iddependencia+">"+items.nombredep+"</option>";		
		});
      	//html+="</option>";


      	$('#dep').html(html);
      }

      );

});



 function creapedido(){

 var idPersona=$('#idcliente').val();
 	 ///alert(idPersona);
 	 console.log(idPersona);
  //validacion
 	 if(idPersona== ""){

 	 	alert('identificacion requerida');

 	  }else if($('#nomcli').val()==""){

 	 	  alert("El nombre del cliente es requerido");

 	  }else if($('#telcli').val()==""){

	      alert("Telefono de cliente requerido");


 	  }else if($('#faccli').val()==""){

     alert("Ingresa la factura del cliente");

 	  }else{


 	  	var tpc=$('input:radio[name=tpentidad]:checked').val();
 	  	//alert(tpc);



 	  	



 	 
 	 var  s=$('#faccli').val();
 	 
 	 console.log(idPersona);
 	  // realizamos la  busqueda de la persona  si  fue registrada dos  veces  generar error
    var miObjeto = new Object();

    if(tpc=='P'){
    	miObjeto.tpc="Particular";
 	  	
 	  }else if(tpc=='E'){
 	  	miObjeto.tpc=="Empresa";

 	  }else if(tpc=='U'){
 	  	miObjeto.tpc="Universidad";

 	  }else if(tpc=='C'){
 	  	miObjeto.tpc="Colegio";

 	  }



	 miObjeto.factura=$('#faccli').val();
 	 miObjeto.fechaentrega=$('#fecentre').val();
  	 miObjeto.talla=$('#talla').val();
  	 miObjeto.cantidad=$('#lblcn').val();
  	 miObjeto.descripcion=$('#lbldesc').val();
 	 miObjeto.descripcion=$('#lbldesc').val();
  	 miObjeto.entidad=$('#cont_tpcli').val();
  	 miObjeto.dependencia=$('#dep').val();
     miObjeto.nomentidad=$('#cont_tpcli option:selected').text();
  	 miObjeto.nomdependencia=$('#dep option:selected').text();
  	  
  	 //conulta el tipo de producto
  	 var x= $('#seltp').val();


  
  	 
miObjeto.tipoprod= $('#seltp option:selected').text();
miObjeto.nomtipoprod= $('#seltp option:selected').val();

  	



  console.log(miObjeto);

  var html;
  if(miObjeto.tpc=='Particular'){

  	html="<tr><td >"+miObjeto.factura+"</td><td>0</td><td>0</td><td>"+miObjeto.tpc+"</td><td>"+miObjeto.fechaentrega+"</td><td>"+miObjeto.nomtipoprod+"</td><td>"+miObjeto.tipoprod+"</td><td>"+miObjeto.talla+"</td><td>"+miObjeto.cantidad+"</td><td>"+miObjeto.descripcion+"</td><td><button class='borrar'><span class=' glyphicon glyphicon-remove'></span>Descartar</button></td><td><button class='enviar' data="+idPersona+"><span class=' glyphicon  glyphicon-share-alt'></span>Enviar</button></td></tr>";

  }else{




   html="<tr><td>"+miObjeto.factura+"</td><td class=''>"+miObjeto.entidad+"</td><td class=''>"+miObjeto.dependencia+"</td><td>"+miObjeto.nomentidad+"-"+miObjeto.nomdependencia+"</td><td>"+miObjeto.fechaentrega+"</td><td>"+miObjeto.nomtipoprod+"</td><td>"+miObjeto.tipoprod+"</td><td>"+miObjeto.talla+"</td><td>"+miObjeto.cantidad+"</td><td>"+miObjeto.descripcion+"</td><td><button class='borrar'><span class=' glyphicon glyphicon-remove'></span>Descartar</button></td><td><button class='enviar'><span class=' glyphicon  glyphicon-share-alt'></span>Enviar</button></td></tr>";


}

  $('#resumen').append(html);

  }


  

 
}

function creaentidad(){

  

   var nomentidad=$("#nentidad").val();
   var tipo=$("#tipoent").val();
   $.ajax({

   	'url':baseurl+'Cpedidomultiple/nuevaentidad',
   	'type':'POST',
   	'data':{nomentidad:nomentidad,tipo:tipo},
   	success:function(data){
   		alert(data);

   	}

      });



  
}


function parametros(x){
	//alert(x);
	$('#tipoent').val(x);
	$('#contend').addClass('hide');
$('#lstdepe').addClass('hide');



	 $.post(baseurl+"Cpedidomultiple/tipoentidad",
		{tipoentidad : x},
      function(data){
      	var x=JSON.parse(data);
      	html="<select class=' x1 form-control'><option value='0'>Seleccione una opcion</option>";
      	//html='':
      	$.each(x,function(i,items){
		html+="<option value="+items.identidad+">"+items.nomentidad+"</option>";		
		});
      	html+="</select>";


      	$('#x1').html(html);
      });


}

$('#formentidad').on('click',function(){

$('#contend').removeClass('hide');
$('#lstdepe').addClass('hide');

});

$('#formdep').on('click',function(){

$('#lstdepe').removeClass('hide');
$('#contend').addClass('hide');

});

function creadependencia(){
var identidad =$('#x1 option:selected').val();
var nombredep=$('#ndepe').val();
 $.ajax({

   	'url':baseurl+'Cpedidomultiple/nwdependencia',
   	'type':'POST',
   	'data':{identidad:identidad,nombredep:nombredep},
   	success:function(data){
   		alert(data);

   	}

      });


}



$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


$('body').on('click','.table .enviar',function(event){
      event.preventDefault();
    
      var fac =$(this).parent().parent().children('td:eq(0)').text();
       var entidad =$(this).parent().parent().children('td:eq(1)').text();
        var dependencia =$(this).parent().parent().children('td:eq(2)').text();
         var facultad =$(this).parent().parent().children('td:eq(3)').text();
          var fentrega =$(this).parent().parent().children('td:eq(4)').text();
          var nomtipoprod=$(this).parent().parent().children('td:eq(5)').text();
           var tipoprod =$(this).parent().parent().children('td:eq(6)').text();
            var talla =$(this).parent().parent().children('td:eq(7)').text();
             var cantidad =$(this).parent().parent().children('td:eq(8)').text();
              var descripcion=$(this).parent().parent().children('td:eq(9)').text();
              var idPersona=$('#idcliente').val();
              $(this).closest('tr').remove();

               
      //console.log('Factura recibida'+fac);

      //envio de pedido

      $.ajax({
		
		'url':baseurl+'Cpedidomultiple/pedidonuevo',
		'type':'POST',
		'data':{fac:fac,entidad:entidad,dependencia:dependencia,facultad:facultad,fentrega:fentrega,codtipoprod:nomtipoprod,talla:talla,cantidad:cantidad,descripcion:descripcion,idPersona:idPersona},
		success:function(data){
			if(data==-1){
				alert('Los datos del cliente se deben ser guardados');
			}else if(data==0){

				alert('No se guardado los datos');
			}else{
				alert('Producto enviado correctamente');
			}



		}





      });



});


pedidosdia();
 function pedidosdia(){


 	$.get(baseurl+"Cpedidomultiple/cantidadpedidos", function( data ) {
 var c=JSON.parse(data);

$("#pedidosdia").text(data);

});
 }

$('#midial').dialog();

 function modalcarg(){

 	$('#midial').dialog();
 }

  
  function enviart(){

 
 var c=confirm("Deseas enviar todos los registros");


  if(c){



    var nFilas = $("#tblped tr").length;
      var nColumnas = $("#tblped tr:last td").length;

      alert('FIlas:'+nFilas+'colum'+nColumnas);

  }

  }



