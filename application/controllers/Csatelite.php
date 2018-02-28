<?php 
class Csatelite extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Madmin');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');
	 		$idpersona['idpersona']=$this->session->userdata('id');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vsatelite',$idpersona);
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function listasatelites(){


	

	$res=$this->Madmin->listasatelites();

	 echo json_encode($res);





}

public  function lstsatelite(){


	$param['idpersona']=$this->input->post('idpersona');
	
	$param['idtrabajador']=$this->Madmin->idtrabajador($param);

	$res=$this->Madmin->lstsatelite($param['idtrabajador']);

	 echo json_encode($res);





}




public  function asignarsatelite(){




	$param['idpedido']=$this->input->post('idpedido');
	$param['cantidad']=$this->input->post('cantidad');
	
	
	
	$comp=$this->Madmin->calculo($param);
	if($comp==null){
		$comp=$this->Madmin->consultadis($param);
		$disp=$comp;
		
	}else{
		
		$disp=$comp;
		
	}
	 //echo$disp;
	
		if($disp<$param['cantidad']){
				//return 0;
				echo'Verifica la cantidad disponible';
				
			}else{
		//echo'sise puesde';
		
	 	$param['idprod']=$this->input->post('productos');
	 	$param['idpersona']=$this->input->post('trabajador');
	 	$param['idtrabajador']=$this->Madmin->idtrabajador($param);	 	
	 	$param['fecha']=date ("Y-m-d");
	 	$preciob=$this->Madmin->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$presate=$this->Madmin->preciosatelite($param);
	 	$param['preciosatelite']=$presate*$param['cantidad'];

		$res=$this->Madmin->asignarsatelite($param);


		if ($res>=1) {

			echo'Registro Asignado';
			# code...
		}else{
			echo'No se a podido Asisgnar el producto';
		}
	 	
		}



}

public function SaldoPendiente(){
	
	$param['idpersona']=$this->input->post('persona');
	
		$param['idtrabajador']=$this->Madmin->idtrabajador($param);
		
		$res=$this->Madmin->SaldoPendiente($param);
		echo json_encode($res);
		
		
	
}

public  function pruebaf(){
	
	$param['idpedido']=747;
	
	$presate['que']=$this->Madmin->consultadis($param);
	echo json_encode ($presate['que']);
	
	
}



}






 ?>