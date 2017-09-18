<?php 


/*
// Ingresamos al perfil de  Administracion de el Administrador del sistema donde encontrara  los perdidos enviados 
*/
 class Ctaller extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Mpedidos');
 	}


 	public function index(){

 	$nombres['nombres']=$this->session->userdata('nombres');
			$idpersona['idpersona']=$this->session->userdata('idpersona');

 						$this->load->view('layou/header',$nombres);
						$this->load->view('layou/menu',$nombres);
						$this->load->view('viewenvios');		
						$this->load->view('layou/footer');
						

 	}


 } ?>