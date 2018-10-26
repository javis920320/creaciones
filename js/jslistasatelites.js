//lstsatelites();

cargarvalores();

 function cargarvalores(){

$.ajax({
	'url':baseurl+'Clistasatel/lstvalores',
	'type':'POST',
	success:function(data){

		 var datos=JSON.parse(data);
		  var html='';

		  $.each(datos,function(i,items){

		  	html+="<tr><td>"+items.idtrabajador+"</td><td>"+items.nombres+"</td> <td>"+items.cantidad+"</td> <td>"+items.vsatel+"</td><td><input   type='button'name='procesoal' class=' procesoal btn btn-primary 'value='Guardar Registros'></td></tr>";


		  });


		  $('#bstl').html(html);

	}





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
			$("#ctra").html(html);

		}

	});
}

 function cambiolista(){
	 
	 //var idtrabajador=$('#ctra').val();
	 //alert(idtrabajador);
	 
	 $.ajax({
		 url:baseurl+'Clistasatel/cambiarestado',
		 data:{idtrabajador:idtrabajador},
		type:'POST',
		success:function(data){
			alert(data);
			

		}
		 
	 });
 }





$('#trabajador').on('change',function(){
	
	
	var dato=$('#trabajador').val();
	
	listageneral(dato);
});
// Creamos  la lista general que tendra por defecto todos los listados
listageneral(0);

function listageneral(dato){
	
	
	
	 $('#tblsatelite').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Clistasatel/lstgeneral",
				'data':{trabajador:dato},
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
			{data:'nombres'},
			{data:'prebordado'},
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
            
            if (data == 2) {
              return "<span class='label label-warning'>Pendiente Entrega</span>";
            }else if (data == 3) {
              return "<span class='label label-success'>Producto Entregado</span>";
            }else if (data == 4) {
              return "<span class='label label-danger'>En Lista de cobro</span>";
            }
              
          }
        }
         ],

 "order":[[0,"desc"]],

		});	
}


function Generareport(){
	
	
	var s=1;//=$('#trabajador').val();
	
	window.open(baseurl+'Cpdfreport/reportesatelite/?satel='+s);
}




$('body').on('click','.table .procesoal',function(event){
      event.preventDefault();
	  var codsate =$(this).parent().parent().children('td:eq(0)').text();

	  $.ajax({
	  	url:baseurl+'Clistasatel/cambiarestado',
	  	type:'POST',
	  	data:{idtrabajador:codsate},
	  	success:function(response){
	  		alert(response);
	  		location.reload();

	  	}


	  });

  });






	 $('#tblhistorial').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'destroy':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Clistasatel/historialSatelite",
				//p.idtrabajador,pe.nombres,sum(precio)as saldo, s.fecha 
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idtrabajador'},
			{data: 'nombres'},
			{data:'saldo'},
			{data:'fecha'},
			{"orderable":true,
			render:function(data,type,row){



return '<button class=" report btn btn-success"> <i class="glyphicon glyphicon-download-alt"></i></button>';
					}
			}


			],
 "order":[[3,"desc"]],

		});	



		$('body').on('click','.report',function(){

				 var idsatelite=$(this).parent().parent().children('td:eq(0)').text();
				 var fecha=$(this).parent().parent().children('td:eq(3)').text();

				 console.log("datos"+idsatelite+" mas fecha "+fecha);
					
				 window.open(baseurl+'Clistasatel/resSAtefecha/'+idsatelite+'/'+fecha);

				


		});
