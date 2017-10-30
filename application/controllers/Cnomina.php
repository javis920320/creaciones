<?php 



class Cnomina extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->Model('');
	}



	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vnomina');


	 	$this->load->view('layou/footer',$nombres);
	}


	public  function listatrabajadores(){

		echo'ola';
	}
}

 ?>