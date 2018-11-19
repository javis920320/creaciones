<?php 

class Madmin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}



public function tipoprecio($res,$tpv){

	$datos = array('id_proceso' =>$res ,'tipo_precio'=>$tpv);
	$this->db->insert('tipo_precio',$datos);


}

 public  function cambiolista($array){


 	$d=count($array);
 	$x=2;
	$datos= array('estado'=>4);

	$res=0;


		for ($i=0; $i <$d ; $i++) { 
			$this->db->where('idproceso',$array[$i]);
			$this->db->where('estado',$x);
			$this->db->update('proceso',$datos);
			$res=$res+$this->db->affected_rows();
		}

	return $res;
 }


	public function lstadel()
	{
		

		$res=$this->db->query("select ad.idadelanto,pe.nombres,ad.valor ,ad.fecha from trabajador_adelanto ad
inner join trabajador t on t.idtrabajador = ad.idtrabajador
inner join persona pe on pe.idpersona = t.idpersona
inner join periodo pr on pr.idperiodo = ad.idperiodo
 where pr.estado=1");

		return $res->result();
	}

public function periodovigente()
{

	$query=$this->db->query("select idperiodo from periodo where estado=1");

	
foreach ($query->result() as $row)
		{
        	return $row->idperiodo;
        
		}

	

}

	public function addadelanto($dato)
	{
		$data = array(
			'idadelanto' =>null ,
			'valor' =>$dato['valor'] ,
			'estado' =>1,
			'fecha' =>date("Y-m-d,H:i:s"),
			'idtrabajador' => $dato['idtrabajador'],
			'idperiodo'=>$dato['idperiodo']
			 );


		$this->db->insert('trabajador_adelanto',$data);

		$res=$this->db->affected_rows();
		return$res;
	}


	public function lstdesc($data)
	{
		


		$res=$this->db->query("select dc.iddescuento,pe.nombres,dc.concepto,dc.valor,dc.fecha from persona pe
						inner join trabajador tr on tr.idpersona = pe.idpersona
						inner join descuento dc on dc.idtrabajador = tr.idtrabajador
						where dc.estado=".$data['estado']." ");


		return $res->result();




	}


public  function addDesc($datos){




	$data = array(
		'iddescuento'=>null,
		'fecha'=>date("Y-m-d,H:i:s"),
		'concepto' => $datos['concepto'], 
		'valor'=> $datos['valor'], 
		'estado'=>1,
		'idtrabajador' =>  $datos['idtrabajador']


	);

	$this->db->insert('descuento',$data);
		$res=$this->db->affected_rows();
		return$res;


}


	public  function verincompletos (){
		
		$res=$this->db->query('select idpedido ,facultad,factura,cantidad,procesado,descripcion,fecha_ingreso from verincompletos where procesado-cantidad<>0');
		
		return $res->result();
		
	}
	
	
	public  function listaconsulta(){
	
	/*$query=$this->db->query("select pr.idproceso, pe.factura,tp.nomtipoprod,pro. nomprod,pe. talla,pe. facultad, pr.cantidad,pr.cantidad as procesado,per.nombres as cliente,pr.fecha,(select p2.nombres from persona p2 inner join trabajador t2 on t2.idpersona=p2. idpersona where t2.idtrabajador=pr.idtrabajador )as trabajador,pe.descripcion
from proceso pr
inner join pedido pe on pe.idpedido = pr.idpedido
inner join cliente c on c.idcliente = pe.idcliente
inner join tipo_producto tp on tp.idtipoprod = pe.idtipoprod
inner join producto pro  on pro.id_prod = pr.id_prod 
inner join persona per on per.idpersona = c.idpersona");*/
$query=$this->db->query("select pr.idproceso, pe.factura,tp.nomtipoprod,pro. nomprod,pe. talla,pe. facultad, pr.cantidad,pr.cantidad as procesado,per.nombres as cliente,pr.fecha,(select p2.nombres from persona p2 inner join trabajador t2 on t2.idpersona=p2. idpersona where t2.idtrabajador=pr.idtrabajador )as trabajador,pe.descripcion
from proceso pr
inner join pedido pe on pe.idpedido = pr.idpedido
inner join cliente c on c.idcliente = pe.idcliente
inner join tipo_producto tp on tp.idtipoprod = pe.idtipoprod
inner join producto pro  on pro.id_prod = pr.id_prod 
inner join persona per on per.idpersona = c.idpersona");



return $query->result();
	}
	
	
	
	 public  function fneliminar($param){

		$this->db->where('idprendas',$param['idprendas']);

		$this->db->where('idbordados',$param['idbordados']);

	 	$this->db->delete('bordadosprendas');

	 	$res=$this->db->affected_rows();
		return$res;

	 }


	 public  function seguimiento($param){
$dato = array('accion' => 1 );

		$this->db->where('idpedido',$param['idpedido']);
		$this->db->update('pedido',$dato);

	 	$res=$this->db->affected_rows();
		return$res;


	}

	public function camlistacobro($param){

		$datos = array('estado' => 1);


		$this->db->where('idprendas',$param['idprendas']);
		$this->db->update('prendas',$datos);
		$res=$this->db->affected_rows();
		return$res;

	}
	
	public  function cargarb($param){
		
		
		$datos = array(

			'idprendas' => $param['idprendas'],
			'idbordados' => $param['idbordados'],
			'cantidad' => $param['cant'],
			'precio' => $param['precio']
			

			);

		
		$this->db->insert('bordadosprendas',$datos);
		$res=$this->db->affected_rows();
		return$res;
		
		
		
		
	}
	


	public  function rsmbordados($param){

		$query=$this->db->query("select b.idbordados,b.nombre,b.precio,bp.cantidad,p.idprendas
FROM prendas p 
inner  JOIN bordadosprendas bp on bp.idprendas=p.idprendas
inner join bordados b on  b.idbordados=bp.idbordados
where p.idprendas=".$param['id']."");


		return $query->result();


	}
	
	public  function consultaprecio($param){
	
$query=$this->db->query("select precio from bordados where idbordados=".$param['idbordados']."");


foreach ($query->result() as $row)
		{
        	return $row->precio;
        
		}

	
	}
	
	
	

	public  function valorcero($param){


	$datos = array(

		'idproceso' =>null,
		'estado' => 1,
		'cantidad' => $param['cantidad'],
		'fecha' => $param['fecha'],
		'id_prod' => $param['idprod'],
		'idpedido' => $param['idpedido'],
		'idtrabajador' => $param['idtrabajador'],
		'precio' => 0,
		'precio1' => 0,
		'prebordado' => $param['preciob'],

		 );

	$this->db->insert('proceso',$datos);
		$res=$this->db->affected_rows();
		return$res;





}



	public  function ingoperario($param){


	$datos = array(

		'idproceso' =>null,
		'estado' => 1,
		'cantidad' => $param['cantidad'],
		'fecha' => $param['fecha'],
		'id_prod' => $param['idprod'],
		'idpedido' => $param['idpedido'],
		'idtrabajador' => $param['idtrabajador'],
		'precio' => $param['precioop'],
		'precio1' => $param['preadmin'],
		'prebordado' => $param['preciob'],

		 );

	$this->db->insert('proceso',$datos);
		
			$insert_id = $this->db->insert_id();

   return  $insert_id;





}




	public function ingresarP($param){


		$datos = array(

			'idprendas' => null, 
			'factura' => $param['fac'],
			'cantidad' => $param['cant'],
			'fecha' =>date("Y-m-d H:i:s"),
			'descripcion' => $param['desc'],
			'estado' =>0

			);

		$this->db->insert('prendas',$datos);

		$res=$this->db->affected_rows();
		return$res;




	}


	public  function resumenb($param){


		if ($param==2) {
			$query=$this->db->query("select  p.idprendas,p.factura,p.descripcion,p.cantidad,p.fecha,sum(bp.precio*p.cantidad)as preciob,sum(bp.cantidad)as cantb,p.estado from prendas p 
left join bordadosprendas bp on bp.idprendas=p.idprendas  where estado=".$param." GROUP by p.idprendas");
			# code...
		}else if ($param==1){
			$query=$this->db->query("select  p.idprendas,p.factura,p.descripcion,p.cantidad,p.fecha,sum(bp.precio*p.cantidad)as preciob,sum(bp.cantidad)as cantb,p.estado from prendas p 
left join bordadosprendas bp on bp.idprendas=p.idprendas  where estado=".$param." GROUP by p.idprendas");
			# code...

		}else{
			$query=$this->db->query("select  p.idprendas,p.factura,p.descripcion,p.cantidad,p.fecha,sum(bp.precio*p.cantidad)as preciob,sum(bp.cantidad)as cantb,p.estado from prendas p 
left join bordadosprendas bp on bp.idprendas=p.idprendas  where estado=".$param." GROUP by p.idprendas");
			# code...

		}

	





	return $query->result();



	}
	
	public  function listaprendas($param){
		/*if( $param==2){

		$query=$this->db->query(" select idprendas,factura ,descripcion,cantidad,fecha,estado from prendas where estado=".$param);

		}else if($param==1){

			$query=$this->db->query(" select idprendas,factura ,descripcion,cantidad,fecha,estado from prendas where estado=".$param);
		}else{*/

			$query=$this->db->query(" select idprendas,factura ,descripcion,cantidad,fecha,estado from prendas");

		//}
		
		
		
		return $query->result();
		
		
		
	}
	
	
	
	  public  function calculo($param){

		
	 		$query=$this->db->query('select (select p.cantidad  from pedido p where p.idpedido='.$param['idpedido'].' )-sum(pr.cantidad)as numero from proceso pr where pr.idpedido='.$param['idpedido'].'');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->numero;
        
		}
  }



  public function lstvalores(){

  	$query=$this->db->query("select sum(pr.cantidad) as cantidad,sum(pr.precio) as vsatel,nombres,t.idtrabajador
 from proceso pr 
 inner join trabajador t on t.idtrabajador = pr.idtrabajador
 inner join persona pe on pe.idpersona = t.idpersona
 where pr.estado=4 group by pr.idtrabajador;");

  	return$query->result();


  }
	
	public  function consultadis($param){
		
		$query=$this->db->query("select cantidad from pedido where idpedido=".$param['idpedido']."");
		return $query->result();
	}
	
	public  function fnbordadosf(){


$datos = array('estado' => 2);


		$this->db->where('estado',1);
		$this->db->update('prendas',$datos);
		$res=$this->db->affected_rows();
		return$res;
	}
	
	public  function cambiarestado($idtrabajador){
		
		$datos= array('estado'=>3);
		
		$this->db->where('idtrabajador',$idtrabajador);
		$this->db->where('estado',4);
		$this->db->update('proceso',$datos);
		
		
		$res=$this->db->affected_rows();
		return$res;

	}
	
	
	 public  function vistaconsutaldo(){
		 
	$query=$this->db->query("SELECT * FROM consultasaldo");	 
	return $query->result();
		 

	 }
	 
	 
	 public function SaldoPendiente($param){
		 
		 $query=$this->db->query("select sum(precio) as precio from proceso where idtrabajador=".$param['idtrabajador']." and estado=4");
		 
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


}

public  function precionocturno($param){

	$query=$this->db->query("select pr.precionocturno from precio pr
inner join producto p on pr.id_prod = p.id_prod
where pr.estado=1 and  p.id_prod=".$param['idprod']."");

foreach ($query->result() as $row)
		{
        	return $row->precionocturno;
        
		}


}
public  function precionormal($param){

	$query=$this->db->query("select pr.subvalor from precio pr
inner join producto p on pr.id_prod = p.id_prod
where pr.estado=1 and  p.id_prod=".$param['idprod']."");

foreach ($query->result() as $row)
		{
        	return $row->subvalor;
        
		}


}





public  function preadmin($param){

	$query=$this->db->query("select pr.valor from precio pr
inner join producto p on pr.id_prod = p.id_prod
where pr.estado=1 and  p.id_prod=".$param['idprod']."");

foreach ($query->result() as $row)
		{
        	return $row->valor;
        
		}


}



public function consultasatelite($datos){


	$query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(".$datos['estado'].") and p.idpersona=".$datos['idpersona']."");


	return $query->result();
}

	 public  function lstsatelite($idtrabajador){
		 if($idtrabajador==0){
			 $query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(2,3,4)");
			 
		 }else{
		 
		


	 	$query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(2) and pr.idtrabajador=".$idtrabajador."");
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
	 	'precio1' => $param['preadmin'],

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

public  function listaoperarios(){


	

	$query=$this->db->query("select *from trabajador t
inner join persona p on t.idpersona = p.idpersona
inner join usuarios  u on u.idpersona = t.idpersona
where u.tipo in(2,3) and u.estado=1");
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
   	when 5 then 'ADM PROCESOS'
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
	$datos=array('estado'=>0);

	$this->db->where('idpersona',$param['idpersona']);
	$this->db->update('usuarios',$datos);

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



	  public  function ressatelite($idtrabajador){

	  	$query=$this->db->query("select idproceso from proceso where estado=4 and idtrabajador=".$idtrabajador);


	  	return $query->result();




	  }


	  public  function addres($d){


	  	//return $l=sizeof($idproceso);
	  	//for ($i=0; $i < sizeof($idproceso); $i++) { 
	  		$this->db->query($d);
	  	//}



	  	


	  }

	   public function historialSatelite(){
		   $query=$this->db->query("select p.idtrabajador,pe.nombres,sum(precio)as saldo, s.fecha 
		   from proceso p
		   inner join trabajador t on t.idtrabajador= p.idtrabajador
		   inner join persona pe on pe.idpersona = t.idpersona
		   inner join historialsatelite s on s.idproceso = p.idproceso
		   where p.estado=3 group by p.idtrabajador,s.fecha");

		   return $query->result();


	   }


	    public  function resSAtefecha($arreglo){

			$query=$this->db->query("select idproceso,pd.nomprod,pe.factura,pe.facultad,pe.talla,pr.cantidad,pr.precio,pr.fecha,pr.estado,pr.idtrabajador,pe.descripcion,pe.fecha_ingreso,p.nombres,pr.prebordado
			from proceso pr 
			inner join pedido pe  on pe.idpedido = pr.idpedido
			inner join producto pd on pd.id_prod = pr.id_prod
			inner join trabajador tr on tr.idtrabajador=pr.idtrabajador
			inner join persona p on p.idpersona=tr.idpersona
			where pr.estado in(3) and pr.idtrabajador=".$arreglo['idtrabajador']." and 
      pr.idproceso in ( select sa.idproceso from historialsatelite sa  where sa.fecha='".$arreglo['fecha']."')");

		   return $query->result();


		}


}


 ?>