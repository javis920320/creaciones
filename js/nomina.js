listatrabajadores();

 function listatrabajadores(){


 	$.ajax({
 		'url':baseurl+'Cnomina/listatrabajadores',
 		'type':'POST',
 		'data':'',
 		success:function(data){
 			

			var obj=JSON.parse(data);

			html='';
			html+='<option value="1">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#tr").html(html);


			


 		}

 	})
 }

vistanomina();


 function vistanomina(){
	 
	 
	 
	$.ajax({
	  		'url':baseurl+'Cnomina/vistaconsutaldo',
			'type':'POST',
	  		'data':{d:1},
	  		success:function(data){
	  			var obj=JSON.parse(data);
				
				
				 
	  			$.each(obj,function(i,items){
	  				$('#tbody').append('<tr class=""><td>'+items.nombres+'</td><td>'+items.cantidad+'</td><td>'+items.saldo+'</td><tr>');
					$('#periodo').html('<tr class=""><td>'+items.fechai+'</td><td>'+items.fechaf+'</td><tr>');
	  				//$('#p').text(items.p);
	  			});


	  		}

	  	});
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




  function cargardesc(){

  	idtrabajador=$("#tr").val();
  	concepto=$("#concepto").val();
  	v=$("#valor").val();

  	//alert(valor);
  	p=',';
  	l='';
  	valor=v.replace(p,l);
  	alert(valor);


	$.post(baseurl+"Cnomina/agregardescuento",
		{idtrabajador : idtrabajador,concepto:concepto,valor:valor},
       		function(data){
       				alert(data);
       	
      			}
      );


  }


  $("#valor").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });
  }
});