<?php 
/**
* 
*/
class Mtipoprod extends CI_Model
{
	
	function __construct()
	{
		# code...

		parent::__construct();

	}


	public function inertartprod($param){

		$this->db->insert('tipo_producto',$param);
		return$this->db->affected_rows();

	}


	public function gettipoprod($s){
		$s = $this->db->get_where('tipo_producto',array('estado' => $s));
		return $s->result();
	}
	
	
	public function listatpoprod(){
		$s = $this->db->get_where('tipo_producto',array('estado' => 1));
		return $s->result();
	}

}


 ?>