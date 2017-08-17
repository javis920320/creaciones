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
				'id_tip_prod'=>null,
				'tipo_prod'=>$datos['tipo_prod'],
				'estado'=>$datos['estado']

		);



	$this->mtipoprod->inertartprod($param);
}




}


 ?>