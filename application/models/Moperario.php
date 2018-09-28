<?php 

class Moperario extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();

	}


	public  function seguimiento($param){
$dato = array('accion' => 1 );

		$this->db->where('idpedido',$param['idpedido']);
		$this->db->update('pedido',$dato);

	 	$res=$this->db->affected_rows();
		return$res;


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


	 public  function ingresarproceso($param){

	 	
	 		$this->db->query("CALL PA_INGRESARPROCES(".$param['cantidad'].",".$param['idtrabajador'].",".$param['idprod'].",".$param['idpedido'].",".$param['preciob'].") " );

	 	$res=$this->db->affected_rows();
		return$res;




	 }


	  public  function trabajadorid($param){

	  
	 		$query=$this->db->query('select  t.idtrabajador  from trabajador t where t.idpersona='.$param['idpersona'].' ');
	 		
			
		foreach ($query->result() as $row)
		{
        	return $row->idtrabajador;
        
		}



	  }



	   public function addnewgroup($datos){

	   	$data = array(
	   					'idtrabajador' => $datos['idtrabajador'],
	   					'idusuario' => $datos['idusuario'],
	   					'porcentaje' => $datos['porcentaje'],
	   					'estado' => 1


	   				);



	   	$this->db->insert('grupo_distribucion',$data);



	   }



	  public  function validaporcentaje($datos){


	$res=$this->db->query("select sum(porcentaje) as 'valor' from grupo_distribucion where estado=1 and  idtrabajador=".$datos['idtrabajador']);

	 foreach ($res->result() as $row)
		{
        	return $row->valor;
        
		}

	  }



	


	  public function creagrupo($datos){


	  	$res=$this->db->query("select count(*)as 'idtrabajador' from grupo_distribucion where idtrabajador=".$datos['idtrabajador']);

	 foreach ($res->result() as $row)
		{
        	return $row->idtrabajador;
        
		}

	  }




}


 ?>