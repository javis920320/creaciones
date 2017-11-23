<?php 

class Creporte extends CI_Controller
{
	



 public function __construct()
    {
       parent::__construct();
        //cargamos la libreria html2pdf
        $this->load->library('Excelfile');
        //$this->load->library('PHPExcel/PHPExcel_IOFactory');
        //cargamos el modelo pdf_model
       // $this->load->model('pdf_model');
    }



	public  function index(){


	//$this->load->view('pruebas');
		$archivo="./plantilla/reporte.xlsx";
		$plantilla=$this->phpexcel;
		$plantilla->setActiveSheetIndex(0)->setCellValue('A1','Nombre');
		$plantilla->setActiveSheetIndex(0)->setCellValue('A2','Apellidos');

		$plantilla->getActiveSheet()->setTitle('Report');

		$objgrabar=PHPExcel_IOFactory::createWriter($plantilla,'Excel2007');

		$objgrabar->save($archivo);



	}


///https://www.youtube.com/watch?v=SAeDi_vNjaQ


	public  function tabla(){


		//$this->load->library('PHPExcel');
		$archivo="./plantilla/reporte.xlsx";
		$plantilla=$this->PHPExcel;
		$plantilla->setActiveSheetIndex(0)->setCellValue('A1','Nombre');
		$plantilla->setActiveSheetIndex(0)->setCellValue('A2','Apellidos');

		$plantilla->getActiveSheet()->setTitle('Report');

		$objgrabar=PHPExcel_IOFactory::createWriter($plantilla,'Excel2007');

		$objgrabar->save($archivo);
	}


}
 ?>