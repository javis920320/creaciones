<?php 

class cpedidoscliente extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('');

	}


	public  function buscarcliente(){

		$datos=$this->session->userdata('tipo');
		$nombres['nombres']=$this->session->userdata('nombres');

        $this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vendedor/vivendedor',$nombres);		
		$this->load->view('layou/footer');
	}
}

 ?>