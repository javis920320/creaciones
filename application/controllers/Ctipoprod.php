<?php 
/**
* 
*/
class Ctipoprod extends Ci_Controller
{
	
	function __construct()
	{
		# code...

		parent::__construct();
		$this->load->model('Mtipoprod');
	}



	public function tprod(){


		$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);


	 	$this->load->view('layou/footer',$nombres);

	}



public function inserttprod(){

$datos['tipo_prod']=$this->input->post('tipo_prod');
$datos['estado']=1;


	$param= array(
				'idtipoprod'=>null,
				'nomtipoprod'=>$datos['tipo_prod'],
				'estado'=>$datos['estado']

		);



	$resp=$this->Mtipoprod->inertartprod($param);
	if($resp>=1){
		echo'Registro registrado';
		
	}else{
		echo'A ocurrido un error';
	}
}


public function gettipoprod(){

$s=$this->input->post('id');

$res=$this->Mtipoprod->gettipoprod($s);
echo json_encode($res);



}

public function listatpoprod(){
	
	
	$res=$this->Mtipoprod->listatpoprod();
	
	
	echo json_encode($res);
}




}


 ?>