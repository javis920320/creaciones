<?php 

/**
* 
*/
class Mlista extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function buscar($param){
		
		$dato = array(
			'estado' => $param['estado'] ,
			'fecha' => $param['fecha']
			);

		$this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->where('p.estado',$dato['estado']);
		$this->db->where('p.fecha_ingreso',$dato['fecha']);
		$this->db->order_by('fecha_ingreso', 'DESC');

		$resul=$this->db->get();
		return $resul->result();



	}





}





 ?>