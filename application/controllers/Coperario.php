<?php 


class Coperario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Moperario');
	}


	public  function index(){


	$nombres['nombres']=$this->session->userdata('nombres');
	$idpersona['idpersona']=$this->session->userdata('idpersona');

	$this->load->view('layou/header',$nombres);
	$this->load->view('layou/menu',$nombres);
	
	$this->load->view('voperario',$idpersona);
	
	
	

	$this->load->view('layou/footer',$nombres);

	}


	public function creargrupo()
	{
		
			$datos['idtrabajador']=1;//$this->input->post('idtrabajador');
			$datos['idusuario']=1;//$this->input->post('idusuario');
			$datos['porcentaje']=100;//$this->input->post('porcentaje');
			$res=$this->Moperario->creagrupo($datos);//valida  si  existe  un grupo

			$p=$datos['porcentaje']/100;//obtenemos el  valor decimal


			if($res==0){


				if($p>1){
					//validamos  si el porcentaje es mayor al 100%

					echo "es mayor al 100%";

				}else{

					//creamos nuevo  grupo
				$this->Moperario->addnewgroup($datos);

				}


			}else{

				//aqui se   debe  agregar participante al grupo

				//validamos si el porcentaje ingresado no supera el 100%
				$porcenAcumulado=$this->Moperario->validaporcentaje($datos);

				

				
				$x=$porcenAcumulado+$datos['porcentaje'];

				if($x>100){
					echo "el porcentaje es muy alto";

				}else{

					//echo "si puedes agregar el valor";
					$this->Moperario->addnewgroup($datos);

					echo 'Dtos cargados';

				}



			}

			//$this->Moperario->validaporcentaje($datos);


			//$this->Moperario->asignargrupo();


		
	}





	public function listaproceso(){

		$param['idpersona']=$this->input->post('idpersona');




	}

 public function ingresarproceso(){


	 		$param['idpedido']=$this->input->post('idpedido');
			$param['cantidad']=$this->input->post('cantidad');


			
			
			$comp=$this->Moperario->calculo($param);

			 if($comp== null){
		 	$comp=$this->Moperario->pedidoscant($param);
		 	$disp=$comp;
		

		}else{

			$disp=$comp;

		}


			
			
		if($disp<$param['cantidad']){
				return 0;
				
			}else{
				
		
	 	$param['idprod']=$this->input->post('productos');
	 	//$param['idpedido']=$this->input->post('idpedido');
	 	$param['idpersona']=$this->input->post('trabajador');
	 	//echo $param['idpedido'];
	 	//echo $param['idtrabajador'];
	 	$preciob=$this->Moperario->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$param['idtrabajador']=$this->Moperario->trabajadorid($param);
	    $param['idtrabajador'];



$res=$this->Moperario->ingresarproceso($param);

	 	 if ($res>=1){
	 	 	$o=$this->Moperario->seguimiento($param);
	 	 	echo 'Registro reportado';

	 	 }else{

	 	 	echo 'Error en proceso';

	 	 }
				
				
			}	
			


	 }




}

 ?>