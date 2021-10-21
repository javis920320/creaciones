
listaEnvios(null,null,null,null,null);


function eventClick(){
var factura=$('#busfact').val();
  var producto=$('#busproducto').val();
   var facultad=$('#busfacultad').val();
    var cantidad=$('#buscantidad').val();
     var talla=$('#bustalla').val();
      var fingreso=$('#fingreso').val();
        var fentrega=$('#fentrega').val();
        listaEnvios(factura,talla,cantidad,fingreso,fentrega);


}


function listaEnvios(factura,talla,cantidad,fingreso,fentrega){
	//alert(factura);





$('#tblproductosen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cproductosen/estados",
				'data':{factura:factura,talla:talla,cantidad:cantidad,fingreso:fingreso,fentrega:fentrega},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'factura','sClass':'dt-body-center'},
			{data: 'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'fentrega'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){

				if(row.estado==2){
					resp='<button class="btn" data-toggle="modal" data-target="#editarcorte" onClick="ajustarpedido(\''+row.factura+'\',\''+row.facultad+'\',\''+row.cantidad+'\',\''+row.talla+'\',\''+row.descripcion+'\',\''+row.fentrega+'\',\''+row.idpedido+'\',\''+row.idtipoprod+'\',\''+row.nomtipoprod+'\')"><i class="glyphicon glyphicon-pencil"> Edit</i></button>';

				}else{
					 resp='<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> proceso</span></a>';
				}



				

					
					return resp;
					}


					
			}


			],

			"columnDefs": [
        {
          "targets": [9], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 0) {
              return "<span class='label label-warning'>Pendiente</span>";
            }else if (data == 3) {
              return "<span class='label label-success'>En confeccion</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>En Cortes</span>";
            }
              
          }
        }
         ],

 "order":[[0,"asc"]],

		});	






}



 
ajustarpedido= function(factura,facultad,cantidad,talla,descripcion,fentrega,idpedido,idtipoprod,nomtipoprod){
	//alert(idtipoprod);
	  $('#editarfac').val(factura);
	   $('#editarfacul').val(facultad);
	    $('#editarcant').val(cantidad);
		 $('#editartalla').val(talla);
		 $('#editardesc').val(descripcion);
		  $('#editarfentrega').val(fentrega);
		  
		   $('#editarpedido').val(idpedido);
		  // alert(idpedido);
		  $("#etprod").val(idtipoprod);
	  
	  
	  
	  
  }

 $('#form-edit').submit(function(){
	//alert($(this).serialize());

	$.ajax({
	url:baseurl+'Cpedidos/editar',
	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}
	});


});

  cargartipo();
    function cargartipo(){
    
$.post(baseurl+"Ctipoprod/gettipoprod",


	{id : 1},
       function(data){
       //	alert(data);
       	 var obj=JSON.parse(data);

		console.log(obj[0].nomtipoprod);
		html='<option  value="">Selecciona una opcion</option>';
		$.each(obj,function(i,items){
			html+='<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>';

		//$(".prodtp").append('<option value="'+items.idtipoprod+'">' + items.nomtipoprod+ '</option>');

       });


		html+='</option>';
		//$(".prodtp").append(html);
		$("#etprod").html(html);


});


    }

