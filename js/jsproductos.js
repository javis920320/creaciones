
//
//alert();
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
			
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#editarprecio" onClick="editarprecio( \''+row.id_prod+'\',\''+row.idtipoprod+'\',\''+row.nomtipoprod+'\',\''+row.nomprod+'\',\''+row.valor+'\',\''+row.subvalor+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	


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