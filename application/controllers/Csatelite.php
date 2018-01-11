<?php 


class Csatelite extends CI_Controller
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
	 	$this->load->view('vsatelite');
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function listprocesos(){


	$param['fechaini']=$this->input->post('finicio');
	$param['fechafin']=$this->input->post('ffin');
	$param['idpersona']=$this->input->post('idpersona');
	 $param['idtrabajador']=$this->Moperario->trabajadorid($param);
	    $param['idtrabajador'];


	$res=$this->Madmin->consultafiltropro($param);

	 echo json_encode($res);





}



}






 ?>