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


		$param['cantidad']=$this->input->post('cantidad');
	 	$param['idprod']=$this->input->post('productos');
	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['idpersona']=$this->input->post('trabajador');

	 	$param['idtrabajador']=$this->Madmin->idtrabajador($param);
	 	//echo $param['idtrabajador'];
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

public function SaldoPendiente(){
	
	$param['idpersona']=$this->input->post('persona');
	
		$param['idtrabajador']=$this->Madmin->idtrabajador($param);
		
		$res=$this->Madmin->SaldoPendiente($param);
		echo json_encode($res);
		
		
	
}

public  function pruebaf(){
	
	$param['idprod']=66;
	
	$presate['que']=$this->Madmin->preciosatelite($param);
	echo $presate['que'];
	
	
}



}






 ?>