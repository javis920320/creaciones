
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
				"url":baseurl+"cclientes/getclientes/",
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'isbn','sClass':'dt-body-center'},
			{data:'title'},
			{data:'subtitle'},
			{data:'author_id'},
			{data:'description'},
			{data:'year'},
			{"orderable":true,
			render:function(data,type,row){

					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" datatoggle="modal" data-target="#modaleditar"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	



//PROBAMOS  EL  AJAX  PARA  EL INGRESO  DE   EL  REGISTRO
$('#formIngreso').submit(function(){
	
   var datos = $('#formIngreso').serialize();
  

	$.ajax({
	url:baseurl+'clibros/getingresolibros',
	type:'POST',
	data:datos,
	success:function(resp){
		alert(resp);

	}

	});




});

/*
	}



	);




$('#tblLibros').DataTable({
			'paging':true,
			'info':true,
			'filter':true
		});	*/



