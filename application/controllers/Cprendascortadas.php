<?php 

/**
* 
*/
class Cprendascortadas extends CI_Controller
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
	 	$this->load->view('vlistaconfeccion');
	 	$this->load->view('layou/footer');




	
	}


	 public function listacortes(){

	 $res=$this->Mpedidos->listacortes();
	  echo json_encode($res);


	 }


}

 ?>