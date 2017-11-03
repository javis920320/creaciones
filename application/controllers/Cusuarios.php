<?php

class Cusuarios extends CI_Controller 
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
	 	$this->load->view('vusuarios');
	 	$this->load->view('layou/footer',$nombres);




	 }


	 public  function usuarios(){


	 	$res=$this->Madmin->usuarios();

	 	echo json_encode($res);


	 }














}





?>