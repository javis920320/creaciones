<?php 


class Mpedidos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public  function addRecpedido($datos){
		$data = array(
			'idpedido' =>$datos['idpedido'] ,
			'cantidad' =>$datos['cantidad']  );

		$this->db->insert('recpcionpedido',$data);
		 return $this->db->affected_rows();

	}


	public  function validarec($idpedd){
		$query=$this->db->query("select sum(cantidad)as  cant from recpcionpedido where idpedido=".$idpedd);
		 foreach ($query->result() as $row)
		{
        	return $row->cant;
        
		}

	}

	public  function GuaradRecepcion($idpedd,$cantidadReci){

		$this->db->query("insert into recpcionpedido values(null,".$idpedd.",".$cantidadReci.",1)");
		 return $this->db->affected_rows();
	}

	public  function lstpedidos(){

		$query=$this->db->query("select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print
     from pedido p
     
     inner join cliente c on c.idcliente=p.idcliente
		 inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
		 inner join persona pe on pe.idpersona=c.idpersona
		where p.estado=3 ");

		return $query->result();


	}

	public  function lstpedidosrec(){

		$query=$this->db->query("select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print,(select sum(x.cantidad) from recpcionpedido x where x.idpedido=p.idpedido group by x.idpedido )as c
     from pedido p
     
     inner join cliente c on c.idcliente=p.idcliente
		 inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
		 inner join persona pe on pe.idpersona=c.idpersona
		where p.estado=3 ");

		return $query->result();


	}


	public  function cambioAsignacionProceso($datos){


		$this->db->query("update proceso set idtrabajador=".$datos['idtrabajador']."  where idproceso=".$datos['idproceso']);

	     return $this->db->affected_rows();


	}



public  function EliminaPedido($datos){

	$this->db->where('idpedido',$datos['idpedido']);

	$this->db->delete('pedido');



	return $this->db->affected_rows();
}


	public function cantidadpedidos(){

	$query=$this->db->query("SELECT count(*) as cantidad FROM pedido  p WHERE date(p.fecha_ingreso) = CURDATE() ORDER BY p.idpedido");

 foreach ($query->result() as $row)
		{
        	return $row->cantidad;
        
		}



	}




public  function pedi_entidad($data){
	$datos = array(
		'idpedido' => $data['idpedido'],
		'cod_entidad' => $data['entidad'],
		'cod_dependencia' => $data['dependencia'] );


$this->db->insert('pedido_entidad',$datos);


return $this->db->affected_rows();
}

public  function guardar($data){


$datos = array(
'idpedido' =>null ,
'factura'=>$data['factura'],
'facultad'=>$data['facultad'],
'cantidad'=>$data['cantidad'],
'talla'=>$data['talla'],
'descripcion'=>$data['descripcion'],
'fecha_ingreso'=>$data['fecha_ingreso'],
'fentrega'=>$data['fentrega'],
'idcliente'=>$data['idpersona'],
'idtipoprod'=>$data['codtipoprod'],
'estado'=>2,
'print'=>0,
'accion'=>false


 );

$this->db->insert('pedido',$datos);
$array = array();

$array[0] = $this->db->insert_id();
$array[1]=$this->db->affected_rows();


return $array;



}

	public function idPersona($data){

		$query=$this->db->query("
select pe.idpersona,c.idcliente from persona pe
inner join cliente c on c.idpersona=pe.idpersona
where pe.cedula=".$data['cc']."");


		 foreach ($query->result() as $row)
		{
        	return $row->idcliente;
        
		}



	}


	public  function tipo_producto($idtipoprod){

    $query= $this->db->query("select nomtipoprod from tipo_producto where idtipoprod=".$idtipoprod."");



     foreach ($query->result() as $row)
		{
        	return $row->nomtipoprod;
        
		}


	}

public function nwdependencia($dato){


	$arreglo = array(
		'iddependencia' =>null ,
		'identidad' =>$dato['identidad'] ,
		'nombredep' =>$dato['nombredep'] ,
		'estado' =>1


		 );

	$this->db->insert('dependencia',$arreglo);
		//return $insert_id = $this->db->insert_id();
	return $this->db->affected_rows();
}


public function nuevaentidad($dato){


	$arreglo = array(
		'identidad' =>null ,
		'nomentidad' =>$dato['nomentidad'] ,
		'tipo' =>$dato['tipo'] ,
		'estado' =>1


		 );

	$this->db->insert('entidad',$arreglo);
		//return $insert_id = $this->db->insert_id();
	return $this->db->affected_rows();
}

	public function dependencia($idpendencia){

		$res=$this->db->query("select * from dependencia where identidad=".$idpendencia."");

		return $res->result();
	}



	public  function tipoentidad($tipoentidad){
/*tipos  entidad
P= particular
E=empresa
U =Universidad
C= colegio

*/

		$res=$this->db->query("select * from entidad where  tipo='".$tipoentidad."' order by nomentidad");


		return$res->result();




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
		'idtipoprod'=>$param['etprod'],
		
		'fentrega'=>$param['fentregae']



		 );

	$this->db->where('idpedido',$param['idpedido']);
	$this->db->update('pedido',$datos);


	return true;
}



public  function lista($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    $this->db->select('p.idpedido,tp.nomtipoprod,tp.idtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print');
		$this->db->from('pedido p');
		
			//$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('cliente c','c.idcliente=p.idcliente');// ->solo reemplazar por esta linea para ver el orden correcto
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		//$this->db->where('p.print',1);
		//$this->db->or_where('p.estado',$dato['estado2']);
		//$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fentrega', 'ASC');
		$this->db->order_by('factura');

		$resul=$this->db->get();
		return $resul->result();
}
public  function consultaseguimiento($param){

	$dato = array('estado' => $param['estado'] ,
					'accion' => $param['accion'] );

	    $this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idcliente=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		$this->db->where('p.accion',$dato['accion']);
		//$this->db->or_where('p.estado',$dato['estado2']);
		//$this->db->where('p.factura',$dato['factura']);
		$this->db->order_by('fentrega', 'ASC');
		$this->db->order_by('factura');

		$resul=$this->db->get();
		return $resul->result();
}


public  function printdisponible($param){

	$dato = array('estado' => $param['estado'] ,
					'factura' => $param['factura'] );

	    /*$this->db->select('p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->where('p.estado',$dato['estado']);
		$this->db->where('p.print',1);
	
		$this->db->order_by('fentrega', 'ASC');
		$this->db->order_by('factura');

		$resul=$this->db->get();
		return $resul->result();*/

		/*$query=$this->db->query('select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print
     from pedido p
     
     inner join cliente c on c.idpersona=p.idcliente
		 inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
		 inner join persona pe on pe.idpersona=c.idpersona
		where p.estado='.$dato['estado'].' and p.print=1 order by p.fentrega,p.factura');*/

			$query=$this->db->query('select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega,p.print
     from pedido p
     
     inner join cliente c on c.idcliente=p.idcliente
		 inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
		 inner join persona pe on pe.idpersona=c.idpersona
		where p.estado='.$dato['estado'].' and p.print=1 order by p.fentrega,p.factura');

		return $query->result();
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
		//$this->db->join('cliente c','c.idpersona=p.idcliente');--cambios anteriores
		$this->db->join('cliente c','c.idcliente=p.idcliente');
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


			/*$query=$this->db->query("select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega ,p.estado
						from pedido p
						inner join cliente c on c.idpersona=p.idcliente
						inner join tipo_producto tp on tp.idtipoprod=p.idtipoprod
						inner join persona pe on pe.idpersona=c.idpersona
						where p.estado=3 or p.estado=2
						order by p.fecha_ingreso desc

				");*/


					$query=$this->db->query("select p.idpedido,tp.nomtipoprod,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,p.fentrega ,p.estado
						from pedido p
						inner join cliente c on c.idcliente=p.idcliente
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


  public function activarprint($array){


	$d=count($array);


	$datos= array(
	 			
	 			  'print'=>1

	 					);
						$res=0;


	for ($i=0; $i <$d ; $i++) { 


		$this->db->where('idpedido',$array[$i]);
	$this->db->update('pedido',$datos);
	$res=$res+$this->db->affected_rows();
	}

	return $res;



}

public function CantidadProcesada($idpedd){


	$query=$this->db->query("select sum(cantidad)as cantidad  from proceso where idpedido=".$idpedd."");

	foreach ($query->result() as $row)
	{
		return $row->cantidad;
	
	}



}


public function CantidadAcumulada($idpedd){

	
	$query=$this->db->query("select sum(cantidad)as cantidad from recpcionpedido where  idpedido=".$idpedd." and estado=1");

	foreach ($query->result() as $row)
	{
		return $row->cantidad;
	
	}
}


public function pedidocant($idpedd){

	
	$query=$this->db->query("select sum(cantidad)as cantidad from pedido where  idpedido=".$idpedd);

	foreach ($query->result() as $row)
	{
		return $row->cantidad;
	
	}
}

 

}
 ?>