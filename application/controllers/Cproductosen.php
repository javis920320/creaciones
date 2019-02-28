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

	 
	 public function printdisponible(){

	 	$param['factura']=$this->input->post('factura');
	 	$param['estado']=2;
		//$param['estado2']=3;

	 	$res=$this->Mpedidos->printdisponible($param);

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


	  public function consultaseguimiento(){
	  	$param['estado']=3;
	  		$param['accion']=0;

	$res=$this->Mpedidos->consultaseguimiento($param);
	echo json_encode($res);

	  }



	  public function estados(){
	  	$datos['factura']=$this->input->post('factura');



 if($datos['factura']==null){

 	$res=$this->Mpedidos->estados();
 	
 	


	  	echo json_encode($res);

 	
	  

 }else{


$datos['factura']=$this->input->post('factura');
$datos['cantidad']=$this->input->post('cantidad');
$datos['talla']=$this->input->post('talla');
$datos['fingreso']=$this->input->post('fingreso');
$datos['fentrega']=$this->input->post('fentrega');


$res=$this->Mpedidos->filestados($datos);

	  	echo json_encode($res);
	  
 }
}

	  	
	  
	  
	  public  function arreglo(){
		   

		   $data = json_decode(stripslashes($_POST['array']));

		  	$res=$this->Mpedidos->arreglo($data);

		  /* $d=count($_POST['array']);
		 
		for($i=0;$i<$_POST[])
		 $data['id'] = json_decode($_POST['array']);*/



//print_r($data);
echo 'Registros Enviados ('.$res.')';

//echo var_dump($data);
	 }
	 
	 
	 
	 	  
	  public  function activarprint(){
		   

		   $data = json_decode(stripslashes($_POST['array']));

		  	$res=$this->Mpedidos->activarprint($data);

		




echo 'Permisos activados ('.$res.')';
	 }
	 
	 
	    public  function arreglo2(){
		   

		   $data = json_decode(stripslashes($_POST['array']));

		  	$res=$this->Mpedidos->arreglo2($data);

		  /* $d=count($_POST['array']);
		 
		for($i=0;$i<$_POST[])
		 $data['id'] = json_decode($_POST['array']);*/



//print_r($data);
echo 'Registros Enviados ('.$res.')';

//echo var_dump($data);
	 }





}


 ?>