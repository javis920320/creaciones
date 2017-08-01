<?php 

/**
* 
*/
class Loginuser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');

	}



	public  function logueo(){
		$user=$this->input->post('txtUsuario');

		echo "hola"+$user;


	}





}

 ?>