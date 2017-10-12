<?php 

class Moperario extends CI_MOdel
{
	
	function __construct()
	{
	parent::__construct();

	}



	 public  function ingresarproceso($param){

	 	$this->db->query("CALL PA_INGRESARPROCES(".$param['cantidad'].",".$param['idprod'].",".$param['idpedido'].",".$param['idtrabajador'].") " );

	 	$res=$this->db->affected_rows();
		return$res;




	 }



}


 ?>