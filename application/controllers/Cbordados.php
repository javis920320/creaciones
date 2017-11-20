<?php 


class Cbordados extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Mbordados');
	}

	public function index(){


		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vbordados');
		$this->load->view('layou/footer');



	}


	 public  function lstbordados(){


	 	$res=$this->Mbordados->listabordados();
	 	echo json_encode($res);
	 }



	  public  function ingresarbordado(){


	  	$param['nombre']=$this->input->post('nombre');
	  	$param['precio']=$this->input->post('precio');

	  	$res=$this->Mbordados->ingresarbordado($param);

	  	  if($res>=1){
	  	  	echo 'Bordado registrado';
	  	  }else{
	  	  	echo 'Ha ocurrido un error';
	  	  }




	  }


	   public  function editarbordados(){


	   $param['idbordados']=$this->input->post('eidbordaos');
	  	$param['nombre']=$this->input->post('enombre');
	  	$param['precio']=$this->input->post('eprecio');

	  	$res=$this->Mbordados->editarbordados($param);

	  	if($res>=1){
	  		echo'Registro actualizado';
	  	}else{
	  		echo'Error en la edicion';
	  	}



	   }


	    public  function eliminarb(){

	    	 $param['idbordados']=$this->input->post('delb');

	    	 $res=$this->Mbordados->eliminarb($param);
			 if($res>=1){
				 
				 echo'Registro Eliminado';
			 }else{
				  echo'No se pudo eliminar este registro';
				 
			 }


	    }
}


 ?>