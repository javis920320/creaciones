<?php 

class Cproductos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mproductos');
	}




	public  function index(){

		$nombres['nombres']=$this->session->userdata('nombres');

		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vproductos');
		$this->load->view('layou/footer');


	}



	 public function  ingresarprd(){


	    $arreglo['nomprod']=$this->input->post('nomprod');
	 	
	 	$arreglo['idtipoprod']=$this->input->post('seltp');

	 	//$arreglo['nomprod']='prueba';
	 		//$arreglo['idtipoprod']=1;

	 	$res=$this->Mproductos->ingresarprd($arreglo);

	 	if($res){

	 		echo'Producto registrado correctamente';

	 	}


	 	


	 }



	 public function lista(){

	 	$param=$this->input->post('dato');

	 	$res=$this->Mproductos->getproductos($param);

	 	echo json_encode($res);
	 }


	  public function listaproductosf(){

	 	$param=$this->input->post('dato');

	 	$res=$this->Mproductos->filtroproductos($param);

	 	echo json_encode($res);
	 }
}


 ?>