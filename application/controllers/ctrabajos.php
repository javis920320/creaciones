<?php 


class Ctrabajos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mtrabajos');
	}



	public function index()
	{


		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vtrabajos');
		$this->load->view('layou/footer');


	}


	public function buscarpedido(){


		 $dato['fac']=$this->input->post('fac');

		 $res=$this->mtrabajos->buscarpedido($dato);

		 echo json_encode($res);

		 
	}

}



 ?>