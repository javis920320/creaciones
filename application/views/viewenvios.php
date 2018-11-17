<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
	<meta charset="UTF-8">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
	
</head>
<body ng-controller="fisrtcontroller">
	<style type="text/css">
	.responsive-input{
  width: 100%;
}
	</style>



 
 <!-- Modal -->
 <div class="modal fade" id="editarcorte" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header bg-success">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel">EDITAR PEDIDO</h4>
       </div>
       <div class="modal-body">
	
	 	
	 	
	   <form id='form-edit'>
	   <label for='editarfac'>Factura</label>
		<input type='number' class='form-control' name='facturaedit'id='editarfac'>
		<label for='editarfacul'>Facultad</label>
		<input type='text' class='form-control' name='facultadedit'id='editarfacul'>
		<label for='editarcant'>Cantidad</label>
	
		<input type='number' class='form-control' name='editcantidad'id='editarcant'>

<label for="etprod">Tipo Producto</label>
    <br>
     <select name="etprod" id="etprod" required="" class="form-control"></select>

		<label for='editartalla'>Talla</label>
				<select name="tallaedit" id="editartalla" class="form-control ">
					<option value="0">0</option>
					<option value="2">2</option>
					<option value="4">4</option>
					<option value="6">6</option>
					<option value="8">8</option>
					<option value="10">10</option>
					<option value="12">12</option>
					<option value="14">14</option>
					<option value="16">16</option>
					<option value="S">S</option>
					<option value="XS">XS</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
					<option value="XXL">XXL</option>
					

				</select>
		<label for='editardesc'>Descripcion</label>
		<textarea class='form-control' name='descripcion_edit'id='editardesc' rows='10' cols='20'></textarea>
		<label for='editarfentrega'>Fecha entrega</label>
		<input type='date' name='fentregae'id='editarfentrega' class='form-control'>
		<input name='idpersonaedit' id='editarpedido' type='hidden'>
		<input type='submit' value='Editar' class='btn btn-default'>
		</form>
		
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
       </div>
     </div>
   </div>
 </div>
  
 

<div class="col-xs-17"> <strong align='center'>PEDIDOS CREACIONES GORETTI</strong></div>


  <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">CREACIONES</h4>
        </div>
        <div class="modal-body">
          <form>

            <label for='idpedidod'>Deseas eliminar este registro</label>
            <input type='hidden' id='idpedidod'>
            <input type='button' class='btn btn-primary' data-dismiss="modal" value='Eliminar' onclick='eliminarp();'> <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

          </form>
        </div>
        <div class="modal-footer">
         
          
        </div>
      </div>
    </div>
  </div>



  
  <!-- cambio estado en confeccion -->
  <div class="modal fade" id="enviar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Enviar a Confeccion</h4>
        </div>
        <div class="modal-body">
          <span class="text text-success">Enviar pedido a Confeccion?</span>


          <form id='envconfeccion'>
            <input type='text' id='producto' name='producto' class="hide">
            <input type='text' id='envio' name='envio' value=3 class="hide">
            <input type='submit' class="btn btn-default" value='Enviar'> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

          </form>
        </div>
        <div class="modal-footer">
          
          
        </div>
      </div>
    </div>
  </div>


<div class="col-xs-12 col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" class='text-primary'>PRODUCTOS EN PROCESO</h3><br><br>
              
<!--<button id='pdf' class='btn btn-danger' onclick='crearfichas();'><span class='glyphicon glyphicon-print'></span>  Crear Pdf</button>-->
<!--<button id='pdf' class='btn btn-primary' onclick='imprimirsel();'><span class='glyphicon glyphicon-print'></span>  Imprimir sel</button>-->

<div class="panel panel-primary">
          <div class="panel-heading"><strong>Panel Configuracion</strong></div>
          <div class="panel-body">



            <button id='lista' class='btn btn-info'><span class='glyphicon glyphicon-print'></span> Vista preliminar</button>
              <button id='btnenv' class='btn btn-primary'  onclick='generarenvio();'><span class='glyphicon glyphicon-resize-small'></span> Enviar seleccion</button>
              <button id='activarprint' class='btn btn-success'  onclick='activarprint();'><span class='glyphicon glyphicon-ok-circle'></span> Activar impresion</button>
              <button id='desa' class='btn btn-danger'  onclick='pasar();'><span class='glyphicon glyphicon-ok-circle'></span> Desactivar impresion</button>

              <label for='mtodo'>Seleccionar todo    </label><input type='checkbox' id='mtodo' name='mtodo' class='' value='true' >
            </div>
          </div>
      




            </div>
            <!-- /.box-header -->
             <?php if ($nombres=="CORTES MIL"){?>


            
             
             <!-- Modal -->
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Eliminar Pedido</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                    <label>Codigo Pedido</label>

                    <input type="number" name="" id="codpedido">
                    <button onclick="eliminaPedido();">Aceptar</button>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                   </div>
                 </div>
               </div>
             </div>


         
             <!-- Modal -->
             <div class="modal fade" id="Asignacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Cambio Asignacion </h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                   <label for="idprocc"><strong>Codigo de Proceso:</strong></label>
                   <input type="number" name="idprocc" id="idprocc" class="form-control">
                   <label for="trabajadorC">Trabajador</label>

                   <select class="form-control" id="trabajadorC">
                    <option value="">Seleccione</option>
                    <option  ng-repeat="dat in dataja" value="{{dat.idtrabajador}}">{{dat.nombres}}</option>
                     
                   </select>     
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" onclick="cambioAsinacion();">Guardar Cambios</button>
                   </div>
                 </div>
               </div>
             </div>
             
             


             <div class=" panel panel-primary">
              <div class="panel-heading">
                
              </div>
              <div class="panel-body">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Eliminar pedido
             </button>

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Asignacion">
              Cambiar Asignacion Proceso
             </button>
             

                
              </div>
               
             </div>
             <?php }?>
             
             
            <div class="box-body table-responsive no-padding">
              <table  id='tblproductosen' class="table table-hover table-responsive">
                <thead class="bg-success">
                <tr>
				 <th>Codigo</th>
                  <th>Factura</th>
                  <th>Producto</th>
                  <th>Facultad</th>
                   <th>Cantidad</th>
                   <th>Talla</th>
                   <th>Descripcion</th>
                   <th>Cliente</th>
                  <th>Fecha ingreso</th>
                  <th>Fecha Entrega</th>
                  <th>Impresion</th>
                  <th>Accion</th>
                </tr>
                </thead>
                <tbody></tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";


  angular
.module("myapp",[])
.controller("fisrtcontroller",function($scope,$http){
  console.log('success');

  $http.post('http://localhost/creaciones/Cnomina/listatrabajadores/')
  .then(function(mydata){
    console.log(mydata);
    $scope.dataja=mydata.data;
  
    $scope.addrecibido= function(i){

      

    }



  })

});




</script>
	
</body>
</html>