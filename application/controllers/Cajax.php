<?php 

class Cajax extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Majax');
	}
	public  function buscarcliente(){
		$cc['identificacion']=$this->input->post("id");
		$res=$this->Majax->buscarcliente($cc);
		
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
		$resp=$this->Majax->insertarcliente($arreglo);
		echo $resp;
		if($resp){
			$arreglo['foranea']=$resp;
			$this->Majax->clienteinsert($arreglo);
			echo "Cliente  registrado correctamente";
		}
	}

	
	 public  function crearcliente(){
		 
		 $id=$this->input->post('identidad');
		$nom=$this->input->post('nombres');
		$celular=$this->input->post('celular');

		/*$res=$this->Majax->validacedula($id);
		echo json_encode($res);*/


		$a='';
		$arreglo= array(

			'cedula'=>$id,
			'nombres'=>$nom,
			'telefono'=>$celular
			);

		$resp=$this->Majax->insertarcliente($arreglo);
		//echo $resp;
		if($resp){
			$arreglo['foranea']=$resp;
			$this->Majax->clienteinsert($arreglo);
			echo$resp;
		}
		 
		 
		 
	 }

	public function updatecliente(){
		$codigo=$this->input->post('personaid');

        $id=$this->input->post('upidpersona');
		$nom=$this->input->post('upname');
		$celular=$this->input->post('uptelefono');


		
		$arreglo= array(
			'codigo'=>$codigo,
			'cedula'=>$id,
			'nombres'=>$nom,
			'telefono'=>$celular
			);
		$resp=$this->Majax->updatecliente($arreglo);
		if($resp>=1){
			echo 'Registro actualizado..';
		}else{
			echo 'Ha ocurrido un error';
		}

	}

	public  function enviarlista(){


		$dato['confirm']=1;//$this->input->post('confirm');

		$res=$this->Majax->enviarlista($dato);
		if($res>=1){
			echo 'Filas afectadas'.$res;

		}else{
			echo 'error en envio';
		}


	}



	public  function eliminarp(){

		$param['idpedido']=$this->input->post('idpedido');
		$res=$this->Majax->eliminarp($param);

		if($res>0){
			echo "Se a eliminado este pedido";

		}else{
			echo "Error en el proceso";
		}
	}
	
}
 ?>