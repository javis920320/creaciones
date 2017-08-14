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


		$this->db->select('p.idpersona,p.nombres,p.apellidos,p.genero,p.fecha_nac,p.telefono');
		$this->db->from('persona p');
		$this->db->join('cliente c','c.persona_idpersona=p.idpersona');
		$resul=$this->db->get();
		return $resul->result();




	}

	 public function updatecliente($param){


	 	$this->db->where('idpersona',$param['idpersona']);
	 	$this->db->update('persona',$param);

	 }
}
 ?>