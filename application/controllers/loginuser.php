<?php 


class Loginuser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Mlogin');

	
	}

public function index(){


	$msn['msn']=" ";
	$this->load->view('login',$msn);
}

	public  function logueo(){

		$param[]= array();


		$param['user']=$this->input->post("txtUsuario");	
		$param['pass']=$this->input->post("txtPass");
	


	// cargar el modelo  de logueo

		$res=$this->Mlogin->loguear($param);
		if ($res==1){

			$datos=$this->session->userdata('tipo');
			$nombres['nombres']=$this->session->userdata('nombres');
			$idpersona['idpersona']=$this->session->userdata('idpersona');
			
		switch ($datos) {
				case 0:
				        /*$this->load->view('layou/header');
						$this->load->view('layou/menu',$nombres);
						$this->load->view('vendedor/vivendedor',$nombres);		
						$this->load->view('layou/footer');*/
					//echo'Usuario Ventas';
						redirect('Cpedidos');
					break;

					case 1:
					
						$this->load->view('layou/header',$nombres);
						$this->load->view('layou/menu',$nombres);
						$this->load->view('vendedor/viewadmin');		
						$this->load->view('layou/footer');
						break;
				
				default:
					echo'Tipo User no identity';
					break;
			}
			



		}else{
			$data['msn']='Usuario incorrecto o no Activo';
			$this->load->view('login',$data);

		}
	

	
		


	}


public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}





}

 ?>