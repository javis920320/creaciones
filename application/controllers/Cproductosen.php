<?php 


class Cproductosen extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();


	}


	public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('viewenvios');


	 	$this->load->view('layou/footer',$nombres);
	}
}


 ?>