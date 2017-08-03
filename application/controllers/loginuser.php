<?php 


class Loginuser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');

	}

public function index(){


	$data['msn']="";
	$this->load->view('login',$data);
}

	public  function logueo(){

		$param[]= array();


		$param['user']=$this->input->post("txtUsuario");	
		$param['pass']=$this->input->post("txtPass");
	


	// cargar el modelo  de logueo

		$res=$this->mlogin->loguear($param);
<<<<<<< HEAD
		echo $this->session->userdata('session_id');
=======
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
			$data['msn']='Usuario incorrecto o no Activo';
			$this->load->view('login',$data);

		}
	
>>>>>>> 185f8d0f33714c7834defdae6f21ec0ec320aed3

	
		


	}





}

 ?>