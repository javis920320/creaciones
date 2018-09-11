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
	$idpersona['idpersona']=$this->session->userdata('idpersona');

	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	
	$this->load->view('voperario',$idpersona);
	
	
	

	$this->load->view('layou/footer',$nombres);

	}


	public function FunctionName()
	{
		


		
	}





	public function listaproceso(){

		$param['idpersona']=$this->input->post('idpersona');




	}

 public function ingresarproceso(){


	 		$param['idpedido']=$this->input->post('idpedido');
			$param['cantidad']=$this->input->post('cantidad');


			
			
			$comp=$this->Moperario->calculo($param);

			 if($comp== null){
		 	$comp=$this->Moperario->pedidoscant($param);
		 	$disp=$comp;
		

		}else{

			$disp=$comp;

		}


			
			
		if($disp<$param['cantidad']){
				return 0;
				
			}else{
				
		
	 	$param['idprod']=$this->input->post('productos');
	 	//$param['idpedido']=$this->input->post('idpedido');
	 	$param['idpersona']=$this->input->post('trabajador');
	 	//echo $param['idpedido'];
	 	//echo $param['idtrabajador'];
	 	$preciob=$this->Moperario->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$param['idtrabajador']=$this->Moperario->trabajadorid($param);
	    $param['idtrabajador'];



$res=$this->Moperario->ingresarproceso($param);

	 	 if ($res>=1){
	 	 	$o=$this->Moperario->seguimiento($param);
	 	 	echo 'Registro reportado';

	 	 }else{

	 	 	echo 'Error en proceso';

	 	 }
				
				
			}	
			
				
			
		
		
// fin de este ciclo



	 }




}

 ?>