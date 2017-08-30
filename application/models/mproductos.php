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
			'nomprod' =>  $arreglo['nomprod'],
			'estado' => 1,
			'idtipoprod'=> $arreglo['idtipoprod']
			);


		if($this->db->insert('producto',$datos)){
		return  true;	
	}else{
		return false; 
		}




	}




public  function getproductos($param){






    $this->db->select('TP.NOMTIPOPROD,P.NOMPROD,pr.valor,pr.subvalor');
		$this->db->from('PRODUCTO  P');
		$this->db->join('TIPO_PRODUCTO TP ','TP.IDTIPOPROD=P.IDTIPOPROD');
		$this->db->join('precio pr','pr.id_prod=p.id_prod');
		//$this->db->WHERE('P.ESTADO', 'DESC');

		$resul=$this->db->get();
		return $resul->result();







}



}

 ?>