lstsatelites();

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
	 
	 var idtrabajador=$('#ctra').val();
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
			{data:'nombres'},

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


function cambioestado(){
	
	
	var s=$('#trabajador').val();
	
	window.open(baseurl+'Cpdfreport/reportesatelite/?satel='+s);
}



