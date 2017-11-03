<?php 

/**
* 
*/
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


  	select pe.cedula,pe.nombres,pe.telefono,
 case u.tipo
 when 0 then 'VENDEDOR'
  when 1 then 'CORTES'
   when 2 then 'OPERARIO OBRA'
   when 3 then 'ADMINISTRADOR'
   when 4 then 'OPERARIO'
 END ,u.estado from persona pe
 inner join usuarios u on pe.idpersona = u.idpersona 

 $query=$this->db->query("select pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1 
	 					from proceso pr inner join producto p on p.id_prod=pr.id_prod inner join pedido pd on pd.idpedido=pr.idpedido
						where pr.idtrabajador=".$param['idtrabajador']." and pr.fecha  between ".$param['fechaini']." and ".$param['fechafin']."
	 					");

	return $query->result();

  	// select pe.cedula,pe.nombres,pe.telefono,u.tipo,u.estado from persona pe
 //inner join usuarios u on pe.idpersona = u.idpersona 

  	$this->db->select('pe.cedula,pe.nombres,pe.telefono,u.tipo,u.estado');
  	$this->db->from('persona pe');
  	$this->db->join('usuarios u','pe.idpersona = u.idpersona');
  	$res=$this->db->get();

  	return $res->result();
  }



}


 ?>