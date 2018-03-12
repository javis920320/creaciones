<?php
class Cprendas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Madmin');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('Vprendas');
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function listaprendas(){



	$res=$this->Madmin->listaprendas($param);

	 echo json_encode($res);





}



}




?>