$('#btnbuscar').on ('click',function(){

	 var buscar=$('#txtbuscarcliente').val();

$.post("http://localhost/creaciones/index.php/cajax/buscarcliente",
	{id: buscar},
       function(data){
		alert(data);

});
});