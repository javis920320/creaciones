//alert('que pasa');


$('#btnbuscar').on ('click',function(){
	//alert('presionando boton');

	 var buscar=$('#txtbuscarcliente').val();
//alert(buscar);

$.post("http://localhost/creaciones001/cajax/buscarcliente",
	{id : buscar},
       function(data){
       	alert(data);
       	alert('si respuestas');
		if(data==0){
			$('#formcliente').removeClass('hide');

			$('#identidad').val(buscar);

		}else{

			 var obj=JSON.parse(data);

			salida='';

			each(obj,function(i,item){
				salida+='<table>'+
				'<tr><td>'+item.nombres+'</td><tr>';


			});
			$('#respuesta').append(salida);
		
			//$('#formcliente').addClass('hide');
			
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
		alert(data);

	}
	});


});
