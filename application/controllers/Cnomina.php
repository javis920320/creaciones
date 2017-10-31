<?php 



class Cnomina extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->Model('Madmin');
	}



	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vnomina');


	 	$this->load->view('layou/footer',$nombres);
	}


	public  function listatrabajadores(){

		$resultado=$this->Madmin->listatrabajdores();


		echo json_encode($resultado);
	}



	 public  function calcular(){

	 	$param['fechai']='2017-09-12';//$this->input->post('fechai');
	 	$param['fechaf']='2017-10-29';//$this->input->post('fechaf');
	 	$param['idtrabajador']=1;//$this->input->post('idtrabajador');

	 	$res=$this->Madmin->calcular($param);
	 	echo json_encode($res);





	 }
}

 ?>