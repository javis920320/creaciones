<?php 


class Coperario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Moperario');
	}


	public  function index(){


	$nombres['nombres']=$this->session->userdata('nombres');

	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	$this->load->view('voperario');

	$this->load->view('layou/footer',$nombres);

	}





	public function listaproceso(){

		$param['idpersona']=$this->input->post('idpersona');




	}

	 public function ingresarproceso(){

	 	$param['cantidad']=$this->input->post('cantidad');
	 	$param['idprod']=$this->input->post('idprod');
	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['idtrabajador']=$this->input->post('idtrabajador');



	 	$res=$this->Moperario->ingresarproceso($param);

	 	 if ($res>=1){
	 	 	echo 'Registro reportado';
	 	 }else{

	 	 	echo 'Error en proceso';

	 	 }




	 }




}

 ?>