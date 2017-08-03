<?php 

class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
		
	$this->db->select('u.name,u.password,u.tipo,u.estado,u.persona_idpersona')->from('usuarios u')->where('u.name=',$param['user'])->where('u.password=',$param['pass'])->where('u.estado=',1);

		$resul=$this->db->get();


		if ($resul->num_rows()>0) {

			$p=$resul->row();
			//return'usuario encontrado';

			$r = array(
				'id' => $p->persona_idpersona,
				'name'=>$p->name,
				'tipo'=>$p->tipo


						 );

			$this->session->set_userdata($r);


			
		return 1;
		
		} else {
			return 0;
		}
		



	}
}

 ?>