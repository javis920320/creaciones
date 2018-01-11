listatrabajadores();

 function listatrabajadores(){


 	$.ajax({
 		'url':baseurl+'Cnomina/listatrabajadores',
 		'type':'POST',
 		'data':'',
 		success:function(data){
 			

			var obj=JSON.parse(data);

			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#tr").html(html);


			


 		}

 	})
 }



  function calcular(){
 

	 var fechai=$('#finicio').val();
	 var fechaf=$('#ffin').val();
	 var idtrabajador=$('#tr').val();
	  	//alert(fechai+'?');

	  	$.ajax({
	  		'url':baseurl+'Cnomina/calcular',
	  		'type':'POST',
	  		'data':{fechai:fechai,fechaf:fechaf,idtrabajador:idtrabajador},
	  		success:function(data){
	  			var obj=JSON.parse(data);
	  			$.each(obj,function(i,items){
	  				$('#c').text(items.c);
	  				$('#p').text(items.p);
	  			});


	  		}

	  	});


	 





  }