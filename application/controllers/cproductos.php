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
	 	$arreglo['precio']=$this->input->post('precio');
	 	$arreglo['subprecio']=$this->input->post('subprecio');
	 	$arreglo['fecha']=$hoy = date("Y/m/d");

	 	//$arreglo['nomprod']='prueba';
	 		//$arreglo['idtipoprod']=1;

	 	$res=$this->Mproductos->ingresarprd($arreglo);

	 	if($res){
$arreglo['idprod']=$res;
	 		
	 		if($resp=$this->Mproductos->valorprenda($arreglo)){
	 			echo'Producto registrado correctamente';
	 		}else{
	 			echo'error en proceso de precios';
	 		}

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