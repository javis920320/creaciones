<?php 


class Cclientes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mclientes');
	}


	 public  function getclientes(){

	 	$param=$this->input->post('dato');

	 	$res=$this->model->mclientes($param);

	 	echo json_encode($res);


	 }
}

 ?>