<?php
class Cprendas extends CI_Controller
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
	 	$this->load->view('Vprendas');
	 	$this->load->view('layou/footer',$nombres);




	 }


public  function rsmbordados(){

	$param['id']=$this->input->post('id');

	$res=$this->Madmin->rsmbordados($param);

	echo json_encode($res);
}


	 public function cargarbordados(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vcargueb');
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function listaprendas(){



	$res=$this->Madmin->listaprendas($param);

	 echo json_encode($res);





}


public function ingresarP(){
//fac:factura,cant:cantidad,desc:descripcion




$param['fac']=$this->input->post('fac');
$param['cant']=$this->input->post('cant');
$param['desc']=$this->input->post('desc');

$res=$this->Madmin->ingresarP($param);

if($res>=1){
 echo'Registro exitoso';

}else{

echo' A ocurrido una excepcion';
}




}




public  function prendas (){



	$res=$this->Madmin->listaprendas(1);

	echo json_encode($res);
}


 public  function rsmprendas(){

 	$res=$this->Madmin->resumenb(1);

	echo json_encode($res);


 }



}




?>