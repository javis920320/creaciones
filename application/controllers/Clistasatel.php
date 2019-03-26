<?php 

class Clistasatel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Madmin');
	}


	 public function index(){

	 	$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vlistasatelites');
	 	$this->load->view('layou/footer',$nombres);




	 }
	 
	  public function listaresumen(){

	  		$nombres['nombres']=$this->session->userdata('nombres');

	 	$this->load->view('layou/header',$nombres);
	 	$this->load->view('layou/menu',$nombres);
	 	$this->load->view('vresumensatelites');
	 	$this->load->view('layou/footer',$nombres);

	  }


 public  function verlista(){
$res=$this->Madmin->verlista();
echo json_encode($res);


 }
	 public  function lstvalores(){


	 	$res=$this->Madmin->lstvalores();
		echo json_encode($res);
	 }

	 
	 public function lstgeneral(){
		 
		$param['idtrabajador']=$this->input->post('trabajador');
		$idtrabajador=$param['idtrabajador'];
		
		$res=$this->Madmin->lstsatelite($idtrabajador);
		
		echo json_encode($res);
		
		 
		 
		 
	 }
	 
	 
	 public function cambiarestado(){
		 
		 
		 $idtrabajador=$this->input->post('idtrabajador');

		 $lista = array();

		 $res=$this->Madmin->ressatelite($idtrabajador);
		  foreach ($res as  $value) {

		  	$lista[]=$value->idproceso;
		  }


		  		
		   for ($i=0; $i < sizeof($lista); $i++) { 


		
		  $this->Madmin->addres("insert into historialsatelite(idproceso,fecha) values(".$lista[$i].",sysdate());");
		   }
		  //	



		  	


		  
       

		 
		$res= $this->Madmin->cambiarestado($idtrabajador);
		
		if($res>=1){
			echo 'Tarea realizada con exito';
			
		}else{
			echo 'Tarea no realizada';
		}
	 }


	 public  function vistasatelitehistorial(){

		$nombres['nombres']=$this->session->userdata('nombres');

		$this->load->view('layou/header',$nombres);
		$this->load->view('layou/menu',$nombres);
		$this->load->view('vhistorialsatelite');
		$this->load->view('layou/footer',$nombres);


	 }

	  public function historialSatelite(){

		$resul=$this->Madmin->historialSatelite();
		echo json_encode($resul);
	  }


	  public  function resSAtefecha($idtrabajador,$fecha){
		 $arreglo['idtrabajador']=$idtrabajador;//$this->input->post('idsatelite');
		 $arreglo['fecha']=$fecha;//$this->input->post('fechareg');

		 $res=$this->Madmin->resSAtefecha($arreglo);

		 $this->load->library('Excel');


		 $title=array('idproceso','nomprod','factura','facultad','talla','cantidad','precio','fecha','estado','descripcion','fecha_ingreso','nombres','prebordado');

		 $this->excel->setActiveSheetIndex(0);
		 $this->excel->getActiveSheet()->setTitle('Reporte Creaciones');


		   $col = 0;
		    foreach ($title as $field)
		    {
		       $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
		      
		        $col++;
		    }


		      $row = 2;
		    foreach($res as $data)
		    {
		        $col = 0;
		        foreach ($title as $field)
		        {
		            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);


		            $col++;
		        }

		        $row++;
		    }



		     $this->excel->getActiveSheet()
        ->getStyle('A1:M1')
        ->getFill()
        ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('#66a1b3');

		// echo json_encode($res);

		    $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 
$filename='REPORTE CREACIONES.xls'; //save our workbook as this file name
header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
             
//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');






	  }
	 
}













 ?>