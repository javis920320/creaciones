
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

<<<<<<< HEAD
			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';
=======
			html='<select>';
			html+='<option>Seleccione una opcion</option>';
>>>>>>> parent of a91af52... cambios

			$.each(obj,function(i,items){
				$("#desc").append('<select class="text-danger form-control"><option>' + items.nomtipoprod+ '</option></select>');
			});


<<<<<<< HEAD
			//html+='</select>';
			$("#tpprod").html(html);
=======
			html+='</select>';
			$("#desc").append('<select class="text-danger form-control"><option>' + items.nomtipoprod+ '</option></select>');
>>>>>>> parent of a91af52... cambios
			}

			 		



		});




<<<<<<< HEAD
$('#tpprod').on('change',function(event){

		
		var dato= $('.pr option:selected').text();

			$.post(baseurl+"cproductos/listaproductosf",
			{dato:dato},
			function(data){
				if(data==0){
				$('#res').append('<span class="text-danger"><h3>no hay productos de este tipo</h3></span>');

			}else{

			var obj=JSON.parse(data);

			 //console.log(obj[0].nombres);

			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
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
=======
});
>>>>>>> parent of a91af52... cambios
