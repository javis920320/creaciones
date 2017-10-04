<?php 


class Coperario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Moperario');
	}


	public  function index(){


	$nombres['nombres']=$this->session->userdata('nombres');

	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	$this->load->view('voperario');

	$this->load->view('layou/footer',$nombres);

	}




}

 ?>