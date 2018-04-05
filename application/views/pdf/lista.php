<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="./assets/css/style.css">-->
<link rel="stylesheet" type="text/css" href="./assets/css/imprimir.css">

  </head>
<body>


 
  <?php foreach ($string as $item){?>
   <div class="l">
              <p class="ll" ><?php echo$item->factura.'|<br>'.'|<br>'.$item->descripcion.'|<br>'.$item->descripcion.'|<br>'.$item->facultad .'|'.$item->talla .'|'.$item->fecha_ingreso.'|'.$item->fentrega;?></p>
        
        </div>
         <?php } ?>
		 
		 
 
  <table border="0.01" id="table_info">
       
       
	   
	   <!----$.each(obj,function(i,item){
 			html+='<div id="l" class="l">'+item.factura+'|'+item.nomtipoprod+'|<br>'+item.descripcion+'<br>|CANT('+item.cantidad+')|'+item.facultad+'|<br>TALLa('+item.talla+')|'+item.nombres+'|<br><strong>'+item.fecha_ingreso+'</strong><strong>Fecha Entrega:'+item.fentrega+'</strong></div>';
 			
</tbody>
 		});-->

	
		
         
      
   </table>
  <br><br><br>

  </body>
</html>