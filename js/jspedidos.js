$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');

	txtide=$('#idcliente').val();


	$.post("http://localhost/creaciones001/cajax/buscarcliente",
	{id : txtide},
       function(data){
       	//alert();
       
		if(data==0){
			console.log(data);
			$('#alerta').removeClass('hide');


		}else{
			cargarproductos();
			$('#ingpedido').removeClass('hide');
			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$(".contenedor_json").append('<span class="text-success"><strong>Nombre del CLiente' + items.nombres+ '<strong></span>');
			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});


});


function cargarproductos(){
	$.post("http://localhost/creaciones001/ctipoprod/gettipoprod",
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


});}
