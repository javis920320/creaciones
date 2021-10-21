//alert('Soy el Operario');

user=$('#trabajador').val();
// el user  es el  id del usuario  en tabla usuarios
lstperiodos();

cargarvalor(user);
verAdelanto(user);



 function cargarvalor(user){

  var  use=user;
 	$.ajax({
 		'url':baseurl+'Ctrabajos/pago',
 		'type':'POST',
 		'data':{use:use},
 		success:function(data){
 			//alert(data);


 				var obj=JSON.parse(data);
	  			$.each(obj,function(i,items){
	  				$('#valor').text(items.valor);
	  				//$('#p').text(items.p);
	  			});


 		}

 	});

 }


 

   function verAdelanto( user){

   	$.ajax({
   		'url': baseurl+'Ctrabajos/valorAdelanto',
   		'type':'POST',
   		'data':{usuario:user},
   		success: function(data){
   			
   		$("#tblinfo").html(data);
   		
   			

   		}

   	});

   }
 //console.log(user);
//alert(user);
lista(user);

 function lista(user){
     
$('#tbltrabajos').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Ctrabajos/listaoperario",
				'data':{user:user},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura'},
			{data: 'facultad'},
			{data: 'talla'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'precio'},

			//{data:'precio1'},

			{data:'fecha'},

			{"orderable":true,
			render:function(data,type,row){

//nomtipoprod
return'<span>Elaborado</span>';

/*return '<span class="pull-right">' +
                      '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                      '    <li><a href="#" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.idpedido+'\');"><i style="color:#555;" class="glyphicon glyphicon-edit"></i> Editar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                      '    <li><a href="#" title="Enviar Pedido"  data-toggle="modal" data-target="#estado"  onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\')"><i style="color:green;" class="glyphicon glyphicon-plane"></i> Enviar Pedido</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                      '</span>';*/


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#estado" onClick="estadopedido(\''+row.idpedido+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" glyphicon glyphicon-plane"></i><span> Enviar</span></a>';
					}
			}


			],

 "order":[[0,"desc"]],

		});	


}




  



function lstperiodos(){
$.get( baseurl+"Ctrabajos/lstperiodo", function( data ) {
	//alert(data);
var html='<option value="">Seleccione El periodo</option>';//='<select id="periodo">';
    var obj=JSON.parse(data);
	


	$.each(obj,function(i,items){
		html+='<option value='+items.idperiodo+'><strong>Inicio: '+items.fechai+'</strong> | Fin: <strong>'+items.fechaf+'</strong></option>';
		
		console.log(items.idperiodo);
	});
	//html+='</select>';
	$('.per').html(html);
	
	
});

	
}





$('#periodo').on('change',function(){
		 var idper=$('#periodo').val();
		 user=$('#trabajador').val();
		 //alert(user);
		 $.ajax({
		 	url:baseurl+'Ctrabajos/Sumeprecio',
		 	type:'POST',
		 	data:{idper:idper,user:user},
		 	success:function(data){
		 		$("#pre").html(data)

		 	}
		 });
		 
		 
		 
		 
		 $('#tblresperiodos').DataTable({
			'paging':false,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,
			
			'ajax':{

				"url":baseurl+"Ctrabajos/resu_per",
				'data':{idtrabajador:user,idperiodo:idper},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idproceso','sClass':'dt-body-center'},
			{data: 'factura'},
			{data: 'facultad'},
			{data:'nomprod'},
			{data:'descripcion'},
			{data:'cantidad'},
			{data:'precio'},

			//{data:'precio1'},

			{data:'fecha'},

			{"orderable":true,
			render:function(data,type,row){


return'<span>Elaborado</span>';


					}
			}


			],
			
			/*"footerCallback": function ( row, data, start, end, display ) {
            var api = this.api();
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            var total = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Total over this page
            var pageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Update footer
            $( api.column( 7 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        },*/

 "order":[[0,"asc"]],

		});	
});











