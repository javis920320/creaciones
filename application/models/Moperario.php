<?php 

class Moperario extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();

	}



	 public  function ingresarproceso($param){

	 	
	 		$this->db->query("CALL PA_INGRESARPROCES(".$param['cantidad'].",".$param['idtrabajador'].",".$param['idprod'].",".$param['idpedido'].") " );

	 	$res=$this->db->affected_rows();
		return$res;




	 }



}


 ?>