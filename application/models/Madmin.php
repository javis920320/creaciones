<?php 

/**
* 
*/
class Madmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}





 public  function consultafiltropro($param){

	$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1');
	$this->db->from('proceso pr');
	$this->db->join('producto p','p.id_prod=pr.id_prod');
	$this->db->join('join pedido pd', 'pd.idpedido=pr.idpedido');
	$this->db->where('pr.idtrabajador',$param['idtrabajador']);






}



}


 ?>