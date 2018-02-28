<?php 

class Madmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	
	  public  function calculo($param){

		
	 		$query=$this->db->query('select (select p.cantidad  from pedido p where p.idpedido='.$param['idpedido'].' )-sum(pr.cantidad)as numero from proceso pr where pr.idpedido='.$param['idpedido'].'');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->numero;
        
		}
  }
	
	public  function consultadis($param){
		
		$query=$this->db->query("select cantidad from pedido where idpedido=".$param['idpedido']."");
		return $query->result();
	}
	
	
	public  function cambiarestado($idtrabajador){
		
		$datos= array('estado'=>3);
		
		$this->db->where('idtrabajador',$idtrabajador);
		$this->db->where('estado',2);
		$this->db->update('proceso',$datos);
		
		
		$res=$this->db->affected_rows();
		return$res;

	}
	
	
	 public  function vistaconsutaldo(){
		 
	$query=$this->db->query("SELECT * FROM consultasaldo");	 
	return $query->result();
		 

	 }
	 
	 
	 public function SaldoPendiente($param){
		 
		 $query=$this->db->query("select sum(precio) as precio from proceso where idtrabajador=".$param['idtrabajador']." and estado=2");
		 
		 return $query->result();
	 }


public  function preciosatelite($param){

	$query=$this->db->query("select pr.valorsatelite from precio pr
inner join producto p on pr.id_prod = p.id_prod
where pr.estado=1 and  p.id_prod=".$param['idprod']."");

foreach ($query->result() as $row)
		{
        	return $row->valorsatelite;
        
		}

/*$this->db->select(" pr.valorsatelite");
$this->db->from("precio pr");
$this->db->join('producto p ','pr.id_prod = p.id_prod');
$this->db->where('pr.estado=',1);
$this->db->where('p.id_prod=',$param['idprod']); 
$resul=$this->db->get();
		return $res=$resul->row();*/


	//$query->result();



}


	 public  function lstsatelite($idtrabajador){
		 if($idtrabajador==0){
			 $query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(2,3)");
			 
		 }else{
		 
		


	 	$query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(2,3) and pr.idtrabajador=".$idtrabajador."");
			}


	 	return $query->result();
	 }
	 
	 
	 
	 
	
	
	
	public  function asignarsatelite($param){


	 $datos= array(
	 	'idproceso' => null, 
	 	'cantidad' => $param['cantidad'],
	 	'estado' => 2,
	 	'fecha' => $param['fecha'],
	 	'id_prod' => $param['idprod'],
	 	'idpedido' =>  $param['idpedido'],
	 	'idtrabajador' =>$param['idtrabajador'],
	 	'precio'  =>$param['preciosatelite'],
	 	'precio1' => 0,

	 	'prebordado'=>$param['preciob']


	 	);

	$this->db->insert('proceso',$datos);
	 $res=$this->db->affected_rows();
		return$res;




 }

public function presiobordados($param){


 $query= $this->db->query("select  sum(b.precio) as preciob from bordadosproductos bp 
inner join producto p on bp.id_prod = p.id_prod
inner join bordados b on bp.idbordados = b.idbordados
where bp.id_prod=".$param['idprod']."");

 foreach ($query->result() as $row)
		{
        	return $row->preciob;
        
		}

  }



public  function listasatelites(){


	

	$query=$this->db->query("select *from trabajador t
inner join persona p on t.idpersona = p.idpersona
inner join usuarios  u on u.idpersona = t.idpersona
where u.tipo=4 and u.estado=1");
	return $query->result();





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
   	when 4 then 'SATELITE'
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


public  function eliminaruser($param){

	$this->db->where('idpersona',$param['idpersona']);
	$this->db->delete('usuarios');

	$res=$this->db->affected_rows();
		return$res;



}





public  function idtrabajador($param){

	  
	 		$query=$this->db->query('select  t.idtrabajador  from trabajador t where t.idpersona='.$param['idpersona'].' ');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->idtrabajador;
        
		}



	  }

}


 ?>