<?php 

class Madmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}





 public  function consultafiltropro($param){

	/*$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1');
	$this->db->from('proceso pr');
	$this->db->join('producto p','p.id_prod=pr.id_prod');
	$this->db->join('join pedido pd', 'pd.idpedido=pr.idpedido');
	$this->db->where('pr.idtrabajador',$param['idtrabajador']);*/

	 $query=$this->db->query("select pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1 
	 					from proceso pr inner join producto p on p.id_prod=pr.id_prod inner join pedido pd on pd.idpedido=pr.idpedido
						where pr.idtrabajador=".$param['idtrabajador']." and pr.fecha  between ".$param['fechaini']." and ".$param['fechafin']."
	 					");

	return $query->result();






}


 public function listatrabajdores(){

$this->db->select('t.idtrabajador,p.nombres');
$this->db->from('trabajador t');
$this->db->join('persona p','p.idpersona = t.idpersona');

$resul=$this->db->get();
return $resul->result();





}

 public function calcular($param){
//select sum(cantidad),sum(precio) from proceso where fecha between '2017-09-20' and '2017-10-31' and idtrabajador=1

	$this->db->select('sum(cantidad) as c,sum(precio) as p');
	$this->db->from('proceso');
	$this->db->where('idtrabajador',$param['idtrabajador']);
	$this->db->where('fecha >=',$param['fechai']);
	$this->db->or_where('fecha<=',$param['fechaf']);
	

	$resul=$this->db->get();
	return $resul->result();



 }


  public  function usuarios(){


 $query=$this->db->query("select pe.idpersona,pe.cedula,pe.nombres,pe.telefono,
 	case u.tipo
 	when 0 then 'VENDEDOR'
  	when 1 then 'CORTES'
   	when 2 then 'OPERARIO OBRA'
   	when 3 then 'ADMINISTRADOR'
   	when 4 then 'OPERARIO'
 	END  as tipo, 
 	case u.estado
 	when 0 then 'INACTIVO'
 	when 1 then 'ACTIVO'
 	END AS estado
	from persona pe
 	inner join usuarios u on pe.idpersona = u.idpersona");

	return $query->result();


  }



 	public  function insertpersona($param){

		$datos = array(
			'idpersona'=>NULL,
			'cedula' =>$param['cedula'],
			'nombres'=>$param['nombres'],
			'telefono'=>$param['telefono']

		 );

			$this->db->insert('persona',$datos);

			$insert_id = $this->db->insert_id();

   return  $insert_id;
}

	public  function insertuser($param){

 $datos = array('idusuarios' =>null,'name' =>$param['name'],'password'=>$param['pass'],'tipo'=>$param['tipo'],'estado'=>1,'idpersona'=>$param['idpersona']);

	//$this->db->where('id_prod',$param['id_prod']);
	$this->db->insert('usuarios',$datos);
	$res=$this->db->affected_rows();
		return$res;

}

public  function editarusuario($param){

	 $datos = array('cedula' => $param['cedula'],'nombres' => $param['nombres'],'telefono' => $param['telefono'] );


	$this->db->where('idpersona',$param['idpersona']);
	$this->db>update('persona',$datos);


		 $res=$this->db->affected_rows();
		return$res;


}


public  function creartrabajador($param){
	
		 $datos = array('idtrabajador' => null,'idpersona' => $param['idpersona']);
	
	$this->db->insert('trabajador',$datos);
	
}

}


 ?>