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
			$tipo['tipo']=$this->session->userdata('tipo');

 						

						if ($tipo['tipo']==3) {
							$this->load->view('layou/header',$nombres);
							$this->load->view('layou/menu',$nombres);

							
							$this->load->view('prueba');
							$this->load->view('layou/footer');
							
							# code...
						} else {
							$this->load->view('layou/header',$nombres);
							$this->load->view('layou/menu',$nombres);
							$this->load->view('viewenvios',$nombres);
							$this->load->view('layou/footer');
							
						}
						
								
						
						

 	}
 public function imp(){

 	$datos['datos']=$this->input->get('selecciones');
 	echo print_r($datos);

 	

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


 	 public function Eliminarpedido(){

 	 	$datos['idpedido']=$this->input->post('idpedido');


 	 	$res=$this->Mpedidos->EliminaPedido($datos);
 	 	if($res>=1){
 	 		echo"Pedido Eliminado";

 	 	}else{

 	 		echo"No se ha eliminado";

 	 	}


 	 }

 	   public function cambioAsignacionProceso()
 	 {



 	 	$datos['idproceso']=$this->input->post('idproceso');
 	 	$datos['idtrabajador']=$this->input->post('idtrabajador');

 	 	$res=$this->Mpedidos->cambioAsignacionProceso($datos);

 	 	if($res>=1){
 	 		echo 1;

 	 	}else{

 	 		echo 0 ;

 	 	}

 	 }
 	 


 } 

 ?>