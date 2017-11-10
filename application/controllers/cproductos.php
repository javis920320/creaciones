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


	public function removerbordado(){



		$param['idbordados']=$this->input->post('idbordados');
		$param['id_prod']=$this->input->post('id_prod');
		 if($param['idbordados']==1){
		 	echo'ESTE REGISTRO NO SE PUEDE BORRAR';
		 }else{

		 	$res=$this->Mproductos->removerbordado($param);
		if($res==1){
			echo 'Bordado Removido';
		}else{
			echo 'Ocurrio un error';
		}

		 }

		

	}
	
	public  function lstbordados(){
		$res=$this->Mproductos->lstbordados();
		
		echo json_encode($res);
	}
	
	public  function asignarbordado(){
		
		$param['id_prod']=$this->input->post('id_prod');
		$param['idbordados']=$this->input->post('idbordado');
		$param['cantidad']=$this->input->post('cantbord');
		$res=$this->Mproductos->asignarbordado($param);
		if($res==1){
			echo 'Bordado Asignado';
		}else{
			echo 'Ocurrio un error';
		}
		
	}


	 public  function listabordados(){

	 	$param['id_prod']=$this->input->post('id_prod');


	 	$res=$this->Mproductos->listabordados($param);
	 	 echo json_encode($res);

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


	 public  function editarproducto(){
	 	if($this->input->post('estado')==1){

	 		$param['id_prod']=$this->input->post('idproductoedit');
	 		$param['nomprod']=$this->input->post('nomprodedit');
	 		$param['valor']=$this->input->post('valoredit');
	 		$param['subvalor']=$this->input->post('subvaloredit');
	 		$param ['fecha']=$hoy = date("Y/m/d");

	 		/*

	 		1.enviar modificar datos producto
	 		2.desactivar precio
	 		3.agregar  nuevo precio


	 		*/
	 		//echo $param['valor'];

	 		$res=$this->Mproductos->editarproductos($param);
	 		if($res>=1){
	 			$resp=$this->Mproductos->descativarprecio($param);

	 			if($resp>=1){

				$resp=$this->Mproductos->asignarprecio($param);
				if($resp>=1){
					echo "Se a actualizado correctamente";

				}else{
					echo "No se pudo realizar la actualizacion en asignacion precio";
				}

	 			}else{
	 					echo "No se pudo realizar la actualizacion en precio";
	 			}
	 			

	 		}else{
	 			echo "No se pudo realizar la actualizacion en productos";
	 		}




	 	}else{

	 		$param['id_prod']=$this->input->post('idproductoedit');
	 		$param['nomprod']=$this->input->post('nomprodedit');

	 		$res=$this->Mproductos->editarproductos($param);
	 		if($res>=1){
	 			echo "Se a actualizado correctamente";

	 		}else{
	 			echo "No se pudo realizar la actualizacion";
	 		}

	 	}



	 }
}


 ?>