$('#tblproductosen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cproductosen/lista",
				'data':{factura:''},

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
			{"orderable":true,
			render:function(data,type,row){



				return '<span class="pull-right">' +
					  '<input type="checkbox" class="chk" name="chk"  value='+row.idpedido+'>'+	
					  /*'<a  href="#"  class="btn btn-default  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a>'+*/
					    '<div class="dropdown">' +
                      '  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' +
                      '    Acciones' +
                      '  <span class="caret"></span>' +
                      '  </button>' +
                      '    <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">' +
                        '    <li><a  href="#"  class="btn btn-default  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a></li>' +
                        '    <li><a href="#" title="Eliminar"  data-toggle="modal" data-target="#eliminar" onClick="eliminar('+row.idpedido+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Eliminar</a></li>' +
                      //'    <li><a href="'+baseurl+'cafiliado/descargar/'+row.idPersona+'" title="Imprimir formato"><i class="glyphicon glyphicon-print" style="color:#006699"></i> Imprimir</a></li>' +
                     // '    <li><a href="#" title="Ajustar precios"  data-toggle="modal" data-target="#precios"  onClick="ajustarprecios(\''+row.id_prod+'\',\''+row.valor+'\',\''+row.subvalor+'\')"><i style="color:green;" class="glyphicon glyphicon-usd"></i> Ajustar valores</a></li>' +
                       //'    <li><a href="#" title="Asignar bordados" class="prueba" data-toggle="modal" data='+row.id_prod+' data-target="#asgbordados"  onClick="bordprod(\''+row.id_prod+'\')"><i style="color:green;" class="glyphicon glyphicon-paperclip"></i> Asignar bordados</a></li>' +
                      //'    <li><a href="#" title="Desaprobar afiliado" onClick="updEstadoAfiliado('+row.idPersona+','+2+')"><i style="color:red;" class="glyphicon glyphicon-remove"></i> Desaprobar</a></li>' +
                      '    </ul>' +
                      '</div>' +
                     
                      '</span>';

					
					//return '<a  href="#"  class="btn btn-success  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> En proceso</span></a>';
					}


					
			}


			],

 "order":[[0,"asc"]],

		});	
		
		
		



$('#lista').on('click',function(){


	window.open(baseurl+"Clista/");



});



$('.chk').click(function(){
		alert($('input[name="chk"]:checked').val());
		//alert();
	});


/*$('.chk').click(function()
       {
        var selectedItems= new Array();
                var indice=0;
      $('[name=chk]').each(function()
        {
            if( $(this).attr('checked') )
            {                           
                selectedItems[indice] = $(this).val();//El indice inicial cera 0
                    indice++; //paso a incrementar el indice en 1
            }
        });
        alert(selectedItems);
    });*/
	
	    
	/*   var selectedItems= new Array();
                var indice=0;
      $('[name=chk]').each(function()
        {
            if( $(this).attr('checked') )
            {                           
                selectedItems[indice] = $(this).val();//El indice inicial cera 0
                    indice++; //paso a incrementar el indice en 1
            }
        });*/
	
	function generarenvio(){
		
		
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
$.ajax({
          type: "POST",
          url: baseurl+'Cproductosen/arreglo',
          data: {'array':JSON.stringify(selecciones)},//capturo array     
          success: function(objView){
			  alert(objView);
			  $('#tblproductosen').DataTable().ajax.reload();

        }
});
  
	 }
	 
	 
	 
	 $('input[name="mtodo"]').on('change',function(){
		if ($('#mtodo').prop('checked') ) {
    $('.chk').prop('checked',true);
		}else{
			 $('.chk').prop('checked',false);
		}
	 });
	 
	 
	 
	  eliminar = function(idpedido){
	$('#idpedidod').val(idpedido);

	

  
};


 function eliminarp(){

 	var idpedido=$('#idpedidod').val();
 	$.ajax({
 		'url':'Cajax/eliminarp',
 		'type':'POST',
 		'data':{idpedido:idpedido},
 		success:function(data){
 			alert(data);
 			//$('#tblpedidos').DataTable().ajax.reload();
 			$('#tblproductosen').DataTable().ajax.reload();
 			


 		}

 	});
 }
/*
selpedido = function(idpedido){
	$('#producto').val(idpedido);
	

  
};




$('#envconfeccion').submit(function(){
	
$.ajax({


	url:baseurl+'Cproductosen/enviarconfeccion',


	type:'POST',
	data:$(this).val(),
	success:function(data){
		alert(data);
		

	}
	});
});*/