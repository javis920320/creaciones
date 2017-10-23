<?php 

/**
* modelo refernte de los operarios de corte
*/
class Mcortes extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}






public function enviooperarios($param){

$datos= array(
		'estado'=>3

);


$this->db->where('idpedido',$param['idpedido']);

$this->db->where('estado',2);
$this->db->update('pedido',$datos);
$res=$this->db->affected_rows();
return $res;
 


}



}

 ?>