<?php 


class Cbordados extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Mbordados');
	}

	public function index(){


		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vbordados');
		$this->load->view('layou/footer');



	}
}


 ?>