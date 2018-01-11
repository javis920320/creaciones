<?php 

/**
* 
*/
class Mbordados extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	 public  function listabordados(){


	 $this->db->select ('idbordados,nombre,precio');
	 $this->db->from('bordados');


	 $resul=$this->db->get();
		return $resul->result();


	 }


	  public  function ingresarbordado($param){


	  	 $datos= array('idbordados' => null, 'nombre' => $param['nombre'],'precio' => $param['precio']);


	  	$this->db->insert('bordados',$datos);

	  	$res=$this->db->affected_rows();
		return$res;
	  }


	   public  function editarbordados($param){

	   	$datos = array('nombre' =>$param['nombre'] ,'precio' =>$param['precio'] );

	   	$this->db->where('idbordados',$param['idbordados']);
	   	$this->db->update('bordados',$datos);
	   	$res=$this->db->affected_rows();
		return$res;
	   }
	   
	   
	    public function eliminarb($param){
			
			$this->db->where('idbordados',$param['idbordados']);
			$this->db->delete('bordados');
			$res=$this->db->affected_rows();
		return$res;
			
			
		}
}


 ?>