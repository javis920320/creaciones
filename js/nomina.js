listatrabajadores();
listadesc();;
lstadelantos();

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
			$("#tr1").html(html);


			


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
       				$('#tbldec').DataTable().ajax.reload();
       	
      			}
      );


  }


  /*$("#valor").on({
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


   $("#valadd").on({
  "focus": function(event) {
    $(event.target).select();
  },
  "keyup": function(event) {
    $(event.target).val(function(index, value) {
      return value.replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });
  }
});*/


  function listadesc(){


 $('#tbldec').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cnomina/lstdesc",
				'data':{estado:1},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'nombres','sClass':'dt-body-center'},
			{data: 'concepto','sClass':'dt-body-center'},
			{data:'valor'},
			{data:'fecha'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
									'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.iddescuento+' required="true">'
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


    function lstadelantos(){


 $('#tbladelantos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cnomina/lstadelantos",
				'data':{estado:1},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'nombres','sClass':'dt-body-center'},
			{data:'valor'},
			{data:'fecha'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right">' +
									'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.iddescuento+' required="true">'
                       +
                      '</span>';
					
					}
			}


			],

 "order":[[2,"desc"]],

		});	



  }


   function cargaradelanto(){

	var idtrabajador=$('#tr1').val();
	var valor=$('#valadd').val();


	$.post(baseurl+"Cnomina/adelanto",
		{idtrabajador : idtrabajador,valor:valor},
       		function(data){
       				alert(data);
       				$('#tbladelantos').DataTable().ajax.reload();
       	
      			}
      );


   }