<html>
<head>
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  </head>
<body>

	
  <header>
      <table>
          <tr>
              <td id="header_logo">
                  <img id="logo" src="./assets/img/and.jpg" width="90" height="50">
              </td>
              <td id="header_texto">
                  <div><strong>CREACIONES GORETTI</strong></div>
                  <div>Reporte Mensual de Actividades</div>
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <!--<div id="footer_texto">Aquí habrá algo relevante para el footer del documento, tiene border top 3px, fontsize de 9px y texto centrado</div>-->
  </footer>
  <!--<table border="0.01" id="table_info">
       <thead>
           <tr>
               <th>COD</th>
               <th>FACTURA</th>
               <th>FACULTAD</th>
            
           </tr>
       </thead>
       <tbody>-->
	   
	   <!----$.each(obj,function(i,item){
 			html+='<div id="l" class="l">'+item.factura+'|'+item.nomtipoprod+'|<br>'+item.descripcion+'<br>|CANT('+item.cantidad+')|'+item.facultad+'|<br>TALLa('+item.talla+')|'+item.nombres+'|<br><strong>'+item.fecha_ingreso+'</strong><strong>Fecha Entrega:'+item.fentrega+'</strong></div>';
 			

 		});-->
         <?php foreach ($string as $item){?>
              <div id="l" border='2'><?php echo $item->factura.'|<br>'.$item->descripcion.'|<br>'.$item->facultad .'|'.$item->talla .'|'.$item->fecha_ingreso.'|'.$item->fentrega;?></div>
        
        
         <?php } ?>
       <!--</tbody>-->
   <!--</table>-->
   <br><br><br>

  </body>
</html>