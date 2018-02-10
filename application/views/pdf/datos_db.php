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

             <!-- <td id="header_logos">
                  <img id="logo1" src="./assets/img/and.jpg" width="10" height="10">
                  <img id="logo2" src="./assets/img/and.jpg"width="10" height="10">
              </td>-->
          </tr>
      </table>
  </header>
  <footer>
      <!--<div id="footer_texto">Aquí habrá algo relevante para el footer del documento, tiene border top 3px, fontsize de 9px y texto centrado</div>-->
  </footer>

  <table border="0.1" id="table_info">
       <thead>
           <tr>
               <th>CODIGO</th>
               <th>FACTURA</th>
               <th>FACULTAD</th>
               <th>Edad</th>
               <th>Sexo</th>
           </tr>
       </thead>
       <tbody>
          <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->idproceso;?></td>
                <td><?php echo $usuario->factura;?></td>
                <td><?php echo $usuario->descripcion;?></td>
                <td><?php echo $usuario->fecha;?></td>
                <td><?php echo $usuario->facultad;?></td>
            </tr>
          <?php  }?>
       </tbody>
   </table>

  </body>
</html>