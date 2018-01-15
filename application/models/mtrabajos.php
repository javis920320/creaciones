<?php 


class Mtrabajos extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();


	}

public  function lsttipoprod($param){

 /*$query=$this->db->query("select distinct(t.nomtipoprod) from pedido p
     inner join tipo_producto t on p.idtipoprod = t.idtipoprod 
     where p.factura ="+$param['fac']+" and p.estado=3");

 if($query->num_rows()>0){
 	 return$query->result();

 }else{
  return 0;

 }*/

 $this->db->select('distinct(t.nomtipoprod),t.idtipoprod');
 $this->db->from('pedido p');
 $this->db->join('tipo_producto t','p.idtipoprod = t.idtipoprod');
 $this->db->where('p.factura',$param['fac']);
$this->db->where('p.estado',3);



	$resul=$this->db->get();
		if($resul->num_rows()>0){
			//$r=$resultados->row();
			 //$arreglo = array('nombre' => $r->nombres);
			//return $r;
			return $r=$resul->result();

			//return 1;

		}else{


			return 0;
		}



 } 


	public function insertrabajo($param){


	$datos=array(

		'idproceso'=>null,
		'cantidad'=>$param['cantidad'],
		'estado'=>1,
		'fecha'=>date("Y/m/d"),
		'idpedido'=>$param['idpedido'],
		'idtrabajador'=>$param['idtrabajador']

				);	

		$this->db->insert('proceso',$datos);

		return true;
	}


	public  function buscarpedido($dato){
		$datos = array('fac' =>$dato['fac'] );


		 $this->db->select('p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,tp.idtipoprod,tp.nomtipoprod');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->where('p.factura',$datos['fac']);
		$this->db->where('p.estado',3);
		$this->db->order_by('fecha_ingreso', 'DESC');

		

		$resul=$this->db->get();
		if($resul->num_rows()>0){
			//$r=$resultados->row();
			 //$arreglo = array('nombre' => $r->nombres);
			//return $r;
			return $r=$resul->result();

			//return 1;

		}else{


			return 0;
		}



	}


	public  function filtrarpedido($param){


		$datos = array('fac' =>$param['fac'] );

		 $this->db->select('p.idpedido,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,tp.idtipoprod,tp.nomtipoprod');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		$this->db->join('tipo_producto tp','tp.idtipoprod=p.idtipoprod');
		$this->db->where('p.factura',$param['fac']);
		$this->db->where('tp.idtipoprod',$param['dato']);

		$this->db->where('p.estado',3);
		$this->db->order_by('fecha_ingreso', 'DESC');

		

		$resul=$this->db->get();
		if($resul->num_rows()>0){
			//$r=$resultados->row();
			 //$arreglo = array('nombre' => $r->nombres);
			//return $r;
			return $r=$resul->result();

			//return 1;

		}else{


			return 0;
		}


	}


		//$res2=$this->Mtrabajos->pedidoscant($param);
	public  function procesoscant($param){

		
	 		$this->db->select_sum('cantidad');
	 		$this->db->from('proceso');
	 		$this->db->where('idpedido',$param['idpedido']);

	 	$resul=$this->db->get();
		return $res=$resul->row();




	}

	public  function calculo($param){

		
	 		$query=$this->db->query('select (select p.cantidad  from pedido p where p.idpedido='.$param['idpedido'].' )-sum(pr.cantidad)as numero from proceso pr where pr.idpedido='.$param['idpedido'].'');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->numero;
        
		}

	


			




	}




	public  function pedidoscant($param){

		$query=$this->db->query('select sum(pr.cantidad)as numero from pedido pr where pr.idpedido='.$param['idpedido'].'');
	 		
		

		foreach ($query->result() as $row)
		{
        	return $row->numero;
        
		}




	}

	public function listaprocesos($user){



		$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,pr.fecha');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');	
		$this->db->where('pe.idpersona',$user['user']);
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->or_where('pr.fecha>=x.fechaf');
		//inner join trabajador  t on t.idtrabajador=t.idtrabajador
//inner join persona pe on pe.idpersona=t.idpersona;




		$resul=$this->db->get();
		if($resul->num_rows()>0){
			//$r=$resultados->row();
			 //$arreglo = array('nombre' => $r->nombres);
			//return $r;
			return $r=$resul->result();

			//return 1;

		}else{


			return 0;
		}




	}





	public  function tblresumen(){



		$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,(sum(bp.cantidad)*pr.cantidad) as nbordados,prebordado as valor bordado,pr.fecha,pe.nombres');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->result(); 

/*		$query=$this->db->query("select pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,(sum(bp.cantidad)*pr.cantidad) as nbordados,(sum(b.precio)*pr.cantidad)'valor bordado',pr.fecha,pe.nombres
			from proceso pr
			inner join producto p on p.id_prod=pr.id_prod
			inner join  bordadosproductos bp on p.id_prod = bp.id_prod
			inner join bordados b on b.idbordados = bp.idbordados
			inner join pedido pd on pd.idpedido=pr.idpedido
			inner join trabajador t on t.idtrabajador=pr.idtrabajador
			inner join persona pe on pe.idpersona=t.idpersona
			where pr.fecha>=".$param['fechai']." and  pr.fecha<=".$param['fechaf']."
			group by pr.idproceso,bp.id_prod
		");

		return $query->result();*/


		//$this->db->where('pe.idpersona',$user['user']);



	}
	
	
	public  function resumen(){



		$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,pr.fecha,pe.nombres');
		$this->db->from('proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->order_by('fecha','DESC');
		//$this->db->where('pr.fecha>=',$param['fechai']);
		//$this->db->where('pr.fecha<=',$param['fechaf']);


		$res=$this->db->get();	

		return$res;//->result(); 
		//$this->db->where('pe.idpersona',$user['user']);



	}
	
	
	public function resumentotal(){
		
		$query=$this->db->query("select sum(precio1)as prep ,sum(prebordado)as preb,sum(precio1+prebordado) as pret from proceso,periodo
  where fecha>=fechai and  fecha<=fechaf");
	return $query->result();
	/*$this->db->select("sum(precio1)as prep ,sum(prebordado)as preb,sum(precio1+prebordado) as pret");
	$this->db->from("proceso");
	$this->db->where('fecha>=',$param['fechai']);
	$this->db->where('fecha<=',$param['fechaf']);
	$res=$this->db->get();	

		return$res;*/
	}









public  function tblexcel($param){



		$this->db->select('pr.idproceso as PROCESO,pd.factura AS FACTURA,pd.facultad  AS FACULTAD,p.nomprod AS PRODUCTO,pd.descripcion AS DESCRIPCION,pr.cantidad AS CANTIDAD,pr.precio1 AS PRECIO,(sum(bp.cantidad)*pr.cantidad) as BORDADOS,prebordado AS PREBORDADO,pr.fecha AS FECHA,pe.nombres AS CLIENTE');
		$this->db->from('periodo x ,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('cliente c ','c.idcliente=pd.idcliente');
		//$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');

		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->result(); 
		//return$res;





	}
	public  function tbltitle($param){



		$this->db->select('pr.idproceso as PROCESO,pd.factura AS FACTURA,pd.facultad AS FACULTAD,p.nomprod AS PRODUCTO,pd.descripcion AS DESCRIPCION,pr.cantidad AS CANTIDAD,pr.precio1 AS PRECIO,(sum(bp.cantidad)*pr.cantidad) as BORDADOS,prebordado AS PREBORDADO,pr.fecha AS FECHA,pe.nombres AS CLIENTE');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('cliente c ','c.idcliente=pd.idcliente');
		//$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
		
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->list_fields(); 
		//return$res;





	}
	
	
	 public  function tblperiodo(){
		 
		 $this->db->select('p.idperiodo,p.fechai,p.fechaf');
		 $this->db->from('periodo p');
		 $res=$this->db->get();
		 
		 return $res->result();
	 }
	 
	 
	 public  function updateperiodo($param){
		 $datos = array('fechai' =>$param['fechai'],'fechaf' =>$param['fechaf'] );
		 
		 $this->db->where('idperiodo',$param['idperiodo']);
		 $this->db->update('periodo',$datos);
		 $res=$this->db->affected_rows();
		return$res;
	 }
	 
	 
	 
	  public function calcular($param){
//select sum(cantidad),sum(precio) from proceso where fecha between '2017-09-20' and '2017-10-31' and idtrabajador=1

	$this->db->select('sum(p.precio1) as valor,sum(p.precio) as valoro');
	$this->db->from('periodo pr,proceso p');
	$this->db->where('p.idtrabajador',$param['idtrabajador']);
	$this->db->where('p.fecha >=',' pr.fechai');
	$this->db->or_where('p.fecha<=','pr.fechaf');
	

	$resul=$this->db->get();
	return $resul->result();


	/*$resul=$this->db->query("select sum(p.precio1) as valor from proceso p,periodo pr
 where p.idtrabajador=".$param['idtrabajador']." and  p.fecha between pr.fechai and pr.fechaf");
	return $resul->result();*/





 }
 
 
   public  function trabajadorid($param){

	  
	 		$query=$this->db->query('select  t.idtrabajador  from trabajador t where t.idpersona='.$param['idpersona'].' ');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->idtrabajador;
        
		}



	  }
	 
	 
	 

	}




 ?>