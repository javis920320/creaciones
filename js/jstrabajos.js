
$('#btnbuscar').on('click',function(){
	dato=$('#nfac').val();
	//alert();

	$.post(baseurl+"ctrabajos/buscarpedido",
		{fac:dato},
		function(data){
			console.log(data[0].nombres);

			$('#desc').append("<table><th>Factura</th> <th>Descripcion</th> <th>cantidad</th></table>");

		



		});




});