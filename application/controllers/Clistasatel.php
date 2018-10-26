<?php 

class Clistasatel extends CI_Controller
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
	 	$this->load->view('vlistasatelites');
	 	$this->load->view('layou/footer',$nombres);




	 }
	 

	 public  function lstvalores(){


	 	$res=$this->Madmin->lstvalores();
		echo json_encode($res);
	 }

	 
	 public function lstgeneral(){
		 
		$param['idtrabajador']=$this->input->post('trabajador');
		$idtrabajador=$param['idtrabajador'];
		
		$res=$this->Madmin->lstsatelite($idtrabajador);
		
		echo json_encode($res);
		
		 
		 
		 
	 }
	 
	 
	 public function cambiarestado(){
		 
		 
		 $idtrabajador=$this->input->post('idtrabajador');

		 $lista = array();

		 $res=$this->Madmin->ressatelite($idtrabajador);
		  foreach ($res as  $value) {

		  	$lista[]=$value->idproceso;
		  }


		  		
		   for ($i=0; $i < sizeof($lista); $i++) { 


		
		  $this->Madmin->addres("insert into historialsatelite(idproceso,fecha) values(".$lista[$i].",sysdate());");
		   }
		  //	



		  	


		  
       

		 
		$res= $this->Madmin->cambiarestado($idtrabajador);
		
		if($res>=1){
			echo 'Tarea realizada con exito';
			
		}else{
			echo 'Tarea no realizada';
		}
	 }


	 public  function vistasatelitehistorial(){

		$nombres['nombres']=$this->session->userdata('nombres');

		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vhistorialsatelite');
		$this->load->view('layou/footer',$nombres);


	 }

	  public function historialSatelite(){

		$resul=$this->Madmin->historialSatelite();
		echo json_encode($resul);
	  }


	  public  function resSAtefecha($idtrabajador,$fecha){
		 $arreglo['idtrabajador']=$idtrabajador;//$this->input->post('idsatelite');
		 $arreglo['fecha']=$fecha;//$this->input->post('fechareg');
		 $res=$this->Madmin->resSAtefecha($arreglo);
		 echo json_encode($res);




	  }
	 
}













 ?>