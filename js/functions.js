
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
				"url":"http://localhost/creaciones001/cclientes/getclientes/",
				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'idpersona','sClass':'dt-body-center'},
			{data:'apellidos'},
			{data:'nombres'},
			{data:'genero'},
			{data:'fecha_nac'},
			{data:'telefono'},
			{"orderable":true,
			render:function(data,type,row){


				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a>';
					}
			}


			],

 "order":[[0,"asc"]],

		});	




