
//alert('q  pasa');

/*$.post(baseurl+"clibros/getLibros",
	  {param:9},

	function(data){

		//alert(data);

		var resp=JSON.parse(data);
		var  contador=0;
		$.each(resp,function(i,item){
		contador=contador+1;
			$('#tblLibros tbody').append(


				'<tr>'+
				'<td>'+contador+'</td>'+
                	'<td>'+item.nombre_libro+'</td>'+
                	'<td>'+item.autor+'</td>'+
                	'<td>'+item.descripcion+'</td>'+
                	'<td>'+item.grado_correspondiente+'</td>'+
                '</tr>'
                );
		});
		/*
		var s= JSON.parce(data);
		$.each(s,function(i,item){


			$('#prueba').append('<option  value="'+item.id_lib+'"> '+item.ress+'</option>');
		});
		*/


		//contador=contador+1;
$('#tblclientes').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,

			'ajax':{

				"url":baseurl+"Cclientes/getclientes",


				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpersona','sClass':'dt-body-center'},
			{data: 'cedula','sClass':'dt-body-center'},
			{data:'nombres'},
			{data:'telefono'},
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.idpersona+'\',\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	




//con esta funcion pasamos los paremtros a los text del modal.
selPersona = function(idpersona,cedula, nombres, telefono){
	$('#personaid').val(idpersona);
	$('#upidpersona').val(cedula);
	$('#upname').val(nombres);
	$('#uptelefono').val(telefono);

  
};


$('#formedit').submit(function(){

	dato=$('#formedit').serialize();
	alert(dato);

	$.ajax({

	url:baseurl+'Cajax/updatecliente',


	type:'POST',
	data:dato,
	success:function(data){
		alert(data);
		/*if(data){
			$('#msn').removeClass('hide');
		}*/

	}
	});

});

/*$('#btnpedidos').on('click',function(){

	window.open(baseurl+"Cpedidomultiple/");

});*/



