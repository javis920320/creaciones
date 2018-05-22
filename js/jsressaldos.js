
//var idperiodo;

$.ajax({


	url:baseurl+'Cresumenprocesos/periodosaldo',
	type:'POST',
	//data:{idperiodo:idperiodo},
	data:{idperiodo:9},
	success:function(data){
		//alert(data);

		var obj=JSON.parse(data);

		html='';
			html+='<table><tr><th>NOmbre</th></tr>';


			$.each(obj,function(i,items){
				html+='<tr><td>' + items.nombres+ '</td></td>';
			});

			html+='</table>';



			$('#datos').html(html);


	}

	});
