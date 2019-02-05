selpedido = function(idpedido){
	$('#producto').val(idpedido);
	

  
};




$('#envconfeccion').submit(function(){
//alert('enviando');
	
$.ajax({


	url:baseurl+'Cproductosen/enviarconfeccion',


	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		
		

	}
	});
});




	function crearfichas(){
		
		
        //console.log(selectedItems);//
		 var i=0;
		  selecciones =  new Array();
		$('.chk').each(function(){
    var chk = $(this);
    if(chk.prop('checked')){
     //alert(chk.val());
	 
	  selecciones[i]=chk.val();

	  i++;
	  
  }
  
  
  
});

console.log(selecciones);

selecciones = JSON.stringify(selecciones);
window.open(baseurl+'Cpdfreport/imp?selecciones='+selecciones);



}



	function imprimirsel(){
		
		
        //console.log(selectedItems);//
		 var i=0;
		  selecciones =  new Array();
		$('.chk').each(function(){
    var chk = $(this);
    if(chk.prop('checked')){
     //alert(chk.val());
	 
	  selecciones[i]=chk.val();

	  i++;
	  
  }
  
  
  
});

console.log(selecciones);

selecciones = JSON.stringify(selecciones);
window.open(baseurl+'Cpdfreport/imp?selecciones='+selecciones);



}




function activarprint(){
	
	
	//console.log(selectedItems);//
		 var i=0;
		    selecciones =  new Array();
		    $('.chk').each(function(){
        var chk = $(this);
          
		  if(chk.prop('checked'))
		  {
     
	 
				selecciones[i]=chk.val();

				i++;
	  
		  }
  
  
  
			});
			

		$.ajax({
          type: "POST",
          url: baseurl+'Cproductosen/activarprint',
          data: {'array':JSON.stringify(selecciones)},//capturo array     
          success: function(objView){
			  alert(objView);
			  $('#tblproductosen').DataTable().ajax.reload();

				}
			});

	
	
}


 function eliminaPedido(){

 	 var codpedido= $('#codpedido').val();
 	 //alert(codpedido);


 	 $.ajax({
 	 	url:baseurl+'Ctaller/Eliminarpedido',
 	 	type:'POST',
 	 	data:{idpedido:codpedido},
 	 	async:false,
 	 	success:function(data){
 	 		alert(data);
 	 		$('#tblproductosen').DataTable().ajax.reload();

 	 	}

 	 });
 }
 ///listEntidad();

  function listEntidad(){

 var tpEntidad=$("#tipoEntidad").val();

  	$.ajax({

  		url:baseurl+'Cpedidomultiple/tipoentidad',
  		type:'POST',
  		data:{tipoentidad:tpEntidad},
  		success:function(resp){

  			obj=JSON.parse(resp);

  			html='';
  			html+='<option>Seleccione</option>';
  			$.each(obj,function(i,items){
	  				html+='<option value="'+items.identidad+'">'+items.nomentidad+'</option>';
	  			});
  			

  			$("#Entidades").html(html);

  		}
  	});
  }

   function dependecias(){

    var idEntidad=$("#Entidades").val();
    //alert(idEntidad);


    $.ajax({

  		url:baseurl+'Cpedidomultiple/dependencia',
  		type:'POST',
  		data:{dep:idEntidad},
  		success:function(resp){
  			//alert(resp);

  			obj=JSON.parse(resp);

  			html='';
  			html+='<option>Seleccione</option>';
  			$.each(obj,function(i,items){
	  				html+='<option value="'+items.iddependencia+'">'+items.nombredep+'</option>';
	  			});
  			

  			$("#dependecia").html(html);

  		}
  	});

   }


cargarproductos();
   function cargarproductos(){


	$.post(baseurl+"Ctipoprod/gettipoprod",


	{id : 1},
       function(data){
       //	alert(data);
       	 var obj=JSON.parse(data);

		console.log(obj[0].nomtipoprod);
		html="";
		$.each(obj,function(i,items){
			html+='<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>';

		//$(".prodtp").append('<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>');

       });


		
		
		$("#tipoProd").html(html);


});}


$('#tipoProd').on('change',function(event){

		
		var dato= $('#tipoProd option:selected').text();
		//alert(dato);

			$.post(baseurl+"Cproductos/listaproductosf",
			{dato:dato},
			function(data){
				if(data===0){
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


 function crearRegistro(){
 	 var id_prod=$('#productos').val();
 	 var talla=$('#talla').val();
 	 var  cantidad=$('#cantDisponible').val();
 	 var entidad=$("#Entidades").val();
 	 var dependecias=$("#dependecia").val();

 	   if(id_prod==''){
 	   	alert("Se debe seleccionar un producto");

 	   } else if(talla==''){
alert("Debes ingresar la talla");
 	   }else if(cantidad<=0) {
 	   	alert("La  cantidad "+cantidad+" no es permitida");
 	   	
 	   }else if (entidad=='') {
 	   	alert("Selecciona  una Entidad ");
 	   	
 	   }else if (dependecia=='') {
 	   	alert("dependencia querida");
 	   	
 	   }else {


 	 $.ajax({
 	 	url:baseurl+'Ctaller/registrarDisponibles',
 	 	type:'POST',
 	 	data:{id_prod:id_prod,talla:talla,cantidad:cantidad,entidad:entidad,dependecias:dependecias},
 	 	success: function(data){
 	 		alert(data);

 	 	}
 	 })
			 	   	
 	   }



 }



 listaDsp(1);

 function  listaDsp(user){
     
$('#listaDisponibles').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			

			'ajax':{

				"url":baseurl+"Ctaller/listaDisponibles",
				'data':{user:user},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpedidosDisponibles','sClass':'dt-body-center'},
			{data: 'descripcion'},
			{data: 'nomprod'},
			{data: 'cantidad'},
			{data:'fecha'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){


return'<button>Asignar</button><button>Ver  detalles asignacion</button>';


					}
			}


			],

 "order":[[0,"desc"]],

		});	


}


