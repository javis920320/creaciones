<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Majax extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public  function buscarcliente($identificacion){


		$this->db->select('idpersona,apellidos,genero,fecha_nac,telefono');
		$this->db->from('persona');
		$this->db->where('idpersona=',$identificacion['identificacion']);
		$resultados= $this->db->get();

		if($resultados->num_row()>0){
			return 1;


		}else{


			return 0;
		}







	}


}


 ?>