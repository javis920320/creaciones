$('#btnbuscar').on('click',function(){
	$('#alerta').addClass('hide');

	txtide=$('#idcliente').val();


	$.post("http://localhost/creaciones001/cajax/buscarcliente",
	{id : txtide},
       function(data){

       	var f = new Date();
		//dat=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
		dat=f.getDate();

       	//alert();
       
		if(data==0){
			console.log(data);
			$('#alerta').removeClass('hide');
			var f = new Date();
			//dat=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
			dat=f.getDate();

			alert(dat);


		}else{
			cargarproductos();
			$('#ingpedido').removeClass('hide');

			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$(".contenedor_json").append('<span class="text-success"><strong>Nombre del CLiente' + items.nombres+ '<strong></span>');
				$('#idpersona').val(items.nombres);
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
