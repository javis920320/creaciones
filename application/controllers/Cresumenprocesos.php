<?php 



class Cresumenprocesos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mtrabajos');

		$this->load->library('export_excel');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('Vresumenproceso');
	 	$this->load->view('layou/footer',$nombres);




	 }




public  function tblresumen(){

	$param['fechai']=$this->input->post('fechai');	
	$param['fechaf']=$this->input->post('fechaf');	
	
	 $res=$this->Mtrabajos->tblresumen($param);
	   

	 echo json_encode($res);





}


 public function resumen(){


//$dato=$this->input->get('fechai');

$res=$this->Mtrabajos->resumen();
$this->export_excel->to_excel($res,'Resumen creaciones');



 }



}



 ?>

