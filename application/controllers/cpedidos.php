<?php 
/**
* 
*/
class Cpedidos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpedidos');


	}

	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vendedor/vpedidos');


	 	$this->load->view('layou/footer',$nombres);


	 }



	 public function insertpedido(){
	 	//obtenemos los datos del formulario


	 		
	 		//$param ['idpedido']=null;
	 		$param ['factura']=$this->input->post('factura');
	 		$param ['facultad']=$this->input->post('facultad');
	 		$param ['cantidad']=$this->input->post('cantidad');
	 		$param ['talla']=$this->input->post('talla');
	 		$param ['descripcion']=$this->input->post('descripcion');
	 		$param ['fecha_ingreso']=$hoy = date("Y/m/d");
	 		$param ['idcliente']=$this->input->post('idpersona');
	 		$param ['idtipoprod']=$this->input->post('seltp');

	

	 	$resp=$this->mpedidos->insertpedido($param);
	 	echo "Pedido registrado correctamente";
	 	//echo $hoy = date("Y/m/d");




	 }

	 public function lista(){

	 	$param['datos']=$this->input->post('dato');
	 	$param['estado']=1;

	 	$res=$this->mpedidos->lista($param);

	 	echo json_encode($res);
	 }



	 public function enviarpedido(){


	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['estado']=$this->input->post('enviar');


	 	if($this->mpedidos->updatepedido($param)){
	 		echo'Se Actualizo el estado correctamente';
	 	}




	 }


}


 ?>