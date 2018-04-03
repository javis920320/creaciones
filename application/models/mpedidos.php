<?php 

/**
* 
*/
class Mpedidos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	public function arreglo($array){


	$d=count($array);


	$datos= array(
	 			
	 			  'estado'=>3

	 					);
						$res=0;


	for ($i=0; $i <$d ; $i++) { 


		$this->db->where('idpedido',$array[$i]);
	$this->db->update('pedido',$datos);
	$res=$res+$this->db->affected_rows();
	}

	return $res;



}



public function insertpedido($param){


	 		$datos= array(
	 			'idpedido'=>null,
	 			 'factura'=>$param ['factura'],
	 			 'facultad'=>$param ['facultad'],
	 			 'cantidad'=>$param ['cantidad'],
	 			 'talla'=>$param ['talla'],
	 			 'descripcion'=>$param ['descripcion'],
	 			 'fecha_ingreso'=>$param ['fecha_ingreso'],
	 			 'fentrega'=>$param ['fentrega'],
	 			 'idcliente'=>$param ['idcliente'],
	 			  'idtipoprod'=>$param ['idtipoprod'],
	 			  'estado'=>1

	 					);


	$this->db->insert('pedido',$datos);

	return 1;
}

public function updatepedido($param){

	$datos = array(
		
		
		'estado' => $param['estado']


		 );

	$this->db->where('idpedido',$param['idpedido']);
	$this->db->update('pedido',$datos);


		$res=$this->db->affected_rows();
		return$res;
}




public function updatepedidoid($param){

	$datos = array(
		
		
		'factura'=>$param['factura'],
		'facultad'=>$param['facultad'],
		'cantidad'=>$param['cantidad'],
		'talla'=>$param['talla'],
		'descripcion'=>$param['descripcion'],
		'fentrega'=>$param['fentregae']



		 );

	$this->db->where('idpedido',$param['idpedido']);
	$this->db->update('pedido',$datos);


	return true;
}



public  function lista($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    $this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		//$this->db->or_where('p.estado',$dato['estado2']);
		//$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fentrega', 'ASC');
		$this->db->order_by('factura');

		$resul=$this->db->get();
		return $resul->result();
}


 public  function filtro($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    $this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fecha_ingreso', 'DESC');

		$resul=$this->db->get();
		return $resul->result();
}
 public  function listacortes(){

$this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',3);
		$this->db->order_by('fecha_ingreso', 'DESC');
		$resul=$this->db->get();
		return $resul->result();


 }

  public  function estados(){


  /*	{data: 'factura','sClass':'dt-body-center'},
			{data: 'nomtipoprod'},
			{data:'facultad'},
			{data:'cantidad'},
			{data:'talla'},
			{data:'descripcion'},
			{data:'nombres'},
			{data:'fecha_ingreso'},*/


			$query=$this->db->query("select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega ,p.estado
						from pedido p
						inner join cliente c on c.idpersona=p.idcliente
						inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
						inner join persona pe on pe.idpersona=c.idpersona
						where p.estado=3 or p.estado=2
						order by p.fecha_ingreso desc

				");


			return $query->result();
  }
  
  
  
  public function arreglo2($array){


	$d=count($array);


	$datos= array(
	 			
	 			  'estado'=>2

	 					);
						$res=0;


	for ($i=0; $i <$d ; $i++) { 


		$this->db->where('idpedido',$array[$i]);
	$this->db->update('pedido',$datos);
	$res=$res+$this->db->affected_rows();
	}

	return $res;



}


 

}
 ?>