$('#btnbuscar').on('click',function(){

 var id=$('#txtbuscarcliente').val();
 alert(id);

	 $.post(baseurl="",
	        {texto:id},
	 	function(data){
	 		alert(data);

	 });
});

