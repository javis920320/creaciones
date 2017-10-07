<?php 


class Clista extends CI_Controller
{
	
	function __construct()
	{
			parent::__construct();
			
			$this->load->model('Mlista');
			

	}

	public function index(){


	 	$nombres['nombres']=$this->session->userdata('nombres');
		//$this->load->view('layou/header',$nombres);

		$this->load->view('vlista');
		//$this->load->view('layou/footer');
	}


	public function lista(){

		$param['fecha']=$this->input->post('fecha');
		$param['estado']=2;
		$resp=$this->Mlista->buscar($param);

		echo json_encode($resp);



	}






}



 ?>