<?php 

class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
<<<<<<< HEAD
		/*$this->db->select('u.name , u.password');
		$this->db->from('usuarios u');
		$this->db->where('u.name',$param['user']);
		$this->db->where('u.password',$param['pass']);
		$this->db->where ('u.tipo','1');/*/
		//$this->db->select('persona_idpersona,name')->from('usuarios')->where('name',$param['user'])->where('password',$param['pass']);
=======
		
	$this->db->select('u.name,u.password,u.tipouser')->from('usuarios u')->where('u.name=',$param['user'])->where('u.password=',$param['pass'])->where('u.tipouser=',1);
>>>>>>> 185f8d0f33714c7834defdae6f21ec0ec320aed3

		$this->db->query("SELECT  FROM usuarios where name=".$param['user']." ");

		
	 $resultado=$this->db->get();

<<<<<<< HEAD
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
=======
		if ($resul->num_rows()>0) {

			$p=$resul->row();
			//return'usuario encontrado';

			$r = array(
				'id' => $p->name,
				'pass'=>$p->password,
				'tipouser'=>$p->tipouser


						 );

			$this->session->set_userdata($r);


			
		return 1;
		
		} else {
			return 0;
		}
>>>>>>> c8359a81ccb16a9a69a1d93902c351cf8826bf5c
		



	}


}

 ?>