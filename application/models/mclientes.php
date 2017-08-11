<?php 
/**
* 
*/
class Mclientes extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}




	public function getclientes($param){


		$this->db->select('p.idepersona,p.nombre,p.apellidos,p.genero,p.fecha_nac');
		$this->db->from('persona p');
		$this->db->join('cliente c','c.persona_p.idepersona=p.idepersona');
		$resul=$this->db->get();
		return $resul->result();




	}
}
 ?>