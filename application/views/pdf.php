<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>REPORTE PROCESOS CREACIONES GORETTY</title>
    <style type="text/css">
        body {
         background-color: #fff;
         margin: 40px;
         font-family: Lucida Grande, Verdana, Sans-serif;
         font-size: 14px;
         color: #4F5155;
        }

        a {
         color: #003399;
         background-color: transparent;
         font-weight: normal;
        }

        h1 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
        }

        h2 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
         text-align: center;
        }

        table{
            text-align: center;
        }

        /* estilos para el footer y el numero de pagina */
        @page { margin: 180px 50px; }
        #header {
            position: fixed;
            left: 0px; top: -180px;
            right: 0px;
            height: 50px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }
        #footer {
            position: fixed;
            left: 0px;
            bottom: -180px;
            right: 0px;
            height: 50px;
            background-color: #444;
            color: #fff;
        }
        #footer .page:after {
            content: counter(page, upper-roman);
        }
    </style>
</head>
<body>
    <!--header para cada pagina-->
    <div id="header">
        <?php echo $title ?>
    </div>
    <!--footer para cada pagina-->
    <div id="footer">
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    </div>
    <h2> Creaciones Goretti</h2>
    <table border='2'>
        <thead>
            <tr>
                <th width="10">CODIGO</th>
                <th width="10">FACTURA</th>
                <th width="10">FACULTAD</th>
                <th width="10">TALLA</th>
                <th width="10">DESCRIPCION</th>
                <th width="10">PRODUCTO</th>
                <th width="10">CANTIDAD</th>
                <th width="10">PRECIO</th>
                <th width="10">FECHA</th>
                <th width="10">OPERARIO</th>
               <!-- <th width="50">Facultad</th>
                <th width="50">descripcion</th>
                 <th width="100">Cliente</th>-->
            </tr>
        </thead>
        <tbody>
            <?php foreach($provincias as $provincia) { ?>
            <tr>
               
                <td width="10"><?php echo $provincia->idproceso?></td><td width="10"><?php echo $provincia->factura?></td><td width="10"><?php echo $provincia->facultad?></td><td width="10"><?php echo $provincia->talla?></td><td width="10"><?php echo $provincia->descripcion?></td><td width="10"><?php echo $provincia->nomprod?></td><td width="10"><?php echo $provincia->cantidad?></td><td width="10"><?php echo $provincia->precio1?></td><td width="10"><?php echo $provincia->fecha?></td><td width="10"><?php echo $provincia->nombres?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
