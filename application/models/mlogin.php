<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	function __construct()
	{
		# code...
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
		/*$this->db->select('u.name , u.password');
		$this->db->from('usuarios u');
		$this->db->where('u.name',$param['user']);
		$this->db->where('u.password',$param['pass']);
		$this->db->where ('u.tipo','1');/*/
		//$this->db->select('persona_idpersona,name')->from('usuarios')->where('name',$param['user'])->where('password',$param['pass']);

		$this->db->query("SELECT  FROM usuarios where name=".$param['user']." ");

		
	 $resultado=$this->db->get();

	   if ($resultado->num_rows() == 1) {
	  		$res=$resultado->row();


	  		$r = array(

	  			'session_id' => $res->persona_idpersona, 
	  			'session_nombre' => $res->name 


	  			);
		    $this->load->library('session');
	  		$this->session->set_userdata($r);
	  		return 1;

	   } else {
	   	return 0;
	   }
		



	}


}

 ?>