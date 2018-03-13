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


echo $res;




}




}




?>