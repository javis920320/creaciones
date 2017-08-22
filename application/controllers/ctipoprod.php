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
		$this->load->model('mtipoprod');
	}



	public function tprod(){


		$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);


	 	$this->load->view('layou/footer',$nombres);

	}



public function inserttprod(){

$datos['tipo_prod']='PANTALONES';
$datos['estado']=1;


	$param= array(
				'idtipoprod'=>null,
				'nomtipoprod'=>$datos['tipo_prod'],
				'estado'=>$datos['estado']

		);



	$this->mtipoprod->inertartprod($param);
}


public function gettipoprod(){

$s=$this->input->post('id');

$res=$this->mtipoprod->gettipoprod($s);
echo json_encode($res);



}




}


 ?>