<?php 


class Loginuser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');

	}

public function index(){
	$this->load->view('login');
}

	public  function logueo(){

		$param[]= array();


		$param['user']=$this->input->post("txtUsuario");	
		$param['pass']=$this->input->post("txtPass");
	


	// cargar el modelo  de logueo

		$res=$this->mlogin->loguear($param);
		echo $res;

	
		


	}





}

 ?>