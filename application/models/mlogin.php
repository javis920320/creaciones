<?php 
/**
* 
*/
class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
		/*$this->db->select('u.name , u.password');
		$this->db->from('usuarios u');
		$this->db->where('u.name',$param['user']);
		$this->db->where('u.password',$param['pass']);
		$this->db->where ('u.tipouser','1');*/

	$this->db->select('u.name,u.password')->from('usuarios u');//->where('u.tipouser=',1);

		$resul=$this->db->get();


		if ($resul->num_rows()>0) {

			$p=$resul->row();
			//return'usuario encontrado';

			$r = array(
				'id' => $p->name,
				'pass'=>$p->password


						 );

			$this->session->set_userdata($r);


			
		return $this->session->userdata('id');
		
		} else {
			return 0;
		}
		



	}
}

 ?>