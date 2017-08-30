<?php 

class Cproductos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mproductos');
	}




	public  function index(){

		$nombres['nombres']=$this->session->userdata('nombres');

		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vproductos');
		$this->load->view('layou/footer');


	}



	 public function  ingresarprd(){


	    $arreglo['nomprod']=$this->input->post('nomprod');
	 	
	 	$arreglo['idtipoprod']=$this->input->post('idtipoprod');

	 	$res=$this->mproductos->ingresarprd($arreglo);

	 	if($res){

	 		echo'Producto registrado correctamente';

	 	}


	 }
}


 ?>