<?php 

/**
* 
*/
class Mpedidos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}



public function insertpedido($param){


		


	 		$datos= array(
	 			'idpedido'=>null,
	 			 'factura'=>$param ['factura'],
	 			 'facultad'=>$param ['facultad'],
	 			 'cantidad'=>$param ['cantidad'],
	 			 'talla'=>$param ['talla'],
	 			 'descripcion'=>$param ['descripcion'],
	 			 'fecha_ingreso'=>$param ['fecha_ingreso'],
	 			 'idcliente'=>$param ['idcliente'],
	 			  'idtipoprod'=>$param ['idtipoprod']

	 					);


	$this->db->insert('pedido',$datos);

	return 1;
}

}
 ?>