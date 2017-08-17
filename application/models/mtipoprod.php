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

		$this->db->insert('tipo_prod',$param);

	}
}

 ?>