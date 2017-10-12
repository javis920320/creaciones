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





}



 ?>