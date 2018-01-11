function buscar(){

	var fac=$('#fac').val();


	if(fac==0){
alert('Por favor ingresa un dato');
	}else{


$.post(baseurl+"Ctrabajos/lsttipoprod",
		{fac:fac},
		function(data){
			//alert(data);
			if(data==0){
				$('#res').removeClass('hide');
				$('#res').html('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

			}else{
				$('#res').addClass('hide');

			var obj=JSON.parse(data);

			// console.log(obj[0].nombres);


			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtipoprod+'"">' + items.nomtipoprod+ '</option>';
			});



			//html+='</select>';
			$("#tpprod").html(html);

			}

			 		



		});
	}
}



$('#tpprod').on('change',function(event){

		
		var dato= $('#tpprod option:selected').text();
		//alert(dato);

			$.post(baseurl+"Cproductos/listaproductosf",
			{dato:dato},
			function(data){
				if(data==0){
				$('#res').append('<span class="text-danger"><h3>no hay productos de este tipo</h3></span>');

			}else{

			var obj=JSON.parse(data);

			
			html='';
			html+='<option value="">Seleccione una opcion</option>';

			$.each(obj,function(i,items){
				html+='<option value="'+items.id_prod+'">'+ items.nomprod+'</option>';
			});


			//html+='</select>';
			$("#productos").html(html);
			}
			
			});
			});

$('#tblresumen .idpedido').on('change',function(){

	//alert();

});



function filtrar(){

 	 var dato=$('#tpprod').val();
 	  var fac=$('#nfac').val();

 	 $('#tblresumen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Ctrabajos/lista",
				'data':{dato:dato,fac:fac},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpedido','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data:'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
									'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
                       +
                      '</span>';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	

 	
 }
		

