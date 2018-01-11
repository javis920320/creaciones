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


