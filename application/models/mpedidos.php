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

public function updatepedido($param){

	$datos = array(
		
		
		'estado' => $param['estado']


		 );

	$this->db->where('idpedido',$param['idpedido']);
	$this->db->update('pedido',$datos);


	return true;
}

public function updatepedidoid($param){

	$datos = array(
		
		
		'factura'=>$param['factura'],
		'facultad'=>$param['facultad'],
		'cantidad'=>$param['cantidad'],
		'talla'=>$param['talla'],
		'descripcion'=>$param['descripcion']



		 );

	$this->db->where('idpedido',$param['idpedido']);
	$this->db->update('pedido',$datos);


	return true;
}



public  function lista($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    $this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		//$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fecha_ingreso', 'DESC');

		$resul=$this->db->get();
		return $resul->result();
}


 public  function filtro($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    $this->db->select('p.idpedido,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fecha_ingreso', 'DESC');

		$resul=$this->db->get();
		return $resul->result();
}



 

}
 ?>