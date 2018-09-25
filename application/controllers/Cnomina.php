<?php 

ini_set('date.timezone','America/Bogota');

class Cnomina extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->Model('Madmin');
	}
public function lstadelantos()
{
	$res=$this->Madmin->lstadel();

	echo json_encode($res);
}


	public function adelanto()
	{

		$dato['valor']=$this->input->post('valor');
		$dato['idtrabajador']=$this->input->post('idtrabajador');
		$resp=$this->Madmin->periodovigente();
		$dato['idperiodo']=$resp;
		
		$res=$this->Madmin->addadelanto($dato);

		if($res>=1){

			echo "Registro exitoso";
		}else{

			echo "Error";
		}


	}


	public function guardarnominatotal(){


/*idsaldo
fecha
estado
valor
idtrabajador
idperiodo*/



	}

	





 public function saldos_desc(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vsaldosdescuentos');


	 	$this->load->view('layou/footer',$nombres);
	}



public function lstdesc()
{

$data['estado']=$this->input->post('estado');
$res=$this->Madmin->lstdesc($data);
echo json_encode($res);


}	



public  function agregardescuento(){


$datos['concepto']=$this->input->post('concepto');
$datos['idtrabajador']=$this->input->post('idtrabajador');
$datos['valor']=$this->input->post('valor');

 $res=$this->Madmin->addDesc($datos);
 if($res>=1){
 echo "Registro exitoso";
 }else{
 	echo "Error  al registrar";
 }

}



	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vnomina');


	 	$this->load->view('layou/footer',$nombres);
	}


	public  function listatrabajadores(){

		$resultado=$this->Madmin->listatrabajdores();


		echo json_encode($resultado);
	}



	 public  function calcular(){

	 	$param['fechai']=$this->input->post('fechai');
	 	$param['fechaf']=$this->input->post('fechaf');
	 	$param['idtrabajador']=$this->input->post('idtrabajador');

	 	$res=$this->Madmin->calcular($param);
	 	echo json_encode($res);





	 }
	 
	 
	  public function vistaconsutaldo(){
		  
		  $this->input->post('d');
		  
		  $res=$this->Madmin->vistaconsutaldo();
		  echo json_encode($res);
		  
		  
		  
	  }
}

 ?>