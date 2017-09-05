<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mlogin extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function loguear($param){
	

	//consultas en  base de  datos 
		

		/**/
	//$this->db->select('u.name,u.password,u.tipo,u.estado,u.persona_idpersona')->from('usuarios u')->where('u.name=',$param['user'])->where('u.password=',$param['pass'])->where('u.estado=',1);
		$this->db->select('u.name,u.password,u.tipo,u.estado,u.idpersona,p.nombres');
		$this->db->from('usuarios u');
		$this->db->join('persona p','p.idpersona=u.idpersona');
		$this->db->where('u.name=',$param['user']);
		$this->db->where('u.password=',$param['pass']);

		$resul=$this->db->get();


		if ($resul->num_rows()>0) {

			$p=$resul->row();
			//return'usuario encontrado';

			$r = array(
				'id' => $p->idpersona,
				'name'=>$p->name,
				'tipo'=>$p->tipo,
				'nombres'=>$p->nombres


						 );

			$this->session->set_userdata($r);


			
		return 1;
		
		} else {
			return 0;
		}
		



	}
}

 ?>