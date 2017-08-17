<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
<<<<<<< HEAD
		//$this->load->view('welcome_message');
		$data['msn']='';

		$this->load->view('login',$data);
=======
		$datos['msn']='';

		$this->load->view('login',$datos);
>>>>>>> b01e946ef54a38d115b9a78f6ffa9f2e53c405fc
	}
}
