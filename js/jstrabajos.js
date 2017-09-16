
$('#btnbuscar').on('click',function(){
	dato=$('#nfac').val();
	//alert();

	$.post(baseurl+"Ctrabajos/buscarpedido",
		{fac:dato},
		function(data){
			if(data==0){
				$('#res').append('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

			}else{

			var obj=JSON.parse(data);

			 console.log(obj[0].nombres);


			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtipoprod+'"">' + items.nomtipoprod+ '</option>';
			});



			//html+='</select>';
			$("#tpprod").html(html);

			}

			 		



		});

		});





$('#tpprod').on('change',function(event){

		
		var dato= $('#tpprod option:selected').text();
		alert(dato);

			$.post(baseurl+"Cproductos/listaproductosf",
			{dato:dato},
			function(data){
				if(data==0){
				$('#res').append('<span class="text-danger"><h3>no hay productos de este tipo</h3></span>');

			}else{

			var obj=JSON.parse(data);

			
			html='';
			html+='<option value="">Seleccione una opcion</option>';

			$.each(obj,function(i,items){
				html+='<option value="'+items.idtipoprod+'"">'+ items.nomprod+'</option>';
			});


			//html+='</select>';
			$("#productos").html(html);
			}
			
			});
			});


$('#formtrabajos').submit(function(){

	var datos=$(this).serialize();
	alert(datos);

});
			




/*// Obtener estados
$.ajax({
type: "POST",
url: "procesar-estados.php",
data: { estados : "Mexico" } 
}).done(function(data){
$("#jmr_contacto_estado").html(data);
});



// Obtener municipios
$("#jmr_contacto_estado").change(function(){
var estado = $("#jmr_contacto_estado option:selected").val();
$.ajax({
type: "POST",
url: "procesar-estados.php",
data: { municipios : estado } 
}).done(function(data){
$("#jmr_contacto_municipio").html(data);
});
});
 Obtener estados
$.ajax({
type: "POST",
url: "procesar-estados.php",
data: { estados : "Mexico" } 
}).done(function(data){
$("#jmr_contacto_estado").html(data);
});
// Obtener municipios
$("#jmr_contacto_estado").change(function(){
var estado = $("#jmr_contacto_estado option:selected").val();
$.ajax({
type: "POST",
url: "procesar-estados.php",
data: { municipios : estado } 
}).done(function(data){
$("#jmr_contacto_municipio").html(data);
});
});

/*$(document).ready(function(){
$(“#select4”).change(function(event){
var id = $(“#select4”).find(‘:selected’).val();
$(“#select5”).load(‘genera-tarjeta.php?id=’+id);*/

//});
//});*/

