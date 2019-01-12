<?php 


class Mtrabajos extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();


	}


	 public function valorAdelanto($idUsuario){

	 	try {
	 		$query=$this->db->query("select t1.idtrabajador,t1.valor from periodo pr,trabajador_adelanto t1 where pr.estado=1 and t1.idtrabajador in(select t.idtrabajador from persona pe inner join trabajador t on t.idpersona=pe.idpersona inner join usuarios u on u.idpersona=pe.idpersona where u.idusuarios=1) GROUP by t1.idtrabajador");

	 			foreach ($query->result() as $row)
		{
        	return $row->valor;
        
		}

	 	} catch (Exception $e) {
	 		echo $e;
	 	}

	 }

	public function sumavalor($datos){

		$query=$this->db->query("select sum(precio)as precio  from periodo x,proceso pro
                         inner join trabajador t on t.idtrabajador = pro.idtrabajador
                         where t.idtrabajador in(select y.idtrabajador from trabajador y   where y.idpersona=".$datos['user'].") and  x.idperiodo=".$datos['idper']."  and pro.fecha between x.fechai and x.fechaf   ");

			foreach ($query->result() as $row)
		{
        	return $row->precio;
        
		}

	}



	 public  function generanomina(){

	 	$this->db->query("insert into saldo_trabajador(fecha,estado,valor,valoradelanto,idtrabajador,idperiodo)
select now(),1, sum(pr.precio),sum(ad.valor),t.idtrabajador,per.idperiodo
from periodo per,trabajador t
inner join persona p on p.idpersona = t.idpersona
inner join usuarios u on u.idpersona = p.idpersona
inner join proceso pr on pr.idtrabajador = t.idtrabajador
left join trabajador_adelanto ad  on ad.idtrabajador = pr.idtrabajador
where u.tipo=2 and per.estado=1 group by t.idtrabajador,ad.idadelanto;");



	 	$res=$this->db->affected_rows();
		return true;



	 }

	
	public  function res_per($data){
		
		
		$res=$this->db->query("select pr.idproceso,pd.factura,pd.facultad,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.fecha 
     from periodo x ,proceso pr
      inner join producto p  on p.id_prod=pr.id_prod
       inner join pedido pd on pd.idpedido = pr.idpedido
       inner join trabajador t on t.idtrabajador=pr.idtrabajador
       inner join persona pe on pe.idpersona = t.idpersona
       where pr.estado=1 and pe.idpersona=".$data['idtrabajador']." and x.idperiodo=".$data['idperiodo']." and pr.fecha between  x.fechai and x.fechaf");
	   
	   return $res->result();
	   
	   
	   
		
	}
	
	


	/* EN ESTA  PARTE  GENERAMOS LOS RESUMENES DE LOS  ANTERIORES PERIODOS  DE SALDOS CANCELADOS A OPERARIOS DE TALLER */
	  public  function  periodosaldo ($param){

	$query=$this->db->query("select pe.nombres as nombres,sum(pr.cantidad)as cantidad,sum(pr.precio)as saldo,x.fechai as fechai,x.fechaf as fechaf
  from periodo x,proceso pr
  inner join trabajador tr on tr.idtrabajador = pr.idtrabajador
  inner join persona pe on pe.idpersona = tr.idpersona
  inner join usuarios u on u.idpersona = pe.idpersona
  where u.tipo in(3,2) and x. idperiodo=".$param['idperiodo']." and  pr.fecha between x.fechai and x.fechaf group by tr.idtrabajador");

       
		return $query->result();



	  }

	    public  function  saldoalmacen ($param){

	$query=$this->db->query("select sum(pr.precio1)as prep ,sum(pr.prebordado)as preb,sum(pr.precio1+pr.prebordado) as pret from proceso pr,periodo per
  where pr.fecha between per.fechai and per.fechaf and pr.estado=1 and per.idperiodo=".$param['idperiodo']);

       
		return $query->result();



	  }

	  public  function saldo(){


     	$query=$this->db->query('select sum(bp.precio*pr.cantidad)as saldot,sum(bp.cantidad) as cb
from prendas pr
inner join bordadosprendas bp on bp.idprendas = pr.idprendas
where pr.estado=1');

     	return$query->result();
     }

	  


	  /****fin cambios**/


public  function listavalorcero(){


	$query=$this->db->query(" select p.idproceso,pe.factura,pe.facultad,pe.talla,pro.nomprod,pe.descripcion,p.cantidad,p.prebordado,p.precio,p.fecha,pr.nombres
 from  periodo per,proceso p
 inner join  pedido pe on pe.idpedido = p.idpedido
 inner join tipo_producto tp on tp.idtipoprod = pe.idtipoprod
 inner join producto pro  on p.id_prod=pro.id_prod
 inner join trabajador t on t.idtrabajador = p.idtrabajador
 inner join persona  pr on pr.idpersona = t.idpersona
 inner join usuarios u on u.idpersona = pr.idpersona
 where u.tipo=4 and p.estado=1 and p.fecha between per.fechai and per.fechaf");


	return $query->result();

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

	$res=$this->db->query(" select p.idpedido,p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso,tp.idtipoprod,tp.nomtipoprod
		from pedido p 
		inner join cliente c on c.idcliente=p.idcliente
		inner join persona pe on pe.idpersona=c.idpersona
		inner join tipo_producto  tp on tp.idtipoprod=p.idtipoprod
		where p.factura=".$param['fac']." and tp.idtipoprod=".$param['dato']." and p.estado=3 and 
    p.idpedido not in(select pr.idpedido from proceso pr
    inner join pedido pd on pd.idpedido = pr.idpedido
    where pr.cantidad-pd.cantidad=0
     ) order by p.fecha_ingreso desc");
		return $res->result();



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
	
	public function procesos(){
	    
	}
	

	public function listaprocesos($user){

$query=$this->db->query("select pr.idproceso,pd.factura,pd.facultad,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,pr.fecha 
     from periodo x ,proceso pr
      inner join producto p  on p.id_prod=pr.id_prod
       inner join pedido pd on pd.idpedido = pr.idpedido
       inner join trabajador t on t.idtrabajador=pr.idtrabajador
       inner join persona pe on pe.idpersona = t.idpersona
       where pr.estado=1 and pe.idpersona=".$user['user']." and x.estado=1 and pr.fecha between  x.fechai and x.fechaf
 				");

		return $query->result();
	




	}





	public  function tblresumen(){



		$this->db->select('pr.idproceso,pd.factura,pd.facultad,pd.talla,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,(sum(bp.cantidad)*pr.cantidad) as nbordados,prebordado as valor bordado,pr.fecha,pe.nombres');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->where('x.estado',1);
		$this->db->where('pr.estado=1');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->result(); 


		



	}


	
	

	public function datares(){
		



	$query=$this->db->query("select sum(pr.precio1)as PRECIOCONFECCION ,sum(pr.prebordado)as PRECIOBORDADO,sum(pr.precio1+pr.prebordado) as PRECIOTOTAL from proceso pr,periodo per
  where pr.fecha>=per.fechai and  pr.fecha<=per.fechaf and pr.estado=1 and per.estado=1");
	return $query->result();
	
	}

	public function titleresumentotal(){
		



	$query=$this->db->query("select sum(pr.precio1)as PRECIOCONFECCION ,sum(pr.prebordado)as PRECIOBORDADO,sum(pr.precio1+pr.prebordado) as PRECIOTOTAL from proceso pr,periodo per
  where pr.fecha>=per.fechai and  pr.fecha<=per.fechaf and pr.estado=1 and per.estado=1");
	return$query->list_fields(); 
	
	}
	
	public  function tblresumeno(){



		$this->db->select('pr.idproceso,pd.factura,pd.facultad,pd.talla,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,(sum(bp.cantidad)*pr.cantidad) as nbordados,prebordado as valor bordado,pr.fecha,pe.nombres');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->where('x.estado',1);
		$this->db->where('pr.estado=1');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->result(); 


		



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
		


		/* se actuliza  esta consulta por que se debio modificar los alias de  la consulta
		$query=$this->db->query("select sum(precio1)as prep ,sum(prebordado)as preb,sum(precio1+prebordado) as pret from proceso,periodo
  where fecha>=fechai and  fecha<=fechaf and estado=1");
	return $query->result();*/


	$query=$this->db->query("select sum(pr.precio1)as prep ,sum(pr.prebordado)as preb,sum(pr.precio1+pr.prebordado) as pret from proceso pr,periodo per
  where pr.fecha>=per.fechai and  pr.fecha<=per.fechaf and pr.estado=1 and per.estado=1");
	return $query->result();
	
	}








public  function tblexcel($param){



			$this->db->select('pr.idproceso as CODIGO,pd.factura AS FACTURA,pd.facultad AS FACULTAD,pd.talla AS TALLA,p.nomprod AS PRODUCTO,pd.descripcion AS DESCRIPCION,pr.cantidad AS CANTIDAD,pr.precio1 AS PRECIO,(sum(bp.cantidad)*pr.cantidad) as N_BORDADOS,prebordado as valor bordado,pr.fecha AS FECHA,pe.nombres AS NOM');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->where('x.estado',1);
		$this->db->where('pr.estado=1');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		return$res->result(); 





	}
	public  function tbltitle($param){



			$this->db->select('pr.idproceso as CODIGO,pd.factura AS FACTURA,pd.facultad AS FACULTAD,pd.talla AS TALLA,p.nomprod AS PRODUCTO,pd.descripcion AS DESCRIPCION,pr.cantidad AS CANTIDAD,pr.precio1 AS PRECIO,(sum(bp.cantidad)*pr.cantidad) as N_BORDADOS,prebordado as valor bordado,pr.fecha AS FECHA,pe.nombres AS NOM');
		$this->db->from('periodo x,proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join ('bordadosproductos bp','p.id_prod = bp.id_prod');
		$this->db->join(' bordados b ', 'b.idbordados = bp.idbordados');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');
		$this->db->join('trabajador t','t.idtrabajador=pr.idtrabajador');
		$this->db->join('persona pe','pe.idpersona=t.idpersona');
		$this->db->where('pr.fecha>=x.fechai');
		$this->db->where('pr.fecha<=x.fechaf');
		$this->db->where('x.estado',1);
		$this->db->where('pr.estado=1');
		$this->db->group_by('pr.idproceso,bp.id_prod');


		$res=$this->db->get();	

		//return$res->result(); 	

		return$res->list_fields(); 
		//return$res;





	}
	
	
	 public  function tblperiodo(){
		 
		 $this->db->select('p.idperiodo,p.fechai,p.fechaf,p.estado');
		 $this->db->from('periodo p');
		 $this->db->where('estado=',1);
		 $res=$this->db->get();
		 
		 return $res->result();
	 }
	  public  function tblperiodoc(){
		 
		 $this->db->select('p.idperiodo,p.fechai,p.fechaf,p.estado');
		 $this->db->from('periodo p');
		 //$this->db->where('estado=',1);
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


	 	 public  function Nuevoperiodo($param){
		 $datos = array('idperiodo'=>null,'fechai' =>$param['fechai'],'fechaf' =>$param['fechaf'] ,'estado'=>true);
		 
		 $this->db->insert('periodo',$datos);
		 $res=$this->db->affected_rows();
		return$res;
	 }
	 
	 public  function desctivarperiodo(){

		 	$datos = array('estado' => false );
		 $this->db->update('periodo',$datos);
		 $res=$this->db->affected_rows();

if($res>0){

	return true;
}

		

	 }
	 
	 
	 
	  public function calcular($param){



	$resul=$this->db->query("select sum(p.precio) as 'valor' from periodo pr,proceso p
 where p.idtrabajador=".$param['idtrabajador']." and pr.estado=1 and p.fecha between pr.fechai and pr.fechaf");
	return $resul->result();





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