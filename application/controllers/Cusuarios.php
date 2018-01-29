<?php

class Cusuarios extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('Madmin');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vusuarios');
	 	$this->load->view('layou/footer',$nombres);




	 }


	 public  function usuarios(){


	 	$res=$this->Madmin->usuarios();

	 	echo json_encode($res);


	 }






public  function inser_user(){


$param['cedula']=$this->input->post('cedula');
$param['nombres']=$this->input->post('nombres');
$param['telefono']=$this->input->post('telefono');

$param['name']=$this->input->post('name');
$param['pass']=$this->input->post('pass');
$param['tipo']=$this->input->post('tipo');
$param['idpersona']=$this->Madmin->insertpersona($param);
$this->Madmin->creartrabajador($param);
$res=$this->Madmin->insertuser($param);
if($res>0){

	echo'Usuario Registrado Correctamente';

}else{
	echo'Ha ocurrido un Error';
}


}

public function editarpersona(){

		$param['idpersona']=$this->input->post('eidpersona');
		$param['cedula']=$this->input->post('ecedula');
		$param['nombres']=$this->input->post('enombres');
		$param['telefono']=$this->input->post('etelefono');

		$res=$this->Madmin->editarusuario($param);
		if($res>0){

	echo'Datos Modificados';

}else{
	echo'Ha ocurrido un Error';
}



}


public  function eliminaruser(){

	$param['idpersona']=$this->input->post('eliminarc');
	$res=$this->Madmin->eliminaruser($param);

	if($res>=1){

		echo 'Usuario Eliminado';

	}else{
		echo'No se a podido eliminar este usuario';
	}
}


}





?>