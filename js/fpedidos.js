//alert('que pasa');


$('#btnbuscar').on ('click',function(){
	//alert('presionando boton');

	 var buscar=$('#txtbuscarcliente').val();
//alert(buscar);



$.post(baseurl+"Cajax/buscarcliente",


	{id : buscar},
       function(data){
       	//alert();
       
		if(data==0){
			console.log(data);
			$('#formcliente').removeClass('hide');

			$('#identidad').val(buscar);
			$('.contenedor_json').addClass('hide');

		}else{
			//alert(data.nombres);
			

			 var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			

			$.each(obj,function(i,items){
				$(".contenedor_json").append('<span class="text-danger"><strong> El Cliente ' + items.nombres+ ' Ya se encuentra registrado..<strong></span>');
			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});
});


$('#insertcliente').submit(function(){

	var dato=$('#insertcliente').serialize();


$.ajax({


	url:baseurl+'Cajax/ingresarCliente',


	type:'POST',
	data:dato,
	success:function(data){
		alert(data);
		if(data){
			$('#msn').removeClass('hide');
		}

	}
	});


});
