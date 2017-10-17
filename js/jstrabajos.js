
$('#btnbuscar').on('click',function(){
	dato=$('#nfac').val();
	//alert();

	$.post(baseurl+"Ctrabajos/buscarpedido",
		{fac:dato},
		function(data){
			if(data==0){
				$('#res').html('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

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
		//alert(dato);

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
				html+='<option value="'+items.id_prod+'">'+ items.nomprod+'</option>';
			});


			//html+='</select>';
			$("#productos").html(html);
			}
			
			});
			});

$('#tblresumen .idpedido').on('change',function(){

	alert();

});


$('#formtrabajos').submit(function(){
	//alert('llamando a ajax');


	
	$.ajax({
		url:baseurl+'Coperario/ingresarproceso',
		type:'POST',
		data:$(this).serialize(),
		success:function(data){
		//alert(data);
		if(data){
			alert(data);
		}

	}

	});

});


 function filtrar(){

 	 var dato=$('#tpprod').val();
 	  var fac=$('#nfac').val();

 	 $('#tblresumen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Ctrabajos/lista",
				'data':{dato:dato,fac:fac},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpedido','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data:'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
									'<input type="radio" class="idpedido"name="idpedido" value='+row.idpedido+'>'
                       +
                      '</span>';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	

 	
 }
			
			$('#productos').on('change',function(){
				alert($(this).val());

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

