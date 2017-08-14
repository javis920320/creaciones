//alert('que pasa');


$('#btnbuscar').on ('click',function(){
	//alert('presionando boton');

	 var buscar=$('#txtbuscarcliente').val();
//alert(buscar);

$.post("http://localhost/creaciones/cajax/buscarcliente",
	{id : buscar},
       function(data){
       
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
				$(".contenedor_json").append('<span class="text-danger"><strong> El Cliente ' + items.nombres+'  '+items.apellidos + ' Ya se encuentra registrado..<strong></span>');
			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});
});


$('#insertcliente').submit(function(){

	var dato=$('#insertcliente').serialize();


$.ajax({
	url:'http://localhost/creaciones/cajax/ingresarCliente',
	type:'POST',
	data:dato,
	success:function(data){
		if(data){
			$('#msn').removeClass('hide');
		}

	}
	});


});
