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

/*
autor:Javier lopez
descricion: este proceso realiza el cambio de estado el pedido

*/

 	 public function cambioestado(){


 	 	$param['idpedido']=$this->input->post('idpedido');
 	 	 $param['estado']=$this->input->post('estado');

 	 	$res= $this->Mpedidos->updatepedido($param);
 	 	if($res>=1){
 	 		echo 'Se ha enviado el producto a Confeccion';
 	 	}else{
 	 		echo'Ha ocurrido un error..';
 	 	}





 	 }


 } ?>