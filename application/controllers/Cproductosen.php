<?php 


class Cproductosen extends CI_COntroller
{
	
	function __construct()
	{
		parent::__construct();
				$this->load->model('Mpedidos');


	}

/*
autor:´javier lopez
*/
	public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('prueba');


	 	$this->load->view('layou/footer',$nombres);
	}
	
	
	


	 public function lista(){

	 	$param['factura']=$this->input->post('factura');
	 	$param['estado']=2;
		//$param['estado2']=3;

	 	$res=$this->Mpedidos->lista($param);

	 	echo json_encode($res);
	 }


	  public  function enviarconfeccion(){

	  	$param['idpedido']=$this->input->post('producto');



	 	$param['estado']=$this->input->post('envio');
		$res=$this->Mpedidos->updatepedido($param);


	 	if($res>0){
	 		echo'Se Actualizo el estado correctamente';
	 	}else{ echo 'error al enviar pedido';}



	  }



	  public function estados(){



	  	$res=$this->Mpedidos->estados();

	  	echo json_encode($res);
	  }
	  
	  
	   public  function arreglo(){
		   

		   $data = json_decode(stripslashes($_POST['array']));

		  	$res=$this->Mpedidos->arreglo($data);

		  /* $d=count($_POST['array']);
		 
		for($i=0;$i<$_POST[])
		 $data['id'] = json_decode($_POST['array']);*/



//print_r($data);
echo $res;

//echo var_dump($data);
	 }





}


 ?>