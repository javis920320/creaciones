<?php 

/**
* 
*/
class Mproductos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function ingresarprd($arreglo){

		/*
			 $arreglo['nomprod']=$this->input->post('nomprod');
		 	$arreglo['estado']=$this->input->post('estado');
		 	$arreglo['idtipoprod']=$this->input->post('idtipoprod');
		*/

		$datos = array(
			'id_prod'=> null,
			'nomprod' =>  $arreglo['$arreglo'],
			'estado' => 1,
			'idtipoprod'=> $arreglo['$idtipoprod']
			);


		if($this->db->insert('producto',$datos)){
		return  true;	
	}else{
		return false; 
		}




	}



}

 ?>