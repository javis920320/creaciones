lstsatelites();

//alert($('#trabajador').val());
  var persona=$('#trabajador').val();
 // alert(persona);
 cargarlistacobro();


lstprocesosatelite(persona);


function lstprocesosatelite(persona){
	
	//alert(persona);
	
	
	
	 $('#tblsatelite').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Csatelite/lstsatelite",
				'data':{idpersona:persona},
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			//{data:'nomtipoprod'},
			{data:'nomprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			//{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right"> $ ' +
									//'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
									row.precio
									
									
                       +
                      '</span><input  type="checkbox" name="chek_sel" id="chek_sel" value="'+row.idproceso+'">';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],
			"columnDefs": [
        {
          "targets": [8], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 2) {
              return "<span class='label label-warning'>Pendiente Pago</span>";
            }else if (data == 3) {
              return "<span class='label label-success'>Producto Entregado</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>En cortes</span>";
            }
              
          }
        }
         ],

 "order":[[8]],

		});	
	
}

function buscar(){

	var fac=$('#fac').val();


	if(fac==0){
alert('Por favor ingresa un dato');
	}else{


$.post(baseurl+"Ctrabajos/lsttipoprod",
		{fac:fac},
		function(data){
			//alert(data);
			if(data==0){
				$('#res').removeClass('hide');
				$('#res').html('<span class="text-danger"><h3>Por Favor Verifica la Factura!!</h3></span>');

			}else{
				$('#res').addClass('hide');

			var obj=JSON.parse(data);

			// console.log(obj[0].nombres);


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
	}
}



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

	//alert();

});



 function filtrar(){

 	 var dato=$('#tpprod').val();
 	  var fac=$('#fac').val();
//alert(fac);
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
									'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
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



  function validarc(){


let idpedido = $('input[name="idpedido"]:checked').val();
$.ajax({
type: "POST",
url:baseurl+"Ctrabajos/productosdisponibles",
data: { idpedido :idpedido } 
}).done(function(data){
	$('#mensaje').removeClass('hide');
	$('#numcantidad').text(data);
	$('#disponibles').val(data);
//$("#jmr_contacto_estado").html(data);
});


}
function lstsatelites(){


	$.ajax({
		url:baseurl+'Csatelite/listasatelites',
		type:'POST',
		success:function(data){
			var obj=JSON.parse(data);

			// console.log(obj[0].nombres);


			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#trabajador").html(html);

		}

	});
}
lstoptaller();

function lstoptaller(){


	$.ajax({
		url:baseurl+'Csatelite/lstoptaller',
		type:'POST',
		success:function(data){
			var obj=JSON.parse(data);

			// console.log(obj[0].nombres);


			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#operarios").html(html);

		}

	});
}



function registroprocesos(){

	var dis=$('#disponibles').val();
	var cantidad=$('#cantidad').val();
	
	diponibles=parseInt(dis);
	
	
	 if(cantidad>diponibles){
	 	alert('Erro verifica la cantidad disponible');
	 }else if(diponibles==0){

	 	alert('No hay productos disponibles');

	 }else{
	
	    var productos=$('#productos').val();
	    var idpedido=$('input:radio[name=idpedido]:checked').val();
	    var trabajador=$('#trabajador').val();


	
	$.ajax({
		url:baseurl+'Csatelite/asignarsatelite',
		type:'POST',
		async:false,
		data:{cantidad:cantidad,productos:productos,idpedido:idpedido,trabajador:trabajador},
		success:function(data){
				alert(data);
			//$('#tblsatelite').data.reload();
			$('#tblsatelite').DataTable().ajax.reload();
			validarc();
		
		
		/*if(data==0){
			
		alert("Verifica los productos Disponibles");
		}else{
			$('#tblsatelite').data.reload();
			validarc();
			alert(data);
			
			
		}*/

	}

	});
	}

//});
}





function registroproceso(){

	var dis=$('#disponibles').val();
	var cantidad=$('#cantidad').val();
	
	diponibles=parseInt(dis);
	
	
	 if(cantidad>diponibles){
	 	alert('Erro verifica la cantidad disponible');
	 }else if(diponibles==0){

	 	alert('No hay productos disponibles');

	 }else{
	
	    var productos=$('#productos').val();
	    var idpedido=$('input:radio[name=idpedido]:checked').val();
	    var trabajador=$('#trabajador').val();


	
	$.ajax({
		url:baseurl+'Csatelite/aplicarvalorcero',
		type:'POST',
		async:false,
		data:{cantidad:cantidad,productos:productos,idpedido:idpedido,trabajador:trabajador},
		success:function(data){
				alert(data);
			//$('#tblsatelite').data.reload();
			$('#tblsatelite').DataTable().ajax.reload();
			validarc();
		
		
		/*if(data==0){
			
		alert("Verifica los productos Disponibles");
		}else{
			$('#tblsatelite').data.reload();
			validarc();
			alert(data);
			
			
		}*/

	}

	});
	}

//});
}
SaldoPendiente(persona);


function SaldoPendiente(persona){

$.ajax({

	url:baseurl+'Csatelite/SaldoPendiente',
		type:'POST',
		data:{persona:persona},
		success:function(data){
			//alert(data);
			
				var obj=JSON.parse(data);

	
			div='';



			$.each(obj,function(i,items){
				div+='<div>Saldo Pendiente:<strong> $  ' + items.precio+ '</strong></vid>';
			});



			
			$("#saldo").html(div);



			
		}


});



 }



  function registrooperario(){
  	
//alert();
  	//alert($('#productos').val());



	var dis=$('#disponibles').val();
	var cantidad=$('#cantidad').val();
	var tpv=$('input:radio[name=optradio]:checked').val();
	diponibles=parseInt(dis);
	
	
	 if(cantidad>diponibles){
	 	alert('Erro verifica la cantidad disponible');
	 }else if(diponibles==0){

	 	alert('No hay productos disponibles');

	 }else{
	
	    var productos=$('#productos').val();
	    var idpedido=$('input:radio[name=idpedido]:checked').val();
	    var trabajador=$('#operarios').val();


	
	$.ajax({
		url:baseurl+'Csatelite/ingresoproceso',
		type:'POST',
		async:false,
		data:{cantidad:cantidad,productos:productos,idpedido:idpedido,trabajador:trabajador,tpv:tpv},
		success:function(data){
				alert(data);
			//$('#tblsatelite').data.reload();
			$('#tbltrabajos').DataTable().ajax.reload();
			validarc();
		
		
		/*if(data==0){
			
		alert("Verifica los productos Disponibles");
		}else{
			$('#tblsatelite').data.reload();
			validarc();
			alert(data);
			
			
		}*/

	}

	});
	}

  }


  $('#tbltrabajos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cresumenprocesos/tblresumeno",
				'type':'POST',
				//'data':{fechai:fechai,fechaf:fechaf},
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			{data: 'facultad'},
			{data: 'talla'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'precio'},
			{data:'nbordados'},
			{data:'valor bordado'},
			{data:'fecha'},
			{data:'nombres'},
			{"orderable":true,
			render:function(data,type,row){



				return'<span class="glyphicon glyphicon-check"></span>';

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"desc"]],

		});	



  function cobroseleccion(){
  
  	 var i=0;
		  selecciones =  new Array();
		$("input[name*='chek_sel']").each(function(){
    			var chk = $(this);
    			if(chk.prop('checked')){
     				selecciones[i]=chk.val();
			i++;
	  
  					}
  
  
  
				});

	$.ajax({
          type: "POST",
          url: baseurl+'Csatelite/cambiolista',
          data: {'array':JSON.stringify(selecciones)},//capturo array     
          success: function(objView){
			  alert(objView);
			  $('#tblsatelite').DataTable().ajax.reload();

				}
			});
  	
  }



 function cargarlistacobro(persona ){

	var persona=$('#trabajador').val();
	var estado=$('#estado').val();
	//alert(persona);
	
	
	
	 $('#tbllistacobro').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Csatelite/consultasatelite",
				'data':{idpersona:persona,estado:estado},
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura','sClass':'dt-body-center'},
			//{data:'nomtipoprod'},
			{data:'nomprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			//{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){



return '<span class="pull-right"> $ ' +
									//'<input type="radio" class="idpedido" onchange="validarc();"name="idpedido" value='+row.idpedido+' required="true">'
									row.precio
									
									
                       +
                      '</span>';



					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],
			"columnDefs": [
        {
          "targets": [8], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 4) {
              return "<span class='label label-warning'>En lista de Cobro</span>";
            }else if (data == 3) {
              return "<span class='label label-success'>Producto Entregado</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>En cortes</span>";
            }
              
          }
        }
         ],

 "order":[[8]],

		});	
 }




