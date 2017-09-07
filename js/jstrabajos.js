
$('#btnbuscar').on('click',function(){
	dato=$('#nfac').val();
	//alert();

	$.post(baseurl+"ctrabajos/buscarpedido",
		{fac:dato},
		function(data){
			if(data==0){
				$('#res').append('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

			}else{

			var obj=JSON.parse(data);

			 console.log(obj[0].nombres);

			html='<select id="tpprod" name="tpprod" class="form-control">';
			html+='<option value="">Seleccione una opcion</option>';

			$.each(obj,function(i,items){
				html+='<option value="'+items.idtipoprod+'"">'+ items.nomtipoprod+'</option>';
			});


			html+='</select>';
			$("#desc").html(html);
			}

			 		



		});



});

$('#tpprod').change(function(event){

		 var dato=$('#tpprod').find(':selected').val();
		 $('#prueba').val(dato);
	});


/*$(document).ready(function(){
$(“#select4”).change(function(event){
var id = $(“#select4”).find(‘:selected’).val();
$(“#select5”).load(‘genera-tarjeta.php?id=’+id);*/

//});
//});*/