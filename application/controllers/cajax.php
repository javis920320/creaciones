<?php 

class Cajax extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('majax');
	}
	public  function buscarcliente(){
		$cc['identificacion']=$this->input->post("id");
		$res=$this->majax->buscarcliente($cc);
		
		echo json_encode($res);
		//echo "Cliente ".$res['nombre']."Ya existe";
                  
	}

	public function ingresarCliente(){
		
		$id=$this->input->post('identidad');
		$nom=$this->input->post('nombres');
		$celular=$this->input->post('celular');
		$a='';
		$arreglo= array(
			'cedula'=>$id,
			'nombres'=>$nom,
			'telefono'=>$celular
			);
		$resp=$this->majax->insertarcliente($arreglo);
		//echo $resp;
		if($resp){
			$arreglo['foranea']=$resp;
			$this->majax->clienteinsert($arreglo);
			echo "Cliente  registrado correctamente";
		}
	}
}
 ?>