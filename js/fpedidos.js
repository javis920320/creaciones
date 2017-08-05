<<<<<<< HEAD
$('#btnbuscar').on ('click',function(){

	 var buscar=$('#txtbuscarcliente').val();

$.post("http://localhost/creaciones/index.php/cajax/buscarcliente",
	{id: buscar},
       function(data){
		alert(data);
=======
alert('ssss');
/*$('#btnbuscar').on('click',function(){

 //var id=$('#txtbuscarcliente').val();
 alert(id);

	/*$.post(baseurl="cajax/buscarcliente",
	        {texto:id},
	 	function(data){
	 		alert(data);
>>>>>>> ae8358f5b2d10d7b386ffb8ade1eaee817229481

});
});