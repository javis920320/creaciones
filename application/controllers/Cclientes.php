<?php 


class Cclientes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mclientes');
	}


	 public  function getclientes(){

	 	$param=$this->input->post('dato');

	 	$res=$this->Mclientes->getclientes($param);

	 	echo json_encode($res);


	 }

	 public  function updatecliente(){
	 	//obtener datos del cliente

	 	$param['idpersona']=1085298221;
	 	$param['apellidos']='LOPEZ LOPEZ';
	 	$param['nombres']='JAVIER ALEXANDER ';
	 	$param['genero']='M';
	 	$param['fecha_nac']='023323';
	 	$param['telefono']='1234';

	 	$param = array(
	 		'idpersona' => $param['idpersona'],
	 		'apellidos' => $param['apellidos'],
	 		'nombres' => $param['nombres'],
	 		'genero' => $param['genero'],
	 		'fecha_nac' => $param['fecha_nac'],
	 		'telefono'=> $param['telefono']

	 		 );



	 	$this->Mclientes->updatecliente($param);
	 }
}

 ?>