<html>
<head>
	<title></title>
</head>
<body>
<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header box-primary">

            	<span class='text text-success'><strong>CALCULO DE NOMINA</strong></span>


            	
            </div>
            <div class="box-body">

            	<fieldset class="scheduler-border">
    			<legend class="scheduler-border"><span class="text text-primary"> <strong>   CREACIONES GORETTI</strong> </span></legend>
    			<div class='row'>
    				<div class="col-xs-4 col-md-4">	
    				<div class='form-group'>
    					<label for='finicio'>Fecha Inicio</label><span class="f  hide">Las fechas son requridas</span>
    					<input type='date' id='finicio' class='form-control'>
    				</div>
    				</div>
    				<div class="col-xs-4 col-md-4">	
    				<div class='form-group'>
    					<label id='ffin'>Fecha Fin</label><span class="f  hide">Las fechas son requridas</span>
    					<input type='date' id='ffin' class='form-control'>
    				</div>

				
    			</div>
				<div class="col-xs-8 col-md-8">	
				<select id='tr' class='form-control' required></select>
				</div>
    				
    			</div>
				<br><br>

				<button class='btn btn-danger' id='calcular' onclick="calcular();">Calcular</button>
				</fieldset>


                <fieldset>
                <legend>Resultados:</legend>
                   <span>  N° productos: <strong id='c'>   </strong> </span>  
                    <span> Cobro       : <strong id='p'>   </strong> </span> 
                </fieldset>


            </div>
           </div>	
 </div>          

</div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>
</body>
</html>