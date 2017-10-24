<?php 

/**
* 
*/
class Cadmin extends CI_Controller
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
	 	$this->load->view('vadmin');
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function listprocesos(){


	$param['fechaini']="2017-09-31";//$this->input->post('finicio');
	$param['fechafin']= "2017-10-23";//$this->input->post('ffin');
	//$param['idpersona']=$this->input->post('idpersona');
	 $param['idtrabajador']=1;//$this->Moperario->trabajadorid($param);
	    $param['idtrabajador'];


	$res=$this->Madmin->consultafiltropro($param);

	 echo json_encode($res);





}



}



 ?>