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
  <table border="0.01" id="table_info">
       <thead>
           <tr>
               <th>COD</th>
               <th>FACTURA</th>
               <th>FACULTAD</th>
               <th>DESCRIPCION</th>
               <th>TALLA</th>
               <th>PRODUCTO</th>
               <th>CANTIDAD</th>
               <th>PRECONF</th>
               <th>PREBORD</th>
               <th>FECHA</th>
               <th>OPERARIO</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->idproceso;?></td>
                <td><?php echo $usuario->factura;?></td>
                <td><?php echo $usuario->facultad;?></td>
                <td><?php echo $usuario->descripcion;?></td>
                <td><?php echo $usuario->talla;?></td>
                <td><?php echo $usuario->nomprod;?></td>
                <td><?php echo $usuario->cantidad;?></td>
                <td><?php echo $usuario->precio1;?></td>
                 <td><?php echo $usuario->prebordado;?></td>
                 <td><?php echo $usuario->fecha;?></td>
                 <td><?php echo $usuario->nombres;?></td>
            </tr>
          <?php  }?>
       </tbody>
   </table>
   <br><br><br>
   <table border="0.01" id="table_info">
       <thead>
           <tr>
               <th>VALOR CONFECCION</th>
               <th>VALOR BORDADOS</th>
               <th>TOTAL</th>    
           </tr>
       </thead>
       <tbody>
          <?php foreach ($valores as $valor) { ?>
            <tr>
                <td><?php echo $valor->vc;?></td>
                <td><?php echo $valor->vb;?></td>
                <td><?php echo $valor->vt;?></td>
            </tr>
          <?php  }?>
       </tbody>
   </table>
  </body>
</html>