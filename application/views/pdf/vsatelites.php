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
                  <div>Reporte Mensual de Actividades SATELITES</div>
              </td>
          </tr>
      </table>
  </header>
  <footer>
      <!--<div id="footer_texto">Aquí habrá algo relevante para el footer del documento, tiene border top 3px, fontsize de 9px y texto centrado</div>-->
  </footer>
  <table border="0.01" id="table_info" class='tablaprueba'>
       <thead>
           <tr>
               <th>COD</th>
               <th>PRODUCTO</th>
               <th>FACTURA</th>
			   <th>TALLA</th>
			   <th>CANTIDAD</th>
			   <th>PRECIO</th>
			   <th>V BORDADO</th>
			   <th>FECHA</th>
			   <th>DESCRIPCION</th>
			   <th>SATELITE</th>
            
           </tr>
       </thead>
       <tbody>
          <?php foreach ($string as $usuario) { ?>
            <tr>
			<!--select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres-->
                <td><?php echo $usuario->idproceso;?></td>
				<td><?php echo $usuario->nomprod;?></td>
				<td><?php echo $usuario->factura;?></td>
                <td><?php echo $usuario->talla;?></td>
                <td><?php echo $usuario->cantidad;?></td>
				 <td><?php echo '$' .$usuario->precio1;?></td>
				  <td><?php echo '$' .$usuario->prebordado;?></td>
                <td><?php echo $usuario->fecha;?></td>
				 <td><?php echo $usuario->descripcion;?></td>
                <td><?php echo $usuario->nombres;?></td>
              
            </tr>
          <?php  }?>
       </tbody>
   </table>
   
   
   
     <table border="0.01" id="table_info">
       <thead>
           <tr>
               
               <th>V CONFECCION</th>
               <th>V BORDADOS</th>
			   
            
           </tr>
       </thead>
       <tbody>
          <?php foreach ($saldos as $saldo) { ?>
            <tr>
			<!--select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres-->
                <td><?php echo $saldo->pre;?></td>
				<td><?php echo $saldo->preb;?></td>
				
              
            </tr>
          <?php  }?>
       </tbody>
   </table>
   <br><br><br>

  </body>
</html>