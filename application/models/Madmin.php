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

	/*$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1');
	$this->db->from('proceso pr');
	$this->db->join('producto p','p.id_prod=pr.id_prod');
	$this->db->join('join pedido pd', 'pd.idpedido=pr.idpedido');
	$this->db->where('pr.idtrabajador',$param['idtrabajador']);*/

	 $query=$this->db->query("select pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1 
	 					from proceso pr inner join producto p on p.id_prod=pr.id_prod inner join pedido pd on pd.idpedido=pr.idpedido
						where pr.idtrabajador=".$param['idtrabajador']." and pr.fecha  between ".$param['fechaini']." and ".$param['fechafin']."
	 					");

	return $query->result();






}



}


 ?>