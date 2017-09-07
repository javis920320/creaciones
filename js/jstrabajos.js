
$('#btnbuscar').on('click',function(){
	dato=$('#nfac').val();
	//alert();

	$.post(baseurl+"ctrabajos/buscarpedido",
		{fac:dato},
		function(data){
			if(data==0){
				$('#res').append('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

			}else{

			var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			html='<select>';
			html+='<option>Seleccione una opcion</option>';

			$.each(obj,function(i,items){
				$("#desc").append('<select class="text-danger form-control"><option>' + items.nomtipoprod+ '</option></select>');
			});



			}

			 		



		});




});