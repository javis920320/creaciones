<?php 

/**
* 
*/
class Cajax extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('majax');

	}


	public  function buscarcliente(){

		$cc['identificacion']=$this->input->post("txtcedulabus");

		//$res=$this->buscarcliente($cc);
		echo $cc['identificacion'];



                  
	}
}

 ?>