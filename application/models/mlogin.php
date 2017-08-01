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
		$this->db->select('u.name , u.password');
		$this->db->from('usuarios u');
		$this->db->where('u.name',$param['user']);
		$this->db->where('u.password',$param['pass']);
		$this->db->where ('u.tipouser','1');

		$resul=$this->db->get();


		if ($resul->num_rows()>0) {
			//return'usuario encontrado';

			$res=$resul->row();
			if (isset($res)) {

				return$res->tipouser;
			} else {
				return'nada';
			}
			

		
		} else {
			$resp='Usuario no existe o esta inactivo';
			redirect('loginuser/',$resp);
		}
		



	}
}

 ?>