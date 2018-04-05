<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="./assets/css/style.css">-->
<link rel="stylesheet" type="text/css" href="./assets/css/imprimir.css">
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
 
  <?php foreach ($string as $item){?>
   <div class="l">
              <p class="ll"  ><?php echo$item->factura.'|<br>'.'|<br>'.$item->descripcion.'|<br>'.$item->descripcion.'|<br>'.$item->facultad .'|'.$item->talla .'|'.$item->fecha_ingreso.'|'.$item->fentrega;?></p>
        
        </div>
         <?php } ?>
 
  <!--<table border="0.01" id="table_info">
       <thead>
           <tr>
               <th>COD</th>
               <th>FACTURA</th>
               <th>FACULTAD</th>
            
           </tr>
       </thead>
       <tbody>
	   
	   <!----$.each(obj,function(i,item){
 			html+='<div id="l" class="l">'+item.factura+'|'+item.nomtipoprod+'|<br>'+item.descripcion+'<br>|CANT('+item.cantidad+')|'+item.facultad+'|<br>TALLa('+item.talla+')|'+item.nombres+'|<br><strong>'+item.fecha_ingreso+'</strong><strong>Fecha Entrega:'+item.fentrega+'</strong></div>';
 			

 		});-->

	
		
         
       </tbody>
   </table>
  <!-- <br><br><br>-->

  </body>
</html>