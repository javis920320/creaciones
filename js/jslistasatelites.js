lstsatelites();

function lstsatelites(){


	$.ajax({
		url:baseurl+'Csatelite/listasatelites',
		type:'POST',
		success:function(data){
			var obj=JSON.parse(data);

			// console.log(obj[0].nombres);


			//html='<select id="tpprod" name="tpprod" class=" pr form-control">';
			html='';
			html+='<option value="">Seleccione una opcion</option>';


			$.each(obj,function(i,items){
				html+='<option value="'+items.idtrabajador+'"">' + items.nombres+ '</option>';
			});



			//html+='</select>';
			$("#trabajador").html(html);

		}

	});
}
