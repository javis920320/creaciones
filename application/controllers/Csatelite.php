<?php 
class Csatelite extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Madmin');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');
	 		$idpersona['idpersona']=$this->session->userdata('id');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vsatelite',$idpersona);
	 	$this->load->view('layou/footer',$nombres);




	 }


	   public function valorcero(){

$nombres['nombres']=$this->session->userdata('nombres');
	 		$idpersona['idpersona']=$this->session->userdata('id');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vasignar',$idpersona);
	 	$this->load->view('layou/footer',$nombres);


	  }




public  function listasatelites(){


	

	$res=$this->Madmin->listasatelites();

	 echo json_encode($res);





}

public  function lstoptaller(){


	

	$res=$this->Madmin->listaoperarios();

	 echo json_encode($res);





}




public  function lstsatelite(){


	$param['idpersona']=$this->input->post('idpersona');
	
	$param['idtrabajador']=$this->Madmin->idtrabajador($param);

	$res=$this->Madmin->lstsatelite($param['idtrabajador']);

	 echo json_encode($res);





}


public  function consultasatelite(){
//creamos la  funcion para llamar desde  cualquier lado  cualquier lista de satelites
	$datos['idpersona']=$this->input->post('idpersona');
	$datos['estado']=$this->input->post('estado');
	$res=$this->Madmin->consultasatelite($datos);
	echo json_encode($res);
}


public  function vistalistacobro(){
$nombres['nombres']=$this->session->userdata('nombres');
	 		$idpersona['idpersona']=$this->session->userdata('id');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vlistacobro',$idpersona);
	 	$this->load->view('layou/footer',$nombres);

}



public  function asignarsatelite(){




	$param['idpedido']=$this->input->post('idpedido');
	$param['cantidad']=$this->input->post('cantidad');
	
	
	
	$comp=$this->Madmin->calculo($param);
	if($comp==null){
		$comp=$this->Madmin->consultadis($param);
		$disp=$comp;
		
	}else{
		
		$disp=$comp;
		
	}
	 //echo$disp;
	
		if($disp<$param['cantidad']){
				//return 0;
				echo'Verifica la cantidad disponible';
				
			}else{
		//echo'sise puesde';
		
	 	$param['idprod']=$this->input->post('productos');
	 	$param['idpersona']=$this->input->post('trabajador');
	 	$param['idtrabajador']=$this->Madmin->idtrabajador($param);	 	
	 	$param['fecha']=date ("Y-m-d");
	 	$preciob=$this->Madmin->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$presate=$this->Madmin->preciosatelite($param);
	 	$preadmin=$this->Madmin->preadmin($param);
	 	$param['preadmin']= $preadmin*$param['cantidad'];
	 	$param['preciosatelite']=$presate*$param['cantidad'];

		$res=$this->Madmin->asignarsatelite($param);


		if ($res>=1) {
	$o=$this->Madmin->seguimiento($param);
			echo'Registro Asignado';
			# code...
		}else{
			echo'No se a podido Asisgnar el producto';
		}
	 	
		}



}



public function aplicarvalorcero(){


	$param['idpedido']=$this->input->post('idpedido');
	$param['cantidad']=$this->input->post('cantidad');
	
	
	
	$comp=$this->Madmin->calculo($param);
	if($comp==null){
		$comp=$this->Madmin->consultadis($param);
		$disp=$comp;
		
	}else{
		
		$disp=$comp;
		
	}
	 //echo$disp;
	
		if($disp<$param['cantidad']){
				//return 0;
				echo'Verifica la cantidad disponible';
				
			}else{
		//echo'sise puesde';
		
	 	$param['idprod']=$this->input->post('productos');
	 	//$param['idpersona']=$this->input->post('trabajador');
	 	$param['idtrabajador']=$this->input->post('trabajador');//$this->Madmin->idtrabajador($param);	 	
	 	$param['fecha']=date ("Y-m-d");
	 	$preciob=$this->Madmin->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$presate=$this->Madmin->preciosatelite($param);
	 	$preadmin=$this->Madmin->preadmin($param);
	 	$param['preadmin']= 0;//$preadmin*$param['cantidad'];
	 	$param['preciosatelite']=0;//$presate*$param['cantidad'];

		$res=$this->Madmin->valorcero($param);


		if ($res>=1) {
			$o=$this->Madmin->seguimiento($param);
			echo'Registro Asignado';
			# code...
		}else{
			echo'No se a podido Asisgnar el producto';
		}
	 	
		}

}


public function ingresoproceso(){


		/*if($this->input->post('tpv')==2){
			$precioop=$this->Madmin->precionocturno($param);
		}else{

		$precioop=$this->Madmin->precionormal($param);

		}*/


	$param['idpedido']=$this->input->post('idpedido');
	$param['cantidad']=$this->input->post('cantidad');
	
	
	
	$comp=$this->Madmin->calculo($param);
	if($comp==null){
		$comp=$this->Madmin->consultadis($param);
		$disp=$comp;
		
	}else{
		
		$disp=$comp;
		
	}
	 //echo$disp;
	
		if($disp<$param['cantidad']){
				//return 0;
				echo'Verifica la cantidad disponible';
				
			}else{


		$tpv=$this->input->post('tpv');

			$param['idprod']=$this->input->post('productos');
	 	//$param['idpersona']=$this->input->post('trabajador');
	 	$param['idtrabajador']=$this->input->post('trabajador');//$this->Madmin->idtrabajador($param);	 	
	 	$param['fecha']=date ("Y-m-d");
	 	$preciob=$this->Madmin->presiobordados($param);
	 	$param['preciob']=$preciob*$param['cantidad'];
	 	$preadmin=$this->Madmin->preadmin($param);

		if ($tpv==2) {
			$precioop=$this->Madmin->precionocturno($param);
		}else{

			$precioop=$this->Madmin->precionormal($param);

		}

	 	
	 	$param['preadmin']= $preadmin*$param['cantidad'];
	 	$param['precioop']=$precioop*$param['cantidad'];


		
	 

		$res=$this->Madmin->ingoperario($param);
		$this->Madmin->tipoprecio($res,$tpv);


		if ($res>=1) {
			$o=$this->Madmin->seguimiento($param);
			echo'Registro Asignado';
			# code...
		}else{
			echo'No se a podido Asisgnar el producto';
		}
	 	
		}

}






public function SaldoPendiente(){
	
	$param['idpersona']=$this->input->post('persona');
	
		$param['idtrabajador']=$this->Madmin->idtrabajador($param);
		
		$res=$this->Madmin->SaldoPendiente($param);
		echo json_encode($res);
		
		
	
}

public  function pruebaf(){
	
	$param['idpedido']=747;
	
	$presate['que']=$this->Madmin->consultadis($param);
	echo json_encode ($presate['que']);
	
	
}


public  function cambiolista(){

	 $data = json_decode(stripslashes($_POST['array']));

		  	$res=$this->Madmin->cambiolista($data);

		  	echo $res;

}



}






 ?>