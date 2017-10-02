<?php 


class Cproductosen extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
				$this->load->model('Mpedidos');


	}

/*
autor:´javier lopez
*/
	public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('viewenvios');


	 	$this->load->view('layou/footer',$nombres);
	}


	 public function lista(){

	 	$param['factura']=$this->input->post('factura');
	 	$param['estado']=2;

	 	$res=$this->Mpedidos->lista($param);

	 	echo json_encode($res);
	 }





}


 ?>