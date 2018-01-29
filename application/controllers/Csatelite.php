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




public  function listasatelites(){


	

	$res=$this->Madmin->listasatelites();

	 echo json_encode($res);





}


public  function asignarsatelite(){


		$param['cantidad']=$this->input->post('cantidad');
	 	$param['idprod']=$this->input->post('productos');
	 	$param['idpedido']=$this->input->post('idpedido');
	 	$param['idtrabajador']=$this->input->post('trabajador');
	 	//echo $param['idtrabajador'];
	 	$param['fecha']=date ("Y-m-d");

	 	$preciob=$this->Madmin->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];

		$res=$this->Madmin->asignarsatelite($param);


		if ($res>=1) {

			echo'Registro Asignado';
			# code...
		}else{
			echo'No se a podido Asisgnar el producto';
		}
	 	




}



}






 ?>