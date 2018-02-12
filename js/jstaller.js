selpedido = function(idpedido){
	$('#producto').val(idpedido);
	

  
};




$('#envconfeccion').submit(function(){
//alert('enviando');
	
$.ajax({


	url:baseurl+'Cproductosen/enviarconfeccion',


	type:'POST',
	data:$(this).serialize(),
	success:function(data){
		alert(data);
		
		

	}
	});
});




	function crearfichas(){
		
		
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

selecciones = JSON.stringify(selecciones);
window.open(baseurl+'Cpdfreport/imp?selecciones='+selecciones);



}