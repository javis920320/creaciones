
var idperiodo=$('#id').val();
///alert(idperiodo);

$.ajax({


	url:baseurl+'Cresumenprocesos/periodosaldo',
	type:'POST',
	data:{idperiodo:idperiodo},
	
	success:function(data){
		//alert(data);

		var obj=JSON.parse(data);

		html='';
			html+='<table class="table table-condensed table-bordered table-striped"><tr class="text-success"><th>NOMBRES</th><th>CANTIDAD PROD</th><th>PRECIO CANCELADO</th></tr>';


			$.each(obj,function(i,items){
				html+='<tr><td>' + items.nombres+ '</td><td>' + items.cantidad+ '</td><td>' + items.saldo+ '</td></td>';
			});

			html+='</table>';



			$('#datos').html(html);


	}

	});
//[{"prep":"6604000","preb":"3020700","pret":"9624700"}]

$.ajax({


	url:baseurl+'Cresumenprocesos/saldoalmacen',
	type:'POST',
	data:{idperiodo:idperiodo},
	
	success:function(data){
		//alert(data);

		var obj=JSON.parse(data);

		html='';
			html+='<table class="table table-condensed table-bordered table-striped"><tr class="text-success"><th>SALDO CONFECCION</th><th>SALDO BORDADO</th><th>SALDO TOTAL</th></tr>';


			$.each(obj,function(i,items){
				html+='<tr><td>' + items.prep+ '</td><td>' + items.preb+ '</td><td>' + items.pret+ '</td></td>';
			});

			html+='</table>';



			$('#saldoalmacen').html(html);


	}

	});



