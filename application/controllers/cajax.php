<?php 

/**
* 
*/
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
		$ape=$this->input->post('apellidos');
		$genero=$this->input->post('genero');
		$fecha_nac=$this->input->post('fecha_nac');
		$celular=$this->input->post('celular');

		$arreglo= array(
			'idpersona'=>$id,
			'apellidos'=>$ape,
			'nombres'=>$nom,
			'genero'=>$genero,
			'fecha_nac'=>$fecha_nac,
			'telefono'=>$celular
			);

		$resp=$this->majax->insertarcliente($arreglo);
		if($resp){

			$this->majax->clienteinsert($arreglo);

		}
		//echo$resp;

		/*if($resp>0){
			$arreglo['last_id']=$resp;
			$this->majax->clienteinsert($arreglo);



		}*/

	}
}

 ?>