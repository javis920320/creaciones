

$('#pdfreport').on('click',function(){
	

	window.open(baseurl+'/Cpdfreport/datos_bd');
});

resfiltrar();

 function resfiltrar(){



	//var fechai=$('#fechai').val();
	//var fechaf=$('#fechaf').val();
	 $.ajax({
	'url':baseurl+'Cresumenprocesos/resumentotal', 
	'type':'POST',
	'data':'',
	success:function(data){
	   // alert(data);
		var obj=JSON.parse(data);
		$.each(obj,function(i,item){
			$('#prep').text(item.prep);
			$('#preb').text(item.preb);
			$('#pret').text(item.pret);
			
		});
	}
 });






 }
 
 $('#tbltrabajos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblresumen",
				'type':'POST',
				//'data':{fechai:fechai,fechaf:fechaf},
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data: 'facultad'},
			{data: 'talla'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'precio1'},
			{data:'nbordados'},
			{data:'valor bordado'},
			{data:'fecha'},
			{data:'idtrabajador'},
			{data:'nombres'},
			{"orderable":true,
			render:function(data,type,row){



				return'<button  class="btn btn-primary " data-toggle="modal" data-target="#acionesmod" onClick="editarinfo(\''+row.idproceso+'\',\''+row.idtrabajador+'\',\''+row.id_prod+'\',\''+row.cantidad+'\');">Acciones</button>';

					
					}
			}


			],

 "order":[[0,"asc"]],

		});	
 
 
 
 $('#tblperiodo').DataTable({
			'paging':false,
			'info':false,
			'filter':false,
			'stateSave':false,
			
			
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblperiodo",
				'type':'POST',
				//'data':''
				dataSrc:''
			},

			'columns':[
			{data: 'idperiodo','sClass':'dt-body-center'},
			{data: 'fechai','sClass':'dt-body-center'},
			{data:'fechaf'},	
			{"orderable":true,
			render:function(data,type,row){



				//return'<span class="glyphicon glyphicon-check"></span>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#ediper"><i class=" fa fa-edit"></i></a>';
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#ediper" onClick="periodo(\''+row.idperiodo+'\',\''+row.fechai+'\',\''+row.fechaf+'\');"><i class=" fa fa-edit"></i></a>';
					}
					
					
			}


			],

 "order":[[0,"asc"]],

		});	

 



 periodo= function(idperiodo,fechai,fechaf){

 	$('#modper').val(idperiodo);

 	$('#fechaie').val(fechai);
 	$('#fechafe').val(fechaf);



 }
 
 $('#nuevoper').submit(function(){
	 
	 $.ajax({
		'url':baseurl+'Cresumenprocesos/nuevoperiodo',
		'type':'POST',
		'data':$(this).serialize(),
success:function(data){
	alert(data);
	
}		
	 });
 });

   editarinfo=function(idproceso,idtrabajador,id_prod,cantidad){

  	$('#datoproceso').val(idproceso);
  	$('#tr').val(idtrabajador);
  	$('#tipoproducto').val(id_prod);
  	$("#cantidad").val(cantidad);

  	$.ajax({
  type: "POST",
  url:baseurl+"Cresumenprocesos/datosResumen",
  data:{idproceso:idproceso},
  success:function(data){
 if(data==4){

 	html="<label for='vcero'>Valor Cero</label><input type='radio' name='tipopago' value='1'  id='vcero'> <label for='vsatelite'>Valor Satelite</label><input type='radio' name='tipopago' value='0' id='vsatelite'>";
 	$("#tppago").html(html);

 }else{

html="<label for='vcero'>Valor normal</label><input type='radio' name='tipopago' value='2'  id='vnormal'> <label for='vsatelite'>Valor nocturno</label><input type='radio' name='tipopago' value='3' id='vtercer'>";
 	$("#tppago").html(html);
 }
  }
  
});



  }

  listatrabajadores();

 function listatrabajadores(){


 	$.ajax({
 		'url':baseurl+'Cnomina/listatrabajadores',
 		'type':'POST',
 		'data':'',
 		success:function(data){
 			

			var obj=JSON.parse(data);

			html='';
			html+='<option value="1">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option data="'+items.idtrabajador+'" value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#tr").html(html);
			$("#tr1").html(html);


			


 		}

 	})
 }

  function updateproceso(){

  	 var idtrabajador=$('#tr').val();
  	 var idproceso=$('#datoproceso').val();
  	  var tipopago=$('input[name=tipopago]:checked').val();
  	  var idproducto=$('#tipoproducto').val();
  	   var cantidad=$('#cantidad').val();


  	  if(tipopago==null){
  	  	alert('Seleccione  el tipo de pago');

  	  }else{


  	  	$.ajax({
  	 	url:baseurl+'Cresumenprocesos/updateproceso',
  	 	type:'POST',
  	 	data:{idtrabajador:idtrabajador,idproceso:idproceso,tipoprecio:tipopago,idproducto:idproducto,cantidad:cantidad},
  	 	success:function(data){
  	 		alert(data);

  	 	}
  	 })

  	  }

  	 
  }

  //llamar a todos los productos
  listaProductos();
  function listaProductos(){



$.post(baseurl+"Cresumenprocesos/listaProductos", function( data ) {
obj=JSON.parse(data);
html='<select id="tipoproducto" class="form-control">';
html+='<option>Seleccione</option>'


$.each(obj,function(i,item){
				html+='<option value='+item.id_prod+'>'+item.nomprod+'</option>';
			});
			html+='</select>';	
			
			$('#lisprod').html(html);


});


  }

 function vertipo(){
 	idtrabajador=$('#tr').val();
 	$.ajax({
 		url:baseurl+'Cresumenprocesos/vertipo',
 		type:'POST',
 		data:{idtrabajador:idtrabajador},
 		success:function(data){
 			//alert(data);

 			 if(data==4){

 	html="<label for='vcero'>Valor Cero</label><input type='radio' name='tipopago' value='1'  id='vcero'> <label for='vsatelite'>Valor Satelite</label><input type='radio' name='tipopago' value='0' id='vsatelite'>";
 	$("#tppago").html(html);

 }else{

html="<label for='vcero'>Valor normal</label><input type='radio' name='tipopago' value='2'  id='vnormal'> <label for='vsatelite'>Valor nocturno</label><input type='radio' name='tipopago' value='3' id='vtercer'>";
 	$("#tppago").html(html);
 }



 		}

 	}

 		

 		);





}

 


