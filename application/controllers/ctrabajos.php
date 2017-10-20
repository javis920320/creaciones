<?php 


class Ctrabajos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mtrabajos');
	}



	public function index()
	{


		$nombres['nombres']=$this->session->userdata('nombres');
		$idpersona['idpersona']=$this->session->userdata('id');

		$tipo['tipo']=$this->session->userdata('tipo');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vtrabajos',$idpersona);
		$this->load->view('layou/footer',$tipo);


	}


	public function buscarpedido(){


		 $dato['fac']=$this->input->post('fac');

		 $res=$this->Mtrabajos->buscarpedido($dato);

		 echo json_encode($res);

		 
	}

///?tpprod=3&tblresumen_length=10&idpedido=2&productos=undefined&cantidad=15&trabajador=6


	public function insertrabajo(){
		//$this->input->post('');


		$datos = array(


			'cantidad' => $this->input->post('cantidad'),
			//nesecitamos el valor del producto  y el subvalor
			//'valor' => $this->input->post('valor'),
			'idpedido' => $this->input->post('idpedido'),
			'idtrabajador' => $this->input->post('idtrabajador'),


			 );

		if($this->Mtrabajos->insertrabajo()){

			echo 'Pedido registrado correctamente';
		}


	}



	public  function lista(){

		$param['dato']=$this->input->post('dato');
		$param['fac']=$this->input->post('fac');




		$resp=$this->Mtrabajos->filtrarpedido($param);
		echo json_encode($resp);
	}


	public  function productosdisponibles(){



		$param['idpedido']=$this->input->post('idpedido');


		//$res1=$this->Mtrabajos->procesoscant($param);
		
		$res2=$this->Mtrabajos->calculo($param);
		 if($res2== null){
		 	$res2=$this->Mtrabajos->pedidoscant($param);
		 echo $res2;	

		 }else{
		 	echo $res2;
		 }

		


	}



	public  function listaoperario(){


		$res=$this->Mtrabajos->listaprocesos();

		echo json_encode($res);

	}

}



 ?>