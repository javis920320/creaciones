<?php 


class Cpedidomultiple extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mpedidos');
	}





	public  function index(){


		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vpedidomultiple');
		$this->load->view('layou/footer');
	}
	public  function tipoprod(){

		$idtipoprod=$this->input->post('id');

		$res=$this->Mpedidos->tipo_producto($idtipoprod);
		echo $res;


	}




	public  function realizarpedidos(){

		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('v2pedidos');
		$this->load->view('layou/footer');

	}


	public  function tipoentidad(){

	$tipoentidad=$this->input->post('tipoentidad');


	$res=$this->Mpedidos->tipoentidad($tipoentidad);
	echo json_encode($res);




	}



	public   function  dependencia(){



		$idpendencia=$this->input->post('dep');
		$res=$this->Mpedidos->dependencia($idpendencia);
		echo json_encode($res);
	}


 public function nwdependencia(){

 	$dato['identidad']=1;//$this->input->post('identidad');
 	$dato['nombredep']='ADMINISTRACION DE EMPRESAS';//$this->input->post('nombredep');


 	$resp=$this->Mpedidos->nwdependencia($dato);
 	if($resp>0){
			echo "nueva dependencia creada con exito";

		}else{
			echo "Tarea no realizada";
		}

 }

	public  function nuevaentidad(){

		$dato['nomentidad']="SAN MARTIN";//$this->input->post('nomentidad');
		$dato['tipo']="U";//$this->input->post('tipo');
		$resp=$this->Mpedidos->nuevaentidad($dato);
		if($resp>0){
			echo "Entidad creada con exito";

		}else{
			echo "Tarea no realizada";
		}

		


	}


	public  function nuevadependencia(){

	}
}



 ?>