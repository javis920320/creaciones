<?php 

/*
*Autor:Javier lopez
* descripcion:Contiene todos los procedimientos que  corresponden a la parte  de cortes  en  tallr
*/
class Ccortes extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mcortes');
	}


public  function index(){


	$nombres['nombres']=$this->session->userdata('nombres');



	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	$this->load->view('vcortes');
	$this->load->view('layou/footer',$nombres);
}




}

 ?>