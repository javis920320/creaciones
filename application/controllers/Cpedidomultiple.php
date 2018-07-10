<?php 


class Cpedidomultiple extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mpedidos');
	}





	public  function index(){


		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vpedidomultiple');
		$this->load->view('layou/footer');
	}




	public  function realizarpedidos(){

		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('v2pedidos');
		$this->load->view('layou/footer');

	}


	public  function tipoentidad(){

	$tipoentidad='U';//$this->input->post('tipoentidad');


	$res=$this->Mpedidos->tipoentidad($tipoentidad);
	echo json_encode($res);




	}
}



 ?>