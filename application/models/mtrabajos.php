<?php 


class Mtrabajos extends CI_Model
{
	
	function __construct()
	{
	parent::__construct();


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
		$this->db->where('p.estado',2);
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

		$this->db->where('p.estado',2);
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

	public function listaprocesos(){



		$this->db->select('pr.idproceso,pd.factura,p.nomprod,pd.descripcion,pr.cantidad,pr.precio,pr.precio1,pr.fecha');
		$this->db->from('proceso pr');
		$this->db->join('producto p','p.id_prod=pr.id_prod');
		$this->db->join('pedido pd','pd.idpedido=pr.idpedido');




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





}



 ?>