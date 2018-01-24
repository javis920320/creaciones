lstbordados();

 function asginarbordado(){
	 
	  var id_prod =$('#valoridprod').val();
	var idbordado =$('#lstb').val();
	var cantbord =$('#cant').val();
	$.ajax({
		'url':baseurl+'Cproductos/asignarbordado',
		'type':'POST',
		'data':{id_prod:id_prod,idbordado:idbordado,cantbord:cantbord},
		success:function(data){
			alert(data);
			$("#modalbor .close").click()

		}
	});

 }
 
 otro = function(id_prod,nomprod){
	 
	 
	 $('#nomprodedit').val(nomprod);
	  $('#idproductoedit').val(id_prod);
	 
 }
function lstbordados(){
	$.ajax({
		'url':baseurl+'Cproductos/lstbordados',
		'type':'POST',
		'data':'',
		success:function(data){
			//alert(data);
			var html='';
			html+='<select class="form-control" id="lstb">';
			html+='<option value=0>Selecciona Una Opcion</option>';
			var obj=JSON.parse(data);
			$.each(obj,function(i,item){
				html+='<option value='+item.idbordados+'>'+item.nombre+'</option>';
			});
			html+='</select>';	
			
			$('#lstbord').html(html);
			}
			
		});
		
	}
	
	


$('#tblproductos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{


				"url":baseurl+"Cproductos/lista",


				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'id_prod'},
			{data: 'nomtipoprod','sClass':'dt-body-center'},
			{data:'nomprod'},
			{data:'valor'},
			{data:'subvalor'},
			{data:'nbordados'},
			{data:'vbordado'},
			{data:'valorsatelite'},
			
			{"orderable":true,
			render:function(data,type,row){

					//editarprecio

				

					return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                        '    <li><a href="#" title="Asignar bordados" class="prueba" data-toggle="modal" data='+row.id_prod+' data-target="#editarprecio"  onClick="otro(\''+row.id_prod+'\',\''+row.nomprod+'\')"><i style="color:green;" class="glyphicon glyphicon-pencil"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Ajustar precios"  data-toggle="modal" data-target="#precios"  onClick="ajustarprecios(\''+row.id_prod+'\',\''+row.valor+'\',\''+row.subvalor+'\',\''+row.valorsatelite+'\')"><i style="color:green;" class="glyphicon glyphicon-usd"></i> Ajustar valores</a></li>' +
                       '    <li><a href="#" title="Asignar bordados" class="prueba" data-toggle="modal" data='+row.id_prod+' data-target="#asgbordados"  onClick="bordprod(\''+row.id_prod+'\')"><i style="color:green;" class="glyphicon glyphicon-paperclip"></i> Asignar bordados</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#editarprecio" onClick="editarprecio( \''+row.id_prod+'\',\''+row.idtipoprod+'\',\''+row.nomtipoprod+'\',\''+row.nomprod+'\',\''+row.valor+'\',\''+row.subvalor+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	



ajustarprecios=function(id_prod,valor,subvalor,valorsatelite){

	$('#idprodprecios').val(id_prod);
		$('#precioj').val(valor);
			$('#precioob').val(subvalor);
			$('#epreciosatel').val(valorsatelite);


}


$('#formprod').submit(function(){
	//alert();

	$.ajax({
	url:baseurl+'Cproductos/ingresarprd',
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

//editarprecio(\''+row.nomtipoprod+'\',\''+row.nomprod+'\',\''+row.valor+'\',\''+row.subvalor+'\');

editarprecio = function(id_prod,idtipoprod,nomtipoprod, nomprod,valor,subvalor){
	$('#idproductoedit').val(id_prod);
	$('#seltp').val(idtipoprod);
	console.log(id_prod);
	$('#nomprodedit').val(nomprod);
	$('#valoredit').val(valor);
	$('#subvaloredit').val(subvalor);
	$('.bandera').val(0);
	//$('#idpersonaedit').val(idpedido);


	//$('#descripcion_edit').text(descripcion);
$('#valoredit').prop("disabled", true); 
   $('#subvaloredit').prop("disabled", true); 




  
};

$('#btnconfirmar').on('click',function(){

	 event.preventDefault();
   $('#valoredit').prop("disabled", false); 
   $('#subvaloredit').prop("disabled", false); 
   $('.bandera').val(1);

});

$('#btnnoconfirmar').on('click',function(){

	 event.preventDefault();
   $('#valoredit').prop("disabled", true); 
   $('#subvaloredit').prop("disabled", true); 
   $('.bandera').val(0);

});


$('#editarprod').submit(function(){
	$.ajax({

		url:baseurl+'Cproductos/editarproducto',
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


bordprod= function(id_prod){

	$('#valoridprod').val(id_prod);


$('#bord-prod').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,
			'ajax':{
				"url":baseurl+"Cproductos/listabordados",
				'type':'POST',
				'data':{id_prod:id_prod},
				dataSrc:''
			},
//b.idbordados,b.nombre,pb.cantidad
			'columns':[
			{data: 'idbordados'},
			{data: 'nombre','sClass':'dt-body-center'},
			{data:'cantidad'},
		
			{"orderable":true,
			render:function(data,type,row){

					//editarprecio

				

					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="quitarbordado(\''+row.idbordados+'\',\''+id_prod+'\');"><i class=" glyphicon glyphicon-trash"></i></a>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#editarprecio" onClick="editarprecio( \''+row.id_prod+'\',\''+row.idtipoprod+'\',\''+row.nomtipoprod+'\',\''+row.nomprod+'\',\''+row.valor+'\',\''+row.subvalor+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


}

/*elimina los bordados asignados*/
quitarbordado=function(idbordados,id_prod){
	//
	

//alert(id_prod);
$.ajax({
	'url':baseurl+'Cproductos/removerbordado',
	'type':'POST',
	'data':{idbordados:idbordados,id_prod:id_prod},
	success:function(data){
		alert(data);

		bordprod(id_prod);

	}
});


}


$('#ajustpre').submit(function(){


	$.ajax({

		'url':baseurl+'Cproductos/ajustarprecios',
		'type':'POST',
		'data':$(this).serialize(),
		success:function(data){
			alert(data);

		}




	});


});