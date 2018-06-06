<html>
<head>
	<title></title>
</head>
<body>
<div class="box">
	
<span>SEGUIMIENTO PROCESO DE CONFECCION</span>

<ul class="nav nav-tabs">
  <li role="presentation" class="active" id='p1'><a href="#" id='pi'>Procesos incompletos</a></li>
  <li role="presentation"id='p2' ><a href="#"id='pii'>Productos inactivos</a></li>

  
 

</ul>



select pr.idpedido AS idpedido ,count(pr.idpedido), count(pr.idpedido),pe.factura AS factura,sum(pr.cantidad) AS procesado,pe.cantidad AS cantidad,pe.descripcion AS descripcion
from proceso pr
inner join pedido pe on pe.idpedido = pr.idpedido
group by pr.idpedido
<strong>ESTUDIANTE BENEFICIARIO DE CRÉDITO ICETEX</strong>

 <br>

Tenga en cuentas las siguientes fechas de RENOVACIÓN DEL CRÉDITO para el segundo semestre de 2018
<table border="2">
	<td style="width:300px;height: 30px;">
Actualización de datos (estudiante) PAGINA DE ICETEX y Renovación (Universidad Mariana – OFICINA DE MATRICULAS</td><td style="width: 300px;height: 30px;">Con matricula Ordinaria: del 30 de mayo  al  18 de julio de 2018

Con matricula Extraordinaria: del 19 de julio al 26 de julio de 2018</td>
</table>

<br>

<strong>IMPORTANTE: SI NO EFECTÚA LA ACTUALIZACIÓN Y RENOVACIÓN DENTRO DEL CALENDARIO ESTABLECIDO, ICETEX NO EFECTUARA EL DESEMBOLSO. </strong>


</div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
  
</script>
</body>
</html>