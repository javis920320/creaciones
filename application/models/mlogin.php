<?php 

class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
		
	$this->db->select('u.name,u.password,u.tipouser')->from('usuarios u')->where('u.name=',$param['user'])->where('u.password=',$param['pass'])->where('u.tipouser=',1);

		$resul=$this->db->get();


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
		



	}
}

 ?>