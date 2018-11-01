<?php 
class Cpedidos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mpedidos');


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


	 		
	 		$param ['idpedido']=null;
	 		$param ['factura']=$this->input->post('factura');
	 		$param ['facultad']=$this->input->post('facultad');
	 		$param ['fentrega']=$this->input->post('fentrega');
	 		$param ['cantidad']=$this->input->post('cantidad');
	 		$param ['talla']=$this->input->post('talla');
	 		$param ['descripcion']=$this->input->post('descripcion');
	 		$param ['fecha_ingreso']=$hoy = date("Y/m/d");
	 		$param ['idcliente']=$this->input->post('idpersona');
	 		$param ['idtipoprod']=$this->input->post('seltp');

	

	 	$resp=$this->Mpedidos->insertpedido($param);
	 	echo "Pedido registrado correctamente";
	 	




	 }

	 public function lista(){

	 $param['factura']=$this->input->post('factura');
	  if($param['factura']==''){
	  	$param['estado']=1;
	 		


	 	$res=$this->Mpedidos->lista($param);

	 	echo json_encode($res);


	  }else{
	  	$param['estado']=1;
	 		


	 	$res=$this->Mpedidos->filtro($param);

	 	echo json_encode($res);


	  }
	 	
	 }


	 public function editar(){

	 	$param['factura']=$this->input->post('facturaedit');
	 	$param['facultad']=$this->input->post('facultadedit');
	 	$param['cantidad']=$this->input->post('editcantidad');
	 	$param['talla']=$this->input->post('tallaedit');
	 	$param['descripcion']=$this->input->post('descripcion_edit');
	 	$param['idpedido']=$this->input->post('idpersonaedit');
	 		$param['fentregae']=$this->input->post('fentregae');
	 		$param['etprod']=$this->input->post('etprod');
	 		
	 	

	 	if($this->Mpedidos->updatepedidoid($param)){
	 		echo 'Se Actulizao correctamente el pedido';
	 	}
	 	
	 	
	 	
	 }



	 public function enviarpedido(){


	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['estado']=$this->input->post('enviar');
	 	//echo $param['idpedido'];


	 	$res=$this->Mpedidos->updatepedido($param);
	 	if($res>0){
	 		echo 'Producto enviado correctamente';

	 	}else{
	 		echo 'Error al enviar pedido';
	 	}



	 }


}


 ?>