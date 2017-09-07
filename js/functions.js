
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
<<<<<<< HEAD
				"url":baseurl+"cclientes/getclientes",
=======
				"url":"http://localhost/creaciones/cclientes/getclientes",
>>>>>>> 5d072e317903217a7d6bf13cb3d3ed63e91733fd
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'cedula','sClass':'dt-body-center'},
			{data:'nombres'},
			{data:'telefono'},
			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Editar informacion" data-toggle="modal" data-target="#modalEditPersona" onClick="selPersona(\''+row.cedula+'\',\''+row.nombres+'\',\''+row.telefono+'\');"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	




//con esta funcion pasamos los paremtros a los text del modal.
selPersona = function(cedula, nombres, telefono){
	$('#upidpersona').val(cedula);
	$('#upname').val(nombres);
	$('#uptelefono').val(telefono);

  
};


$('#formedit').submit(function(){

	dato=$('#formedit').serialize();

	$.ajax({
<<<<<<< HEAD
	url:baseurl+'cajax/updatecliente',
=======
	url:'http://localhost/creaciones/cajax/updatecliente',
>>>>>>> 5d072e317903217a7d6bf13cb3d3ed63e91733fd
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




