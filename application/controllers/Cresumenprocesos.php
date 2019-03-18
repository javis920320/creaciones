<?php 



class Cresumenprocesos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		ob_start();

		$this->load->model('Mtrabajos');

		$this->load->library('export_excel');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('Vresumenproceso');
	 	$this->load->view('layou/footer',$nombres);




	 }

	 public  function listaProductos(){

	 	$res=$this->Mtrabajos->listaProductos();
	 	 echo json_encode($res);
	 }

	 public   function updateproceso(){

	 	$datos['idtrabajador']=$this->input->post('idtrabajador');
	 	$datos['idproceso']=$this->input->post('idproceso');
	 	$datos['tipoprecio']=$this->input->post('tipoprecio');
	 	$datos['id_prod']=$this->input->post('idproducto');
	 	$datos['cantidad']=$this->input->post('cantidad');


	$tipotrabajador=$this->Mtrabajos->tipotrabajador($datos);
	 if ($tipotrabajador==4) {
	 	
	 	if($datos['tipoprecio']==1){
	 		$res=$this->Mtrabajos->upprocesosatelite(0,0,$datos);
	 		echo "Cambio a Satelite".$datos['idtrabajador'];
	 		

	 	}else{

	 		 $precio=$this->Mtrabajos->precio($datos);
	 		$precio1=$this->Mtrabajos->precio1($datos);

	 		
	 		$this->Mtrabajos->upprocesosatelite($precio*$datos['cantidad'],$precio1*$datos['cantidad'],$datos);
	 		
	 		echo "valore normal".$datos['tipoprecio'];

	 	}

	 	
	 	
	 }else{


	 	if($datos['tipoprecio']==2){
	 		//precio normal

	 		

	 		$vadmin=$this->Mtrabajos->verPrecio('valor',$datos);
	 		$voperario=$this->Mtrabajos->verPrecio('subvalor',$datos);
	 	
 
$precio= $vadmin[0]->valor;
$precio1= $voperario[0]->subvalor;

$this->Mtrabajos->upprocesosatelite($precio*$datos['cantidad'],$precio1*$datos['cantidad'],$datos);
	 		 


	 		echo'DATOS ACTUALIZADOS';
	 		

	 	}else{
	 		
	 		$vadmin=$this->Mtrabajos->verPrecio('valor',$datos);
	 		$voperario=$this->Mtrabajos->verPrecio('precionocturno',$datos);
	 	
 
$precio= $vadmin[0]->valor;
$precio1= $voperario[0]->precionocturno;

$this->Mtrabajos->upprocesosatelite($precio*$datos['cantidad'],$precio1*$datos['cantidad'],$datos);
echo'DATOS ACTUALIZADOS';

	 		

	 	}






	 }





	 }


	 /*$this->Mtrabajos->actualizaPrecio($tipotrabajador,$datos);

	 	//si  tipo precio cambia calcular precio

	 	//$this->Mtrabajos->updatePrecio($datos);

	 	$tipotrabajador=$this->Mtrabajos->tipotrabajador($datos);

	 	$res=$this->Mtrabajos->updatecli($datos);
	 	echo $res;*/


	 public  function datosResumen(){
	 	$datos['idproceso']=$this->input->post('idproceso');

	 	$res=$this->Mtrabajos->tipotrabajador($datos);
	 	echo $res;


	 }




	 public function periodosaldo (){

	 	$param['idperiodo']=$this->input->post('idperiodo');


	 	$res=$this->Mtrabajos->periodosaldo($param);

	 	echo json_encode($res);



	 }


	public function saldoalmacen(){

		$param['idperiodo']=$this->input->post('idperiodo');


	 	$res=$this->Mtrabajos->saldoalmacen($param);

	 	echo json_encode($res);


	}




public  function tblresumen(){

	//$param['fechai']=$this->input->post('fechai');	
	//$param['fechaf']=$this->input->post('fechaf');	
	
	 $res=$this->Mtrabajos->tblresumen();
	 
	   

	 echo json_encode($res);





}
public  function tblresumeno(){

	//$param['fechai']=$this->input->post('fechai');	
	//$param['fechaf']=$this->input->post('fechaf');	
	
	 $res=$this->Mtrabajos->tblresumeno();
	 
	   

	 echo json_encode($res);





}



public  function listaperiodos(){

$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vlistaperiodos');
	 	$this->load->view('layou/footer',$nombres);

}


public  function vistarecumenperiodos($idperiodo){

$nombres['nombres']=$this->session->userdata('nombres');
$nombres['idperiodo']=$idperiodo;

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vresperiodos',$nombres);
	 	$this->load->view('layou/footer',$nombres);

}




 public function resumen(){


//$dato=$this->input->get('fechai');

$res=$this->Mtrabajos->resumen();
$this->export_excel->to_excel($res,'Resumen creaciones');



 }
 
 public  function resumentotal(){
	 
	 //$param['fechai']=$this->input->post('fechai');
	 //$param['fechaf']=$this->input->post('fechaf');
	 
	 $res= $this->Mtrabajos->resumentotal();
	 
	 echo json_encode($res);
	 
 }
 
 public  function tblperiodo(){
	 
	 
	 $res=$this->Mtrabajos->tblperiodo();
	 
	 echo json_encode($res);
	 
 }

 public  function tblperiodoc(){
	 
	 
	 $res=$this->Mtrabajos->tblperiodoc();
	 
	 echo json_encode($res);
	 
 }
 
 public  function updateperiodo(){
	 
	 $param['idperiodo']=$this->input->post('modper');
	 	 $param['fechai']=$this->input->post('fechaie');
		 	 $param['fechaf']=$this->input->post('fechafe');
			 
			 $res=$this->Mtrabajos->updateperiodo($param);
			 
			 if($res>=1){
				 echo 'Periodo Actualizado';
				 
			 }else{
				  echo 'Ocurrio un inconveniente';
			 }
	 
 }

  public  function nuevoperiodo(){
	 
	


	 	 $param['fechai']=$this->input->post('fechaie');
		 	 $param['fechaf']=$this->input->post('fechafe');


		 	 if($this->Mtrabajos->generanomina()){


		 	 if($this->Mtrabajos->desctivarperiodo()){


		 	 		 $res=$this->Mtrabajos->Nuevoperiodo($param);
			 
			 			if($res>=1){
				 					echo 'Nuevo periodo Creado';
				 
					    }else{
				 				 echo 'EL PERIODO NO SE CREADO';
						
						 }

		 	 }else{


		 	 	echo'No se logro Desactivar el periodo anterior';
		 	 }
			 
			}
	 
 }


  public  function almacenarsaldos(){




$arreglo['finicio']=$this->input->post('finicio');

$arreglo['fechaf']=$this->input->post('fechaf');

$arreglo['finicio']=$this->input->post('finicio');

$arreglo['finicio']=$this->input->post('finicio');
  }


  public function vertipo(){
  	$datos['idtrabajador']=$this->input->post('idtrabajador');


  	$res=$this->Mtrabajos->vertipo($datos);
  	echo $res[0]->tipo;




  }







}



 ?>

