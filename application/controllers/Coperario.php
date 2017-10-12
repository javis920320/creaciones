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
	$idpersona['idpersona']=$this->session->userdata('idpersona');

	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	$this->load->view('voperario',$idpersona);

	$this->load->view('layou/footer',$nombres);

	}





	public function listaproceso(){

		$param['idpersona']=$this->input->post('idpersona');




	}

	 public function ingresarproceso(){

	 	$param['cantidad']=10;//$this->input->post('cantidad');
	 	$param['idprod']=5;//$this->input->post('idprod');
	 	$param['idpedido']=34;$this->input->post('idpedido');
	 	$param['idtrabajador']=1;//$this->input->post('idtrabajador');



	 	$res=$this->Moperario->ingresarproceso($param);

	 	 if ($res>=1){
	 	 	echo 'Registro reportado';
	 	 }else{

	 	 	echo 'Error en proceso';

	 	 }




	 }




}

 ?>