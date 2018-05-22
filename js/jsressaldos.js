
//var idperiodo;

$.ajax({


	url:baseurl+'Cresumenprocesos/periodosaldo',
	type:'POST',
	//data:{idperiodo:idperiodo},
	data:{idperiodo:1},
	success:function(data){
		//alert(data);

		var obj=JSON.parse(data);

		html='';
			html+='<table class="table table-condensed table-bordered table-striped"><tr><th>NOMBRES</th><th>CANTIDAD PROD</th><th>PRECIO CANCELADO</th></tr>';


			$.each(obj,function(i,items){
				html+='<tr><td>' + items.nombres+ '</td><td>' + items.cantidad+ '</td><td>' + items.saldo+ '</td></td>';
			});

			html+='</table>';



			$('#datos').html(html);


	}

	});
