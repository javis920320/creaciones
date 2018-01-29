<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Majax extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public  function buscarcliente($cc){

		

		$this->db->select('p.nombres,p.idpersona,p.telefono');
		$this->db->from('persona p');
		$this->db->join('cliente c','c.idpersona=p.idpersona');
		$this->db->where('p.cedula=',$cc['identificacion']);
		$resultados= $this->db->get();

		if($resultados->num_rows()>0){
			//$r=$resultados->row();
			 //$arreglo = array('nombre' => $r->nombres);
			//return $r;
			return $r=$resultados->result();

			//return 1;

		}else{


			return 0;
		}


	}

    public function	updatecliente($arreglo){


    	$campos = array(
			'cedula' => $arreglo['cedula'],
			'nombres' => $arreglo['nombres'],
			'telefono' => $arreglo['telefono']
		);
		$this->db->where('idpersona',$arreglo['codigo']);
		$this->db->update('persona',$campos);

		$res=$this->db->affected_rows();
		return$res;
    }



	public  function insertarcliente($arreglo){

		$datos = array(
			'idpersona'=>NULL,
			'cedula' =>$arreglo['cedula'],
			'nombres'=>$arreglo['nombres'],
			'telefono'=>$arreglo['telefono']

		 );

			$this->db->insert('persona',$datos);

			$insert_id = $this->db->insert_id();

   return  $insert_id;
}

			//return true;
	



	public function clienteinsert($arreglo){

		$datos = array(
			'idcliente' =>null,
			'estado'=>1,
			'idpersona'=>$arreglo['foranea']
		 );
		$this->db->insert('cliente',$datos);



	}


	 public function enviarlista($dato){

	 	$datos = array('estado' => 2 
	 		
	 		);

	 	

	$this->db->where('estado',$dato['confirm']);
	$this->db->update('pedido',$datos);
	$res=$this->db->affected_rows();
		return$res;


	 }

	  public  function eliminarp($param){

	  	$this->db->where('idpedido',$param['idpedido']);
	  	$this->db->delete('pedido');

	  	$res=$this->db->affected_rows();
		return$res;

	 }


}


 ?>