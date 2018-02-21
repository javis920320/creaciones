<?php 

class Clistasatel extends CI_Controller
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
	 	$this->load->view('vlistasatelites');
	 	$this->load->view('layou/footer',$nombres);




	 }
	 
	 
	 public function lstgeneral(){
		 
		$param['idpersona']=$this->input->post('persona');
		
		if($param['idpersona']==null){
			
			
			
		}else{
			$param['idtrabajador']=$this->Madmin->idtrabajador($param);
			
			
		}
		
		 
		 
		 
	 }
}













 ?>