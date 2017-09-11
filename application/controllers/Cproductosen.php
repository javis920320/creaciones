<?php 


class Cproductosen extends CI_COntroller
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
	 	$this->load->view('viewenvios');


	 	$this->load->view('layou/footer',$nombres);
	}


	 public function lista(){

	 	$param['datos']=$this->input->post('dato');
	 	$param['estado']=2;

	 	$res=$this->mpedidos->lista($param);

	 	echo json_encode($res);
	 }





}


 ?>