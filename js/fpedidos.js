//alert('que pasa');


$('#btnbuscar').on ('click',function(){
	//alert('presionando boton');

	 var buscar=$('#txtbuscarcliente').val();
//alert(buscar);

$.post("http://localhost/creaciones001/cajax/buscarcliente",
	{id : buscar},
       function(data){
       
		if(data==0){
			console.log(data);
			$('#formcliente').removeClass('hide');

			$('#identidad').val(buscar);

		}else{
			console.log(data);

			 var obj=JSON.parse(data);

			

			 $.each(obj,function(i,item){
				$(".contenedor_json").append('<li>' + item.nombres + '</li>');


			});
			
			//$('#formcliente').addClass('hide');*/
			
		}

});
});


$('#insertcliente').submit(function(){

	var dato=$('#insertcliente').serialize();


$.ajax({
	url:'http://localhost/creaciones001/cajax/ingresarCliente',
	type:'POST',
	data:dato,
	success:function(data){
		if(data){
			$('.msn').removeClass('hide');
		}

	}
	});


});
