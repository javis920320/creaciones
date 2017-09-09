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
	 			  'idtipoprod'=>$param ['idtipoprod'],
	 			  'estado'=>1

	 					);


	$this->db->insert('pedido',$datos);

	return 1;
}


public  function lista($param){

	$dato = array('datos' => $param['estado'] );

	    $this->db->select('p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('estado',$dato);
		$this->db->order_by('fecha_ingreso', 'DESC');

		$resul=$this->db->get();
		return $resul->result();
}

}
 ?>