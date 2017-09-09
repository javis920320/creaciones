<?php 


class Ctrabajos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('mtrabajos');
	}



	public function index()
	{


		$nombres['nombres']=$this->session->userdata('nombres');
		$idpersona['idpersona']=$this->session->userdata('id');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vtrabajos',$idpersona);
		$this->load->view('layou/footer');


	}


	public function buscarpedido(){


		 $dato['fac']=$this->input->post('fac');

		 $res=$this->mtrabajos->buscarpedido($dato);

		 echo json_encode($res);

		 
	}




	public function insertrabajo(){
		//$this->input->post('');


		$datos = array(


			'cantidad' => $this->input->post('cantidad'),
			//nesecitamos el valor del producto  y el subvalor
			//	'valor' => $this->input->post('valor'),
			'idpedido' => $this->input->post('idpedido'),
			'idtrabajador' => $this->input->post('idtrabajador'),


			 );

		if($this->mtrabajos->insertrabajo()){

			echo 'Pedido registrado correctamente';
		}


	}

}



 ?>