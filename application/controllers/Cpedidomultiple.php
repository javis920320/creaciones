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




	public  function cantidadpedidos(){

		$res=$this->Mpedidos->cantidadpedidos();
		echo json_encode($res);


	}

	 public  function lstpedidosdia(){


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

 	$dato['identidad']=$this->input->post('identidad');
 	$dato['nombredep']=$this->input->post('nombredep');


 	$resp=$this->Mpedidos->nwdependencia($dato);
 	if($resp>0){
			echo "nueva dependencia creada con exito";

		}else{
			echo "Tarea no realizada";
		}

 }

	public  function nuevaentidad(){

		$dato['nomentidad']=$this->input->post('nomentidad');
		$dato['tipo']=$this->input->post('tipo');
		$resp=$this->Mpedidos->nuevaentidad($dato);
		if($resp>0){
			echo "Entidad creada con exito";

		}else{
			echo "Tarea no realizada";
		}

		


	}


	public  function pedidonuevo(){



		/*fac:fac,entidad:entidad,dependencia:dependencia,facultad:facultad,fentrega:fentrega,codtipoprod:nomtipoprod,talla:talla,cantidad:cantidad,descripcion:descripcion,idPersona:idPersona*/


		$data['cc']=$this->input->post('idPersona');

		$data['idpersona']=$this->Mpedidos->idPersona($data);
		if($data['idpersona']==''){

			echo -1;

		}else{


		
		$data['factura']=$this->input->post('fac');
		
		$data['entidad']=$this->input->post('entidad');
		$data['dependencia']=$this->input->post('dependencia');
		$data['facultad']=$this->input->post('facultad');
		$data['fentrega']=$this->input->post('fentrega');
		$data['codtipoprod']=$this->input->post('codtipoprod');
		$data['talla']=$this->input->post('talla');
		$data['cantidad']=$this->input->post('cantidad');
		$data['descripcion']=$this->input->post('descripcion');
		$data['fecha_ingreso']=$hoy= date("Y/m/d");
		

		

		$data['idpedido']=$this->Mpedidos->guardar($data);
		//echo $data['idpedido'];


		$res=$this->Mpedidos->pedi_entidad($data);
		//echo $res;
		if ($res>=1) {
			echo 1;
			# code...
		}else{
			echo 0;
		}


		}

	}
}



 ?>