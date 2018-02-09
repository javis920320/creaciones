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

	 	$param['fechai']=$this->input->post('fechai');
	 	$param['fechaf']=$this->input->post('fechaf');
	 	$param['idtrabajador']=$this->input->post('idtrabajador');

	 	$res=$this->Madmin->calcular($param);
	 	echo json_encode($res);





	 }
	 
	 
	  public function vistaconsutaldo(){
		  
		  $this->input->post('d');
		  
		  $res=$this->Madmin->vistaconsutaldo();
		  echo json_encode($res);
		  
		  
		  
	  }
}

 ?>