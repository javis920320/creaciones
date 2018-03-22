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
                  <div>Reporte Bordados</div>
              </td>
          </tr>
      </table>
  </header>
  <footer>
    
      <!--select pr.idprendas,pr.factura ,pr.descripcion,pr.cantidad,pr.fecha,pr.estado,bp.precio*pr.cantidad as precio-->
  </footer>
  <table border="0.01" id="table_info" class='tablaprueba'>
       <thead>
           <tr>
               <th>COD</th>
               <th>FACTURA</th>
               <th>DESCRIPCION</th>
			   <th>CANTIDAD</th>
			   <th>FECHA</th>
			   <th>PRECIO</th>
			   <th>ESTADO</th>
			   
            
           </tr>
       </thead>
       <tbody>
          <?php foreach ($usuarios as $usuario) { ?>
            <tr>
			<!--select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres-->
                <td><?php echo $usuario->idprendas;?></td>
				<td><?php echo $usuario->factura;?></td>
				<td><?php echo $usuario->descripcion;?></td>
                <td><?php echo $usuario->cantidad;?></td>
                <td><?php echo $usuario->fecha;?></td>
				 <td><?php echo '$' .$usuario->precio;?></td>
				  <td><?php echo '$' .$usuario->estado;?></td>
          
              
            </tr>
          <?php  }?>
       </tbody>
   </table>
   
   
   
     <table border="0.01" id="table_info">
       <thead>
           <tr>
               
               
               <th>V BORDADOS</th>

			   
            
           </tr>
       </thead>
       <tbody>
          <?php foreach ($saldos as $saldo) { ?>
            <tr>
			<!--select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres-->
                <td><?php echo $saldo->saldot;?></td>
                 
                
			
				
              
            </tr>
          <?php  }?>
       </tbody>
   </table>
   <br><br><br>

  </body>
</html>