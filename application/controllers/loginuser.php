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
		if ($res==1){

			$datos=$this->session->userdata('tipouser');
			
		switch ($datos) {
				case 0:
					echo'Usuario Ventas';
					break;

					case 1:
						$this->load->view('welcome_message');
						break;
				
				default:
					echo'Tipo User no identity';
					break;
			}
			



		}else{
			echo "Usuario no existe o esta inactivo";

		}
	

	
		


	}





}

 ?>