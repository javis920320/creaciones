<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Majax extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public  function buscarcliente($cc){

		

		$this->db->select('p.nombres');
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



	public  function insertarcliente($arreglo){

		$datos = array(

			'idpersona' =>$arreglo['idpersona'],
			'apellidos'=>$arreglo['apellidos'],
			'nombres'=>$arreglo['nombres'],
			'genero'=>$arreglo['genero'],
			'fecha_nac'=>$arreglo['fecha_nac'],
			'telefono'=>$arreglo['telefono']

		 );

			$this->db->insert('persona',$datos);

			//return $this->db->insert_id();

			return true;
	}



	public function clienteinsert($arreglo){

		$datos = array(
			'idcliente' =>'null' ,
			'persona_idpersona'=>$arreglo['idpersona']
		 );
		$this->db->insert('cliente',$datos);



	}


}


 ?>