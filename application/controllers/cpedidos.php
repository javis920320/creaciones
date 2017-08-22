<?php 
/**
* 
*/
class Cpedidos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpedidos');


	}

	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vendedor/vpedidos');


	 	$this->load->view('layou/footer',$nombres);


	 }


}


 ?>