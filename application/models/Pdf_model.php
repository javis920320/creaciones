<?php
defined("BASEPATH") OR die("El acceso al script no está permitido");

class Pdf_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /* public function getProvincias()
    {
         $this->db->select('p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
        $resul=$this->db->get();
		return $resul->result();

    }*/

    public function imp($y){
		
		for ($i=0; $i<count($y) ; $i++){
			
			$query[$i]=$this->db->query("select * from pedido where idpedido=".$y[$i]."");
             return $query[$i]->result();

		
		}
         return $query->result();
	
		/*$query=$this->db->query("select * from pedido where idpedido=".$y."");
		return $query->result();*/
		

    }


    public  function procesos(){


        $query=$this->db->query("
select DISTINCT(p.idproceso),pe.factura,pe.facultad,pe.talla,pe.descripcion,pro.nomprod,p.cantidad,p.precio1,p.prebordado,p.fecha,per.nombres 
from periodo x,proceso p
inner join pedido pe on p.idpedido = pe.idpedido 
inner join tipo_producto tp on pe.idtipoprod = tp.idtipoprod 
inner join producto pro on pro.id_prod = p.id_prod 
inner join precio pre on pre.id_prod = p.id_prod
inner join trabajador t on t.idtrabajador = p.idtrabajador 
inner join persona per on per.idpersona = t.idpersona 
where p.fecha between x.fechai and x.fechaf order by per.nombres");



return $query->result();
    }


    public  function valores(){

        $query=$this->db->query("
select sum(p.precio1) as'vc',sum(p.prebordado) as 'vb',sum(p.precio1+p.prebordado) as'vt'
from periodo x ,proceso p
where p.fecha between x.fechai and x.fechaf");



return $query->result();



    }
	
	
	public  function satelite($s){
		
		
		 if($s==0){
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
			where pr.estado in(2) and pr.idtrabajador=".$s."");
			}


	 	return $query->result();
		
		
	}
	
	
	public  function saldosatelite($s){
		
		$query=$this->db->query("select sum(precio)pre,sum(prebordado)preb
				from proceso 
				where idtrabajador=".$s." and estado=2 ");
				
				
				return $query->result();
		
		
	}







}

