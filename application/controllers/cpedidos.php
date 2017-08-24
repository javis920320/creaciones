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
	 		$param ['fecha_ingreso']=$this->input->post('fecha');
	 		$param ['idcliente']=$this->input->post('idpersona');
	 		$param ['idtipoprod']=$this->input->post('seltp');

	

	 	$resp=$this->mpedidos->insertpedido($param);
	 	echo "Pedido registrado correctamente";




	 }


}


 ?>