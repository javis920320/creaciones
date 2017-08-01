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
			while ($r=$resul->fetch_array) {
				$retu[]=$r;
			}

			return $retu;
		
		} else {
			$resp='Usuario no existe o esta inactivo';
			redirect('loginuser/',$resp);
		}
		



	}
}

 ?>