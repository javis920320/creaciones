
listaEnvios(null,null,null,null,null);


function eventClick(){
var factura=$('#busfact').val();
  var producto=$('#busproducto').val();
   var facultad=$('#busfacultad').val();
    var cantidad=$('#buscantidad').val();
     var talla=$('#bustalla').val();
      var fingreso=$('#fingreso').val();
        var fentrega=$('#fentrega').val();
        listaEnvios(factura,talla,cantidad,fingreso,fentrega);


}


function listaEnvios(factura,talla,cantidad,fingreso,fentrega){
	//alert(factura);





$('#tblproductosen').DataTable({
			'paging':true,
			'info':true,
			'filter':true,
			'stateSave':true,
			'destroy':true,

			'ajax':{

				"url":baseurl+"Cproductosen/estados",
				'data':{factura:factura,talla:talla,cantidad:cantidad,fingreso:fingreso,fentrega:fentrega},

				'type':'POST',
				dataSrc:''
			},

			'columns':[
			{data: 'factura','sClass':'dt-body-center'},
			{data: 'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},
			{data:'fentrega'},
			{data:'estado'},

			{"orderable":true,
			render:function(data,type,row){



				

					//return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" data-toggle="modal" data-target="#myModal"><i class=" fa fa-edit"></i></a
					return '<a  href="#"  class="btn btn-primary  btn-sm" style="width:80%;" title="Enviar informacion" data-toggle="modal" data-target="#enviar" onClick="selpedido(\''+row.idpedido+'\');"><i class="glyphicon glyphicon-wrench"></i><span> proceso</span></a>';
					}


					
			}


			],

			"columnDefs": [
        {
          "targets": [9], 
          "data": "estado", 
          "render": function(data, type, row) {
            
            if (data == 0) {
              return "<span class='label label-warning'>Pendiente</span>";
            }else if (data == 3) {
              return "<span class='label label-success'>En confeccion</span>";
            }else if (data == 2) {
              return "<span class='label label-danger'>En cortes</span>";
            }
              
          }
        }
         ],

 "order":[[0,"asc"]],

		});	






}


