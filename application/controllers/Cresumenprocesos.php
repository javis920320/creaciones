<?php 



class Cresumenprocesos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		ob_start();

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

	//$param['fechai']=$this->input->post('fechai');	
	//$param['fechaf']=$this->input->post('fechaf');	
	
	 $res=$this->Mtrabajos->tblresumen();
	 
	   

	 echo json_encode($res);





}


 public function resumen(){


//$dato=$this->input->get('fechai');

$res=$this->Mtrabajos->resumen();
$this->export_excel->to_excel($res,'Resumen creaciones');



 }
 
 public  function resumentotal(){
	 
	 //$param['fechai']=$this->input->post('fechai');
	 //$param['fechaf']=$this->input->post('fechaf');
	 
	 $res= $this->Mtrabajos->resumentotal();
	 
	 echo json_encode($res);
	 
 }
 
 public  function tblperiodo(){
	 
	 
	 $res=$this->Mtrabajos->tblperiodo();
	 
	 echo json_encode($res);
	 
 }
 
 public  function updateperiodo(){
	 
	 $param['idperiodo']=$this->input->post('modper');
	 	 $param['fechai']=$this->input->post('fechaie');
		 	 $param['fechaf']=$this->input->post('fechafe');
			 
			 $res=$this->Mtrabajos->updateperiodo($param);
			 
			 if($res>=1){
				 echo 'Periodo Actualizado';
				 
			 }else{
				  echo 'Ocurrio un inconveniente';
			 }
	 
 }



}



 ?>

