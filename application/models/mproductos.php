<?php 

/**
* 
*/
class Mproductos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}


	public function ingresarprd($arreglo){

		/*
			 $arreglo['nomprod']=$this->input->post('nomprod');
		 	$arreglo['estado']=$this->input->post('estado');
		 	$arreglo['idtipoprod']=$this->input->post('idtipoprod');
		*/

		$datos = array(
			'id_prod'=> null,
			'nomprod' =>  $arreglo['nomprod'],
			'estado' => 1,
			'idtipoprod'=> $arreglo['idtipoprod']
			);


		if($this->db->insert('producto',$datos)){
		$insert_id = $this->db->insert_id();

   return  $insert_id;}else{
   	return false;
   }




	}




public  function getproductos($param){

		/*$query=$this->db->query("select p.id_prod,tp.nomtipoprod,p.nomprod,pr.valor,pr.subvalor,sum(b.cantidad) from producto p
						  inner join tipo_producto tp on p.idtipoprod = tp.idtipoprod
						  inner join precio pr on p.id_prod = pr.id_prod
						  inner join bordados b on b.id_prod = p.id_prod group by p.id_prod");*/

        $this->db->select('p.id_prod,tp.nomtipoprod,p.nomprod,pr.valor,pr.subvalor');
		$this->db->from('PRODUCTO  P');
		$this->db->join('TIPO_PRODUCTO TP ','TP.IDTIPOPROD=P.IDTIPOPROD');
		$this->db->join('precio pr','pr.id_prod=p.id_prod');
		$this->db->WHERE('pr.estado', 1);

		$resul=$this->db->get();
		return $resul->result();
		//return $query->result();




}


public  function filtroproductos($param){



        $this->db->select('p.id_prod,tp.nomtipoprod,p.nomprod,pr.valor,pr.subvalor');
		$this->db->from('producto  p');
		$this->db->join('tipo_producto tp ','tp.idtipoprod=p.idtipoprod');
		$this->db->join('precio pr','pr.id_prod=p.id_prod');
		$this->db->WHERE('tp.nomtipoprod',$param);

		$resul=$this->db->get();
		return $resul->result();




}

public  function valorprenda($arreglo){



		$datos = array(
			'idprecio'=> null,
			'estado' => 1,
			'fecha' =>  $arreglo['fecha'],
			'valor' =>  $arreglo['precio'],
			'subvalor' =>  $arreglo['subprecio'],
			'id_prod'=> $arreglo['idprod']
			);


		$this->db->insert('precio',$datos);
			return true;

}


public  function editarproductos($param){

 $datos = array('nomprod' => $param['nomprod'] );

	$this->db->where('id_prod',$param['id_prod']);
	$this->db->update('producto',$datos);
	$res=$this->db->affected_rows();
		return$res;



}


public function descativarprecio($param){

 $datos = array('estado' =>0);

	$this->db->where('id_prod',$param['id_prod']);
	$this->db->update('precio',$datos);
	$res=$this->db->affected_rows();
		return$res;

}


public function asignarprecio($param){

 $datos = array('idprecio' =>null,'estado' =>1,'fecha'=>$param['fecha'],'valor'=>$param['valor'],'subvalor'=>$param['subvalor'],'id_prod'=>$param['id_prod']);

	//$this->db->where('id_prod',$param['id_prod']);
	$this->db->insert('precio',$datos);
	$res=$this->db->affected_rows();
		return$res;

}






}

 ?>