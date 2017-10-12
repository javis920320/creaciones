<?php 

class Moperario extends CI_MOdel
{
	
	function __construct()
	{
	parent::__construct();

	}



	 public  function ingresarproceso($param){

	 	$this->db->query("insert into proceso values(".null.",".$param['cantidad'].,'1',sysdate(),.$param['idprod'].,.$param['idpedido'].,.$param['idtrabajador'].,("select('p. subvalor*10') from 'precio p' 
inner join 'producto pr on pr.id_prod=p.id_prod where pr.id_prod='".$param['idprod']."' limit 1") );


	 }



}


 ?>