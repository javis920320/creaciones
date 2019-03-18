<?php 
ini_set('date.timezone','America/Bogota');

class Cpedidomultiple extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Mpedidos');
	}


public  function pedidosVersion2019(){

$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('pedidos2019');
		$this->load->view('layou/footer');
}



	public  function index(){
		$this->output->cache(15);

		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vpedidomultiple');
		$this->load->view('layou/footer');
	}


	   public function RecepcionPed()
	 {
	 	//$this->output->cache(15);

		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		//$this->load->view('vrecepcion');
		$this->load->view("recepcionpedidos");
		$this->load->view('layou/footer');
	 }




	public  function cantidadpedidos(){

		$res=$this->Mpedidos->cantidadpedidos();
		echo json_encode($res);


	}

	 public  function lstpedidosdia(){


	 }
	public  function tipoprod(){

		$idtipoprod=$this->input->post('id');

		$res=$this->Mpedidos->tipo_producto($idtipoprod);
		echo $res;


	}




	public  function realizarpedidos(){

		$nombres['nombres']=$this->session->userdata('nombres');
		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('v2pedidos');
		$this->load->view('layou/footer');

	}


	public  function tipoentidad(){

	$tipoentidad=$this->input->post('tipoentidad');


	$res=$this->Mpedidos->tipoentidad($tipoentidad);
	echo json_encode($res);




	}



	public   function  dependencia(){



		$idpendencia=$this->input->post('dep');
		$res=$this->Mpedidos->dependencia($idpendencia);
		echo json_encode($res);
	}


 public function nwdependencia(){

 	$dato['identidad']=$this->input->post('identidad');
 	$dato['nombredep']=$this->input->post('nombredep');


 	$resp=$this->Mpedidos->nwdependencia($dato);
 	if($resp>0){
			echo "nueva dependencia creada con exito";

		}else{
			echo "Tarea no realizada";
		}

 }

	public  function nuevaentidad(){

		$dato['nomentidad']=$this->input->post('nomentidad');
		$dato['tipo']=$this->input->post('tipo');
		$resp=$this->Mpedidos->nuevaentidad($dato);
		if($resp>0){
			echo "Entidad creada con exito";

		}else{
			echo "Tarea no realizada";
		}

		


	}


	public  function pedidonuevo(){



if(!empty($_POST['idPersona'])){

   	
		$data['cc']=$this->input->post('idPersona');

		

		$data['idpersona']=$this->Mpedidos->idPersona($data);
		if($data['idpersona']==''){

			echo -1;

		}else{


		
		$data['factura']=$this->input->post('fac');
		
		$data['entidad']=$this->input->post('entidad');
		$data['dependencia']=$this->input->post('dependencia');
		$data['facultad']=$this->input->post('facultad');
		$data['fentrega']=$this->input->post('fentrega');
		$data['codtipoprod']=$this->input->post('codtipoprod');
		$data['talla']=$this->input->post('talla');
		$data['cantidad']=$this->input->post('cantidad');
		$data['descripcion']=$this->input->post('descripcion');
		$data['fecha_ingreso']=$hoy= date("Y/m/d,H:i:s");
		
		
		$retorno = array();
		$retorno=$this->Mpedidos->guardar($data);
		if($retorno[1]>0){
			//print_r($retorno[0]);aqui retorna el id del ultimo registro
			$data['idpedido']=	$retorno[0];


		$res=$this->Mpedidos->pedi_entidad($data);
		
	if ($res>=1) {
			echo 1;
			# code...
		}else{
			echo 0;
		}



		}else{
			echo 0;
		}

		

		


	

		}


}else{

	echo 0;
}



	}


	public  function pedidoEnvio(){


		//$res=$this->Mpedidos->lstpedidos();
		$res=$this->Mpedidos->lstpedidosrec();
		echo  json_encode($res);

	}

	public function RecibirPedido(){
		$idpedd=$this->input->post('idpedido');
		$cantidadReci=$this->input->post('cantidad');
		//validamos  si  la cantidad  a  ser  registrada es mayor a la  cantidad processada
		$cantProce=$this->Mpedidos->CantidadProcesada($idpedd);//58
		$cantAcumulada=$this->Mpedidos->CantidadAcumulada($idpedd);//0
		



		if($cantidadReci>$cantProce){
			echo "La cantidad Recibida  no a sido registrada en taller";

		}else{

			$cantdispo=$this->Mpedidos->pedidocant($idpedd);
			if($cantidadReci>$cantdispo){//58
				echo 'El pedido contiene  una cantidad menor';

			}else{

				$recacumulado=$this->Mpedidos->validarec($idpedd);
				$comp=$recacumulado+$cantidadReci;

				if($cantdispo<$comp){
					echo'No se puede  recibir esta cantidad '.$comp.'+'.$cantdispo;

				}else{


					$res=$this->Mpedidos->GuaradRecepcion($idpedd,$cantidadReci);

					$rc=$this->Mpedidos->validarec($idpedd);

					$tarea=$cantdispo-$rc;
					if($tarea==0){
						$this->Mpedidos->procesorecibido($idpedd);

					}





				if($res>=1){
					echo"Pedido recibido";

				}else{
					echo "No se recibio este pedido";
				}

				}


				
			
			}


		}
		






		//listar  todos los pedidos 
		//buscar si el pedido ya fue procesado alguna  vez
		// registrar en  tabla recepcionpedido verificando la cantidad procesada si es  superior  no dejar registrar

	}



	public function addRecpedido(){

		$datos['idpedido']=$this->input->post('idpedido');
		$datos['cantidad']=$this->input->post('cantidad');


		$res=$this->Mpedidos->addRecpedido($datos);
		echo $res;
	}


	public  function registroRecepcion(){



		$datos['idproceso']=$this->input->post('idproceso');
		$datos['cantidad']=$this->input->post('cntrec');

		$cantidadMax=$this->Mpedidos->cantidadMax($datos);

		if($datos['cantidad']>$cantidadMax){
			echo -1;

		}else{
		$datos['idpedido']=$this->Mpedidos->pedidoProceso($datos);


		$res=$this->Mpedidos->addRecibir($datos);
		echo $res;	
		}
		

	}


	 public  function resumenproceso(){
	 	$idpedido=$this->input->post('idpedido');
	 	$res=$this->Mpedidos->resumenproceso($idpedido);
	 	echo json_encode($res);

	 }




	 public function recibirPedidos(){

	 	$datos['idproceso']=$this->input->post('idproceso');
	 		$cantidad=$this->input->post('cantidad');
	 		$idpedido=$this->input->post('idpedido');

	 		$bandera=$this->Mpedidos->consultaexist($datos);

	 		if($bandera>=1){

	 			echo 'ESTE PEDIDO YA FUE  RECIBIDO';

	 		}else{

	 		

	 	
	 	
	 	

	 	$cnpedido=$this->Mpedidos->cantidadPedido($datos);


	 	// ver  cantidad  recibida
	 	$valor=$this->Mpedidos->cantidadRecibida($datos);
	 	if($valor== null){
	 		$cnrecibida=0;

	 	}else{
	 		$cnrecibida=$valor;

	 	}

	 	if($cnrecibida<$cnpedido){
	 		
	 	$issatelite=$this->Mpedidos->validauser($datos);
	 	 if($issatelite==2 or $issatelite==3 ){
	 	 	 	$idproceso=$datos['idproceso'];
	$h=$this->Mpedidos->addrecb($idproceso,$cantidad,$idpedido);
	if($h>=1){
echo "Registro recibido";
	}else{
echo "Error";
	}
	
	 	

	 	 
		   



	 	 }else{
	 	 	$idproceso=$datos['idproceso'];

	 		$r=$this->Mpedidos->addrecb($idproceso,$cantidad,$idpedido);

	 		if($r>=1){
	 			$x=$this->Mpedidos->listaCobro($datos);
echo "Registro recibido".$x;


	}else{
echo "Error";
	}
	 	 		



	 	 }





	 	}else{
	 		echo"LA  CANTIDAD  A INGRESAR NO PUEDE PROCESARCE";
	 	}


}




	 




	 }
}



 ?>