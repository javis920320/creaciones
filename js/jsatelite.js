//lstsatelites();
//alert($('#trabajador').val());
  var persona=$('#trabajador').val();
 // alert(persona);


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
			//{data: 'idpedido','sClass':'dt-body-center'},
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
          "targets": [7], 
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

 "order":[[0,"asc"]],

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




function registroproceso(){




 

//$('#formtrabajos').submit(function(){


	var dis=$('#disponibles').val();
	var cantidad=$('#cantidad').val();
	
	diponibles=parseInt(dis);
	
	//alert('CANTIDAD '+cantidad+' DISPONIBLE '+diponibles);
	 if(cantidad>diponibles){
	 	alert('Erro verifica la cantidad disponible');
	 }else if(diponibles==0){

	 	alert('No hay productos disponibles');

	 }else{
	//alert($(this).serialize());


	/*
VARIABLES
	$param['cantidad']=$this->input->post('cantidad');
	 	$param['idprod']=$this->input->post('productos');
	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['idpersona']=$this->input->post('trabajador');
	 	//echo $param['idtrabajador'];
	 	$preciob=$this->Moperario->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$param['idtrabajador']=$this->Moperario->trabajadorid($param);
	    $param['idtrabajador'];*/
	    var productos=$('#productos').val();
	    //var idpedido=$('#tblresumen .idpedido').data();

	    var idpedido=$('input:radio[name=idpedido]:checked').val();
	    var trabajador=$('#trabajador').val();


	
	$.ajax({
		url:baseurl+'Csatelite/asignarsatelite',
		type:'POST',
		data:{cantidad:cantidad,productos:productos,idpedido:idpedido,trabajador:trabajador},
		success:function(data){
		//alert(data);
		if(data){
			//$('#tbltrabajos').data.reload();
			validarc();
			alert(data);

		}

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


